<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    protected $fillable = [
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
}
