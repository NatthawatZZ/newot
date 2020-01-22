<?php

namespace App;
use App\User;
use App\table_personnel;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'psn_id', 'mb_title', 'mb_fname', 'mb_lname','mb_age','mb_idcard',
        'mb_birth','pst_id','mb_mobile','email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'password', 'remember_token',
        // 'mb_password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
      'email_verified_at' => 'datetime',
        // 'psn_id' => 'datetime',
    ];

    public function psn_per_id()
    {
      return $this->belongsTo(table_personnel::class,'psn_per_id','psn_id');
  }
}
