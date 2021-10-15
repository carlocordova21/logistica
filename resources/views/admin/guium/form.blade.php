<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Producto') }}
            {{ Form::select('idProducto', $productos, $guium->idProducto, ['class' => 'form-control' . ($errors->has('idProducto') ? ' is-invalid' : '')]) }}
            {!! $errors->first('idProducto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condicion') }}
            {{ Form::select('idCondicion', $condiciones, $guium->idCondicion, ['class' => 'form-control' . ($errors->has('idCondicion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('idCondicion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::number('cantidad', $guium->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad', 'min' => '1']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>