<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guium;
use App\Models\Ingreso;
use App\Models\IngresoDetalle;
use App\Models\Producto;
use App\Models\Condicion;
use Illuminate\Http\Request;

/**
 * Class GuiumController
 * @package App\Http\Controllers
 */
class GuiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guia = Guium::paginate();

        return view('admin.guium.index', compact('guia'))
            ->with('i', (request()->input('page', 1) - 1) * $guia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guium = new Guium();
        $productos = Producto::pluck('nombre', 'id');
        $condiciones = Condicion::pluck('nombre', 'id');
        return view('admin.guium.create', compact('guium', 'productos', 'condiciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Guium::$rules);

        $guium = Guium::create($request->all());

        return redirect()->route('guia.index')
            ->with('success', 'Guium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guium = Guium::find($id);

        return view('admin.guium.show', compact('guium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guium = Guium::find($id);
        $productos = Producto::pluck('nombre', 'id');
        $condiciones = Condicion::pluck('nombre', 'id');

        return view('admin.guium.edit', compact('guium', 'productos', 'condiciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Guium $guium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guium $guium)
    {
        request()->validate(Guium::$rules);

        $guium->update($request->all());

        return redirect()->route('guia.index')
            ->with('success', 'Guium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $guium = Guium::find($id)->delete();

        return redirect()->route('guia.index')
            ->with('success', 'Guia deleted successfully');
    }

    public function register($send) {
        $idIngreso = $this->crearIngreso();
        $guia = Guium::all();
        foreach(Guium::all() as $guia) {
            IngresoDetalle::create([
                'idIngreso' => $idIngreso,
                'idProducto' => $guia['idProducto'],
                'idCondicion' => $guia['idCondicion'],
                'cantidad' => $guia['cantidad'],
            ]);
        }

        $this->clearGuium(); 
        return redirect()->route('ingreso.index');
    }

    public function crearIngreso() {
        $ingreso = new Ingreso();
        $ingreso->save();
        $idIngreso = Ingreso::pluck('id')->last();
        return $idIngreso;
    }

    public function clearGuium() {
        Guium::truncate();
    }
}
