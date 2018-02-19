<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\CroppedPhotos;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Company extends Model
{
    use CroppedPhotos;
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['company_name', 'description'];
    protected $fillable = ['adress', 'numbers', 'email', 'admin_active', 'company_active', 'image'];
    protected $with = ['translations'];

    public function countryId()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function country()
    {
        return $this->countryId();
    }

}
