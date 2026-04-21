@extends('layouts.app')

@section('template_title')
    Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Pedido') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-sm float-right">
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
                                        <th>ID Pedido</th>
                                        <th>ID Empresa Extranjera</th>
                                        <th>Fecha Pedido</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $pedido->id_pedido }}</td>
                                            <td>{{ $pedido->id_empresa_ext }}</td>
                                            <td>{{ $pedido->fecha_pedido }}</td>

                                            <td>
                                                <form action="{{ route('pedidos.destroy', $pedido->id_pedido) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('pedidos.show', $pedido->id_pedido) }}">
                                                        {{ __('Show') }}
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedidos.edit', $pedido->id_pedido) }}">
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

                {!! $pedidos->links() !!}
            </div>
        </div>
    </div>
@endsection