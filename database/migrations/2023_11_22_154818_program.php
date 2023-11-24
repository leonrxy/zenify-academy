<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('harga');
            $table->string('jangka_waktu');
            $table->string('jml_pertemuan');
            $table->string('waktu_pertemuan');
            $table->string('info_1');
            $table->string('na_info_1');
            $table->string('info_2');
            $table->string('na_info_2');
            $table->string('info_3');
            $table->string('na_info_3');
            $table->string('style');
            $table->string('label');
            $table->string('info_label');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
