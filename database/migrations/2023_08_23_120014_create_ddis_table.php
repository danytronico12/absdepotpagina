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
        Schema::create('ddis', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('seguidores')->nullable();
            $table->date('nacimiento')->nullable();
            $table->unsignedInteger('post')->nullable();
            $table->unsignedInteger('stories')->nullable();
            $table->string('contenido')->nullable();
            $table->string('otro')->nullable();
            $table->string('usuario')->nullable();
            $table->string('redes')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ddis');
    }
};
