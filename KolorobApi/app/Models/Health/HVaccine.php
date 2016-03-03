<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HVaccine extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.h_vaccine';
    protected $guarded = array();
}
