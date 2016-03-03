<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class PaymentDocs extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.f_payment_documents';
    protected $guarded = array();
}
