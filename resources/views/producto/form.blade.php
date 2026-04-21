<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nombre_producto" class="form-label">{{ __('Nombre Producto') }}</label>
            <input type="text" name="nombre_producto" class="form-control @error('nombre_producto') is-invalid @enderror" value="{{ old('nombre_producto', $producto?->nombre_producto) }}" id="nombre_producto" placeholder="Nombre Producto">
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="categoria" class="form-label">{{ __('Categoria') }}</label>
            <input type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" value="{{ old('categoria', $producto?->categoria) }}" id="categoria" placeholder="Categoria">
            {!! $errors->first('categoria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="tipo_producto" class="form-label">{{ __('Tipo Producto') }}</label>
            <input type="text" name="tipo_producto" class="form-control @error('tipo_producto') is-invalid @enderror" value="{{ old('tipo_producto', $producto?->tipo_producto) }}" id="tipo_producto" placeholder="Tipo Producto">
            {!! $errors->first('tipo_producto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="es_controlado" class="form-label">{{ __('Es Controlado') }}</label>
            <select name="es_controlado" id="es_controlado" class="form-control @error('es_controlado') is-invalid @enderror">
                <option value="">Selecciona una opción</option>
                <option value="1" {{ old('es_controlado', $producto?->es_controlado) == 1 ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('es_controlado', $producto?->es_controlado) == 0 ? 'selected' : '' }}>No</option>
            </select>
            {!! $errors->first('es_controlado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>

    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>