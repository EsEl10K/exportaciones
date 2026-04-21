@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Detalle Pedido
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Detalle Pedido</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('detalle-pedidos.update', $detallePedido->id_detalle) }}" role="form" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            @include('detalle-pedido.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection