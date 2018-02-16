<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Vacancy extends Model
{
    use EdipresseTranslatable;

    public $timestamps = false;
    protected $translatable = ['name_vacancy', 'description'];
    protected $fillable = ['sex', 'age', 'payment', 'admin_active', 'vacancy_active'];
    protected $with = ['translations'];

}
