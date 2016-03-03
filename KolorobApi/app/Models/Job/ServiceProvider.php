<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.job_service_provider';
    protected $guarded = array();
}
