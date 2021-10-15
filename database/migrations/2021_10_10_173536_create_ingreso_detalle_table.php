<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso_detalle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idIngreso')->constrained('ingreso');
            $table->foreignId('idProducto')->constrained('producto');
            $table->foreignId('idCondicion')->constrained('condicion');
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingreso_detalle');
    }
}
