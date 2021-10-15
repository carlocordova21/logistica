<?php

namespace App\Observers;

use App\Models\IngresoDetalle;
use App\Models\Producto;

class IngresoDetalleObserver
{
    /**
     * Handle the IngresoDetalle "created" event.
     *
     * @param  \App\Models\IngresoDetalle  $ingresoDetalle
     * @return void
     */
    public function created(IngresoDetalle $ingresoDetalle)
    {
        $producto = Producto::find($ingresoDetalle->idProducto);
        $producto->stock += $ingresoDetalle->cantidad; 
        $producto->save();
    }
}
