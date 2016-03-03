<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HNode extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.h_node';
    protected $guarded = array();
}
