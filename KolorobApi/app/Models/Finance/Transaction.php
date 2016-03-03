<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.f_money_transaction';
    protected $guarded = array();
}
