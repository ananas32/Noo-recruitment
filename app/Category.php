<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Category extends Model
{
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['title', 'body', 'meta_title', 'meta_keywords', 'meta_description'];
    protected $fillable = ['name', 'slug'];
    protected $with = ['translations'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * Get slides for category.
     */
    public function slides()
    {
        return $this->hasMany('App\ArticleSlider');
    }

    public function scopeGetActiveBySlug($query, $slug)
    {
        return $this->where('slug', $slug)
            ->firstOrFail();
    }
}
