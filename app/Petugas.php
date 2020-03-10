<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
 	protected $guarded = ['id_petugas'];
	protected $primaryKey = 'id_petugas';

 	public function user()
     {
     	return $this->belongTo(User::class, 'user_id');
     } 

     public function tanggapan()
     {
     	return $this->hasMany(Petugas::class, 'id_petugas');
     } 
}
