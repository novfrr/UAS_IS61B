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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jk');
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('alamat');
            $table->string('tempat_tinggal');
            $table->string('no_hp');
            $table->string('no_kps')->nullable();
            $table->string('asal_sek');

            $table->string('nm_ayah');
            $table->string('nm_ibu');
            $table->integer('umur_ayah')->nullable();
            $table->integer('umur_ibu')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('ket_ayah')->nullable();
            $table->string('ket_ibu')->nullable();

            $table->integer('tinggi')->nullable();
            $table->integer('berat')->nullable();
            $table->integer('jarak_tempuh')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('jumlah_saudara')->nullable();

            $table->string('ijazah')->nullable();
            $table->string('kks_kps')->nullable();
            $table->string('kk')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
