<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
       protected $table = 'pengaduan';
	   protected $guarded = ['pengaduan'];
	   protected $primaryKey = 'id_pengaduan';

	   public function masyarakat()
	   {
	   	return $this->belongsTo(Masyarakat::class,'id_masyarakat');
	   }

	   public function tanggapan()
	   {
	   	return $this->belongsTo(Tanggapan::class,'id_tanggapan');
	   }
}
