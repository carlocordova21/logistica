<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function show($producto) {
        $result = Producto::where('nombre', $producto)->get();
        
        if(empty(json_decode($result))) return 'Redirigir a 404';
        return view('producto.show', compact('producto', 'result'));
    }
}