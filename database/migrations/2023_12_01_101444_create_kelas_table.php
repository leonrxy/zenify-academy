<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('hari');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('mata_pelajaran');
            $table->string('kode_kelas');
            $table->timestamps();
        });

        Schema::create('kelas_siswa', function (Blueprint $table) {
            $table->foreignId('kelas_id')->constrained();
            $table->foreignId('siswa_id')->constrained();
            $table->primary(['kelas_id', 'siswa_id']);
        });

        Schema::create('kelas_instruktur', function (Blueprint $table) {
            $table->foreignId('kelas_id')->constrained();
            $table->foreignId('instruktur_id')->constrained();
            $table->primary(['kelas_id', 'instruktur_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelas_siswa');
        Schema::dropIfExists('kelas_instruktur');
        Schema::dropIfExists('kelas');
    }
};
