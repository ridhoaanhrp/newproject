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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('password');
            $table->string('nim',10)->unique();
            $table->string('nama');
            $table->string('judul');
            $table->string('kode_dosen1');
            $table->string('kode_dosen2');
            // $table->foreign('kode_dosen1')
            //     ->references('kode_dosen')->on('dosens')->onDelete('cascade');
            
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
        Schema::dropIfExists('mahasiswas');
    }
};
