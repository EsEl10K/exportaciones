@extends('layouts.app')

@section('template_title')
    {{ __('Show') . ' ' . __('Producto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('productos.index') }}">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>ID Producto:</strong>
                            {{ $producto->id_producto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->nombre_producto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Categoria:</strong>
                            {{ $producto->categoria }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo Producto:</strong>
                            {{ $producto->tipo_producto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Es Controlado:</strong>
                            {{ $producto->es_controlado ? 'Sí' : 'No' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Created At:</strong>
                            {{ $producto->created_at }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Updated At:</strong>
                            {{ $producto->updated_at }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection