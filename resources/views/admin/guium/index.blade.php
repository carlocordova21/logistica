@extends('admin.layouts.app')

@section('template_title')
    Guium
@endsection

@section('content')
    <div class="container m-auto">
            @php
                $send = true;
                if($guia->isEmpty()) {
                    $send = false;
                }
            @endphp
            <form action="{{ route('guia.register', $send)}}" method="post">
                @csrf
                <input type="submit" id="btn-registrar" class="btn btn-success my-2" onclick="registrarGuia()" value="Registrar Guia de Ingreso">
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
    
                                <span id="card_title">
                                    {{ __('Guia de Ingreso') }}
                                </span>
    
                                 <div class="float-right">
                                    <a href="{{ route('guia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                      {{ __('Nuevo Producto') }}
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
                                            
                                            <th>Producto</th>
                                            <th>Condicion</th>
                                            <th>Cantidad</th>
    
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($guia as $guium)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $guium->producto->nombre }}</td>
                                                <td>{{ $guium->condicion->nombre }}</td>
                                                <td>{{ $guium->cantidad }}</td>
    
                                                <td>
                                                    <form action="{{ route('guia.destroy',$guium->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('guia.show',$guium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('guia.edit',$guium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $guia->links() !!}
                </div>
            </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/guia.js') }}"></script>
@endsection