<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HService extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.h_service';
    protected $guarded = array();
}
