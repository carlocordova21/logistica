<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingreso;
use App\Models\IngresoDetalle;
use App\Models\Guium;

use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function index(Request $request)
    {
        $ingresoBuscado = $request->get('ingresos');
        
        $detalles = IngresoDetalle::where('idIngreso', '=', $ingresoBuscado)->paginate();
        if($ingresoBuscado == null or $ingresoBuscado == 'all') {
            $detalles = IngresoDetalle::paginate();
        }
        
        $ingresos = Ingreso::all();
        
        return view('admin.ingreso.index', compact('detalles', 'ingresos'))
            ->with('i', (request()->input('page', 1) - 1) * $detalles->perPage());
    }
}