@extends('layouts.app')

@section('template_title')
    {{ __('Show') . ' ' . __('Detalle Pedido') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('detalle-pedidos.index') }}">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Id Detalle:</strong>
                            {{ $detallePedido->id_detalle }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Pedido:</strong>
                            {{ $detallePedido->id_pedido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Empresa Mex:</strong>
                            {{ $detallePedido->id_empresa_mex }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Producto:</strong>
                            {{ $detallePedido->id_producto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad:</strong>
                            {{ $detallePedido->cantidad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio Unitario:</strong>
                            {{ $detallePedido->precio_unitario }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Subtotal:</strong>
                            {{ $detallePedido->subtotal }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection