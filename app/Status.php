<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Status extends Model
{
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['name'];
    protected $with = ['translations'];
    protected $table = 'status';
}
