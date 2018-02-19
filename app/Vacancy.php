<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\CroppedPhotos;
use TCG\Voyager\Traits\EdipresseTranslatable;

class Vacancy extends Model
{
    use EdipresseTranslatable;
    use CroppedPhotos;

    public $timestamps = false;
    protected $translatable = ['name_vacancy', 'description', 'experience'];
    protected $fillable = ['image', 'sex', 'age', 'payment', 'admin_active', 'vacancy_active'];
    protected $with = ['translations'];

    public function statusId()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function fieldId()
    {
        return $this->belongsTo(Company::class, 'field_id', 'id');
    }

    public function company()
    {
        return $this->fieldId();
    }

}
