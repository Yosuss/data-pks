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
        //
        Schema::create('data_pks', function(Blueprint $table){
            $table->id('id_data_pks');
            $table->string('tanggal');
            $table->string('nama_perusahaan');
            $table->string('golongan');
            $table->integer('minimum');
            $table->integer('tarif_1');
            $table->integer('tarif_2');
            $table->integer('tarif_3');
            $table->integer('masa_perjanjian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('data_pks');
    }
};