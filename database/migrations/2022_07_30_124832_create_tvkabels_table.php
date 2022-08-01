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
        Schema::create('tvkabels', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pegawai')->unique();
            $table->string('nama');
            $table->string('nomor_hp');
            $table->string('jenis_tv');
            $table->string('nomor_id');
            $table->string('pemakaian');
            $table->string('plafon');
            $table->string('roaming_ln');
            $table->string('beban_pegawai');
            $table->string('beban_perusahaan');
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
        Schema::dropIfExists('tvkabels');
    }
};
