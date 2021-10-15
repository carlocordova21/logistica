<?php

namespace App\Observers;

use App\Models\Producto;

class ProductoObserver
{
    public $afterCommit = true;

    /**
     * Handle the Producto "updated" event.
     *
     * @param  \App\Models\Producto  $producto
     * @return void
     */
    public function updated(Producto $producto)
    {
        if($producto->stock == 0) {
            $producto->status = 0;
            $producto->save();
        }
    }
}
