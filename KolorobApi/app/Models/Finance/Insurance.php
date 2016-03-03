<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.f_insurance';
    protected $guarded = array();
}
