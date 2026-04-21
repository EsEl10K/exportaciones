@extends('layouts.app')

@section('template_title')
    Detalle Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Detalle Pedido') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('detalle-pedidos.create') }}" class="btn btn-primary btn-sm float-right">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Id Detalle</th>
                                        <th>Id Pedido</th>
                                        <th>Id Empresa Mex</th>
                                        <th>Id Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Subtotal</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallePedidos as $detallePedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $detallePedido->id_detalle }}</td>
                                            <td>{{ $detallePedido->id_pedido }}</td>
                                            <td>{{ $detallePedido->id_empresa_mex }}</td>
                                            <td>{{ $detallePedido->id_producto }}</td>
                                            <td>{{ $detallePedido->cantidad }}</td>
                                            <td>{{ $detallePedido->precio_unitario }}</td>
                                            <td>{{ $detallePedido->subtotal }}</td>

                                            <td>
                                                <form action="{{ route('detalle-pedidos.destroy', $detallePedido->id_detalle) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('detalle-pedidos.show', $detallePedido->id_detalle) }}">
                                                        {{ __('Show') }}
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-pedidos.edit', $detallePedido->id_detalle) }}">
                                                        {{ __('Edit') }}
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {!! $detallePedidos->links() !!}
            </div>
        </div>
    </div>
@endsection