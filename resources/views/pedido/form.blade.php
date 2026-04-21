<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="id_empresa_ext" class="form-label">{{ __('ID Empresa Extranjera') }}</label>
            <input type="text" name="id_empresa_ext" class="form-control @error('id_empresa_ext') is-invalid @enderror" value="{{ old('id_empresa_ext', $pedido?->id_empresa_ext) }}" id="id_empresa_ext" placeholder="ID Empresa Extranjera">
            {!! $errors->first('id_empresa_ext', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="fecha_pedido" class="form-label">{{ __('Fecha Pedido') }}</label>
            <input type="date" name="fecha_pedido" class="form-control @error('fecha_pedido') is-invalid @enderror" value="{{ old('fecha_pedido', $pedido?->fecha_pedido) }}" id="fecha_pedido">
            {!! $errors->first('fecha_pedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>

    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>