<?php

namespace App\Models\Gov;

use Illuminate\Database\Eloquent\Model;

class ServiceCenterData extends Model
{
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.service_center_data';
    protected $guarded = array();
}
