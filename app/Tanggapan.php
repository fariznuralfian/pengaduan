<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
       protected $table = 'tanggapam';
	   protected $guarded = ['id_tanggapan'];
	   protected $primaryKey = 'id_tanggapan';

	   public function petugas()
     {
     	return $this->belongTo(Petugas::class, 'id_petugas');
     } 

     public function pengaduan()
     {
     	return $this->hasMany(Pengaduan::class, 'id_pengaduan');
     } 

}
