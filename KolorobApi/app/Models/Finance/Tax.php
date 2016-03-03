<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.f_tax';
    protected $guarded = array();
}
