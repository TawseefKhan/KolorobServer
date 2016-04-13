<?php

namespace App\Models\Gov;

use Illuminate\Database\Eloquent\Model;

class Gov extends Model
{
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob._service_center';
    protected $guarded = array();
}
