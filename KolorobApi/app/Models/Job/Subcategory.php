<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.job_subcategory';
    protected $guarded = array();
}
