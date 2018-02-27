<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
	protected $table = 'resumes';

	protected $fillable = [
		"work_id",
		"name",
		"surname",
		"middle_name",
		"age",
		"email",
		"drive_license",
		"level_education",
		"qualification",
		"experience",
		"en",
		"de",
		"ve",
		"other_languages",
		"money", 
		"file"
	];

	public function workId()
    {
        return $this->belongsTo(Vacancy::class);
    }

}
