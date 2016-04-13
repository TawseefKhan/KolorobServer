<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class EduSubCategory extends Model
{
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.education_subcategory';
    protected $guarded = array();
}
