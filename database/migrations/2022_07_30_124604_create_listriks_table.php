<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listriks', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pegawai',4)->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('nomor_kontrol');
            $table->string('tagihan');
            $table->string('biaya_admin');
            $table->string('pemakaian');
            $table->string('plafon');
            $table->string('beban_pegawai');
            $table->string('beban_perusahaan');
            $table->string('keterangan');
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
        Schema::dropIfExists('listriks');
    }
};
