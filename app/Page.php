<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Page extends Model
{
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['title', 'body', 'meta_title', 'meta_keywords', 'meta_description'];
    protected $fillable = ['slug', 'order', 'menu'];
    protected $with = ['translations'];

    public function scopeGetMenuList()
    {
        return $this->where('menu', 1)
            ->orderBy('order', 'ASC')->get();
    }
    
}
