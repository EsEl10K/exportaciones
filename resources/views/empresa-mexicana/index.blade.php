@extends('layouts.app')

@section('template_title')
    Empresa Mexicana
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Empresa Mexicana') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('empresa-mexicanas.create') }}" class="btn btn-primary btn-sm float-right">
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
                                        <th>ID Empresa</th>
                                        <th>Nombre Empresa</th>
                                        <th>RFC</th>
                                        <th>Sector</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresaMexicanas as $empresaMexicana)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $empresaMexicana->id_empresa_mex }}</td>
                                            <td>{{ $empresaMexicana->nombre_empresa }}</td>
                                            <td>{{ $empresaMexicana->rfc }}</td>
                                            <td>{{ $empresaMexicana->sector }}</td>
                                            <td>{{ $empresaMexicana->direccion }}</td>
                                            <td>{{ $empresaMexicana->telefono }}</td>

                                            <td>
                                                <form action="{{ route('empresa-mexicanas.destroy', $empresaMexicana->id_empresa_mex) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('empresa-mexicanas.show', $empresaMexicana->id_empresa_mex) }}">
                                                        {{ __('Show') }}
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresa-mexicanas.edit', $empresaMexicana->id_empresa_mex) }}">
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

                {!! $empresaMexicanas->links() !!}
            </div>
        </div>
    </div>
@endsection