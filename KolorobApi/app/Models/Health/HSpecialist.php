<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HSpecialist extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.h_specialist';
    protected $guarded = array();
}
