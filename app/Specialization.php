<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Specialization extends Model
{
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['name'];
    protected $fillable = ['active'];
    protected $with = ['translations'];

}
