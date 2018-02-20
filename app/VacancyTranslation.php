<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacancyTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name_vacancy',
        'description',
        'experience',
        'conditions',
        'responsibility',
        'work_schedule'
    ];
}
