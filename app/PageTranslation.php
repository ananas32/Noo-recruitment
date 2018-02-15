<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'body', 'meta_title', 'meta_keywords', 'meta_description'];
}
