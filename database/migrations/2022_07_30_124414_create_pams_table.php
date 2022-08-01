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
        Schema::create('pams', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pegawai',4)->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('nomor_rekening');
            $table->string('pemakaian');
            $table->string('plafon');
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
        Schema::dropIfExists('pams');
    }
};
