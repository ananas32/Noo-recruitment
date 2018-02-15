<?php

namespace App;

use Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\CroppedPhotos;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Article extends Model
{
    use CroppedPhotos,
    EdipresseTranslatable {
        save as traitsave;
    }

    public $timestamps = false;
    protected $translatable = [
        'creator_id',
        'editor_id',
        'published_at',
        'photo_alt',
        'title',
        'slug',
        'body',
        'incision',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'views',
        'likes',
        'comments',
        'active',
        'video',
        'created_at',
        'updated_at',
        'og_title',
        'og_description',
    ];

    protected $fillable = [
        'deleted_at',
        'category_id',
        'image',
        'og_image',
    ];

    function save(array $options = [])
    {
        $auth_id = Auth::id();

        if (!$this->creator_id) {
            $this->creator_id = $auth_id;
        }

        $this->editor_id = $auth_id;
        $this->traitsave();
    }

    protected $with = ['translations'];

    function creatorId()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    function editorId()
    {
        return $this->belongsTo(User::class, 'editor_id', 'id');
    }

    public function categoryId()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function category()
    {
        return $this->categoryId();
    }

    /**
     * Scope a query to only include active articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->whereTranslation('active', '=', 1);
    }

    /**
     * Scope a query to only include published articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->whereTranslation('published_at', '<', Carbon::now());
    }

    /* Dynamic fields */
    public function getDateAttribute()
    {
        return Carbon::parse($this->published_at)->format('d.m.Y');
    }

    public function getAtomDateAttribute()
    {
        return Carbon::parse($this->published_at)->toAtomString();
    }

    public function getRssDateAttribute()
    {
        return Carbon::parse($this->published_at)->toRssString();
    }

    public function getUrlAttribute()
    {
        if (!isset($this->id)) {
            return '';
        }
        //for news
        return url($this->category->slug
            . '/' . $this->id
            . '-' . $this->slug);
    }

    public function redirect($request)
    {
        return redirect()->route('voyager.articles.edit', $this->id)->with([
            'message' => __('voyager.generic.successfully_updated'),
            'alert-type' => 'success',
        ]);
    }

    public function scopeFreshMain($query, $offset = 0, $limit = 10)
    {
        return $query->active()->published()
            ->orderByTranslation('published_at', 'desc')
            ->offset($offset)
            ->limit($limit);
    }

    public function scopeActiveList($query)
    {
        return $query->active()->published();
    }

    public function scopeBySlugs($query, $id, $slug)
    {
        return $query->where('id', $id)
            ->whereTranslation('slug', '=', $slug);
    }
}
