<?php

namespace App\Models\Legal_aid;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.legal_aid_service_provider';
    protected $guarded = array();
}
