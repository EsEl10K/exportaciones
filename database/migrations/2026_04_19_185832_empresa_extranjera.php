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
        Schema::create('empresa_extranjera', function (Blueprint $table) {
            $table->increments('id_empresa_ext');
            $table->string('nombre_empresa', 100);
            $table->string('pais', 50)->nullable();
            $table->string('ciudad', 50)->nullable();
            $table->string('contacto', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa_extranjera');
    }
};