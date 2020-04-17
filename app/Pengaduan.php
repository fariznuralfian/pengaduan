<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
       protected $table = 'pengaduan';
	   protected $guarded = ['pengaduan'];
	   protected $primaryKey = 'id_pengaduan';
	   protected $fillable = ['judul', 'kategori_laporan', 'isi_laporan', 'foto', 'id_masyarakat', 'tgl_pengaduan'];


	   public function masyarakat()
	   {
	   	return $this->belongsTo(Masyarakat::class,'id_masyarakat');
	   }

	   public function tanggapan()
	   {
	   	return $this->belongsTo(Tanggapan::class,'id_tanggapan');
	   }
}
