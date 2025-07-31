<?php

use Illuminate\Database\Migrations\Migrations;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tas', function (Blueprint $table){
            $table->id();
            $table->string('brand');
            $table->integer('tahun');
             $table->string('bahan');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
