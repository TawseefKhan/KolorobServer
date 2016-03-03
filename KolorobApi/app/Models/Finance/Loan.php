<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.f_loan';
    protected $guarded = array();
}
