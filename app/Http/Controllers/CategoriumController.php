<?php

namespace App\Http\Controllers;

use App\Models\Categorium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriumController extends Controller
{
    public function show($categoria)
    {
        $result = DB::table('categoria')
            ->join('producto', 'categoria.id', '=', 'producto.idCategoria')
            ->select('producto.id as id_producto', 'producto.nombre as nombre_producto', 'producto.precio as precio_producto', 'producto.stock as stock_producto', 'producto.url_img as url_img_producto')->where('categoria.nombre', $categoria)->where('producto.status', 1)->get();

        if (empty(json_decode($result))) return 'Redirigir a 404';
        return view('categoria.show', compact('categoria', 'result'));
    }
}
