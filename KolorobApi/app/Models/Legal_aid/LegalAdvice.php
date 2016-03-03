<?php

namespace App\Models\Legal_aid;

use Illuminate\Database\Eloquent\Model;

class LegalAdvice extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.legal_aid_type_service_provider_legal_advice';
    protected $guarded = array();
}
