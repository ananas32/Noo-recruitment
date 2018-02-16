<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Status extends Model
{
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['title', 'body', 'meta_title', 'meta_keywords', 'meta_description'];
    protected $with = ['translations'];

}
