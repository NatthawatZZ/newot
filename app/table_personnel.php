<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_personnel extends Model
{
    protected $table = 'table_personnel';

    public function user()
    {
    return $this->hasMany(User::class,'psn_per_id','psn_id');
    }

    public function getUser()
    {
      return $this->hasOne(User::class,'psn_id','psn_id');
    }
}
// $findpersonner = table_personnel::with('getUser')->where('psn_per_id',$request->email)->first();
