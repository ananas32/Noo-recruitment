<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacancyQuestion extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'contact', 'text'];

    public function vacancyId()
    {
        return $this->belongsTo(Vacancy::class, 'vacancy_id', 'id');
    }
}
