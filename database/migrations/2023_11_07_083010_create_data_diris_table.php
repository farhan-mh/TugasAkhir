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
        Schema::create('data_diris', function (Blueprint $table) {
            $table->id();
            $table->String('NIK');
            $table->String('nama');
            $table->String('tempat_tglLahir');
            $table->String('Jenis_kelamin');
            $table->String('Alamat');
            $table->String('Rt_Rw');
            $table->String('KelDesa');
            $table->String('Kecamatan');
            $table->String('Agama');
            $table->String('Status_Perkawinan');
            $table->String('Pekerjaan');
            $table->String('Kewarganegaraan');
            $table->String('Berlaku_Hingga');
            $table->timestamps();
        });
    }
};
