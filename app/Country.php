<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\CroppedPhotos;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Country extends Model
{
    use CroppedPhotos;
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['name'];
    protected $fillable = ['image'];
    protected $with = ['translations'];

}
