<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Company extends Model
{
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['company_name', 'description'];
    protected $fillable = ['adress', 'numbers', 'email', 'admin_active', 'company_active', 'image'];
    protected $with = ['translations'];

    public function CountryId()
    {
        return $this->belongsTo(Country::class, 'author_id', 'id');
    }

}
