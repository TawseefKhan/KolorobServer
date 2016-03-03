<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.f_bills';
    protected $guarded = array();
}
