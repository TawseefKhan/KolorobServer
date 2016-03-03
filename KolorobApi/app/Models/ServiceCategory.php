<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.service_category';
    protected $guarded = array();
}
