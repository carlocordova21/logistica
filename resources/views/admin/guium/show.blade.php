@extends('admin.layouts.app')

@section('template_title')
    {{ $guium->name ?? 'Show Guium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Guium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('guia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idproducto:</strong>
                            {{ $guium->idProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Idcondicion:</strong>
                            {{ $guium->idCondicion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $guium->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
