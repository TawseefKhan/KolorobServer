<?php

namespace App\Models\Legal_aid;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'kolorob.legal_aid_subcategory';
    protected $guarded = array();
}
