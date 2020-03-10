<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $guarded = ['id'];
    protected $hidden = [
        'password', 'remember_token',
    ];

   public function masyarakat()
   {
       return $this->hasMany(Masyarakat::class, 'user_id');
   }

    public function petugas()
   {
       return $this->hasMany(Petugas::class, 'user_id');
   }
}
