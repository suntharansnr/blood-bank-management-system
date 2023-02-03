<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class Donation extends Authenticatable
{
    protected $primaryKey = 'id'; // or null

    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
      'blood_qty',
      'blood_status',
      'donate_date',
      'result_date',
      'blood_type',
      'sysphilis',
      'hepatitis_B_virus',
      'human_immunodeﬁciency_virus',
      'hepatitis_C_virus',
      't_cruzi',
      'malaria',
      'human_T_lympotrophic_virus',
      'west_nile_virus',
      'cytomegalovirus',
      'hepatitis_E_virus',
      'email_status',
      'donor_id',
      'hospital_id',
      'stock_id'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function stock(){
      return $this->belongsTo('App\Models\Stock');
    }
}
