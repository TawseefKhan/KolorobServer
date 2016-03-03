<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class EducationServiceProviderCourse extends Model
{
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.education_service_provider_course';
    protected $guarded = array();
}
