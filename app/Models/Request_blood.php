<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request_blood extends Model
{
  protected $table = 'requests';
  protected $fillable = [
    'blood_type','type_rh','request_amount','request_date','request_message','request_status','request_email_status','request_senddate','hospital_id'
  ];

  public function hospital(){
    return $this->belongsTo("App\Models\Hospital");
  }
}
