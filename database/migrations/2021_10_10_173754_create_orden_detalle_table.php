<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_detalle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idOrden')->constrained('orden');
            $table->foreignId('idProducto')->constrained('producto');
            $table->decimal('precio', 8, 2);
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
        Schema::dropIfExists('orden_detalle');
    }
}
