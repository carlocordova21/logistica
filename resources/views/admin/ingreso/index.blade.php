@extends('admin.layouts.app')

@section('template_title')
Ingreso
@endsection

@section('content')
<div class="container m-auto">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <div style="display: flex; justify-content: space-between; align-items: center;">

                  <form>
                     <label for="ingresos">{{ __('Ingreso') }}</label>
                     <select name="ingresos" id="ingresos" class="card-title">
                        <option value="all">All</option>
                        @foreach ($ingresos as $ingreso)
                        <option value="{{ $ingreso->id }}">{{ $ingreso->id }}</option>
                        @endforeach
                     </select>
                     <input type="submit" value="Buscar">
                  </form>
                  <div class="float-right">
                     <a href="{{ route('guia.index') }}" class="btn btn-primary btn-sm float-right"
                        data-placement="left">
                        {{ __('Nueva Guia') }}
                     </a>
                  </div>
               </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
               <p>{{ $message }}</p>
            </div>
            @endif

            <div class="card-body">

               <div class="table-responsive">
                  <table class="table table-striped table-hover">
                     <thead class="thead">
                        <tr>
                           <th>No</th>
                           <th>Ingreso</th>
                           <th>Producto</th>
                           <th>Condicion</th>
                           <th>Cantidad</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($detalles as $detalle)
                        <tr>
                           <td>{{ ++$i }}</td>
                           <td class="detalle-ingreso">{{ $detalle->ingreso->id }}</td>
                           <td>{{ $detalle->producto->nombre }}</td>
                           <td>{{ $detalle->condicion->nombre }}</td>
                           <td>{{ $detalle->cantidad }}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         {!! $detalles->links() !!}
      </div>
   </div>
</div>
@endsection
