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
        Schema::create('bimbingans', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_bimbingan');
            $table->string('to_do_list');
            $table->string('catatan');
            // $table->foreign('nim')
            //     ->references('nim')->on('mahasiswas')->onDelete('cascade');
            // $table->foreign('kode_dosen')
            //     ->references('kode_dosen')->on('dosens')->onDelete('cascade');
            // $table->foreign('id_progress')
            //     ->references('id')->on('progress')->onDelete('cascade');
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
        Schema::dropIfExists('bimbingans');
    }
};
