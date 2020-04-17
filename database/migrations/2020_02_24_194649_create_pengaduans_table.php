<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->increments('id_pengaduan');
            $table->datetime('tgl_pengaduan');
            $table->unsignedInteger('id_masyarakat');
            $table->foreign('id_masyarakat')->on('masyarakat')->references('id_masyarakat')->onDelete('cascade')->onUpdate('cascade');
            $table->string('judul', 32);
            $table->text('isi_laporan');
            $table->string('foto');
            $table->enum('status',['0', 'proses','selesai']);
            $table->enum('kategori_laporan',['kriminal','teknologi', 'lingkungan', 'sosial', 'politi', 'ekonomi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
}
