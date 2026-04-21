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
        Schema::create('empresa_mexicana', function (Blueprint $table) {
            $table->increments('id_empresa_mex');
            $table->string('nombre_empresa', 100);
            $table->string('rfc', 13);
            $table->string('sector', 50)->nullable();
            $table->string('direccion', 150)->nullable();
            $table->string('telefono', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa_mexicana');
    }
};