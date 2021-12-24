<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pendaftaran')->default(date("Y-m-d"));
            $table->date('tgl_pkl_magang');
            $table->string('perusahaan',50);
            $table->timestamps();
        });

        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->foreignId('id_mahasiswa')->constrained('mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
