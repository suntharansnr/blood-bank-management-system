<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
      'blood_type',
      'blood_volume',
      'blood_expire_date',
      'blood_receive_date',
      'send_status',
      'expire_status',
      'type_rh',
    ];
    public function Donation(){
      return $this->hasOne('App\Models\Donation');
    }
}
