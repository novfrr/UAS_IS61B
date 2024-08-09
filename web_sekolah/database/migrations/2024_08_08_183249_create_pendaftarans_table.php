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
            $table->string('nisn')->unique;
            $table->string('nik')->unique;
            $table->string('nama');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('alamat');
            $table->string('tempat_tinggal');
            $table->string('transportasi');
            $table->string('no_kps');
            $table->string('asal_sek');

            $table->string('nm_ayah');
            $table->date('tgl_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('ket_ayah');
            $table->string('nm_ibu');
            $table->date('tgl_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('ket_ibu');

            $table->string('tinggi');
            $table->string('berat');
            $table->string('jarak');
            $table->string('waktu_tempuh');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');

            $table->string('ijazah');
            $table->string('foto');
            $table->string('kk');
            $table->string('kps');
            $table->string('password');
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
