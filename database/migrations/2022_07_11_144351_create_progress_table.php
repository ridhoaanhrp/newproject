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
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->integer('abstrak');
            $table->integer('bab_1');
            $table->integer('bab_2');
            $table->integer('bab_3');
            $table->integer('daftar_pustaka');
            // $table->string('nim')->unsigned();
            // $table->foreign('nim')
            //     ->references('nim')->on('mahasiswas')->onDelete('cascade');
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
        Schema::dropIfExists('progress');
    }
};
