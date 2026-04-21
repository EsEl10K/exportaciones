@extends('layouts.app')

@section('template_title')
    Empresa Extranjera
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Empresa Extranjera') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('empresa-extranjeras.create') }}" class="btn btn-primary btn-sm float-right">
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
                                        <th>País</th>
                                        <th>Ciudad</th>
                                        <th>Contacto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresaExtranjeras as $empresaExtranjera)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $empresaExtranjera->id_empresa_ext }}</td>
                                            <td>{{ $empresaExtranjera->nombre_empresa }}</td>
                                            <td>{{ $empresaExtranjera->pais }}</td>
                                            <td>{{ $empresaExtranjera->ciudad }}</td>
                                            <td>{{ $empresaExtranjera->contacto }}</td>

                                            <td>
                                                <form action="{{ route('empresa-extranjeras.destroy', $empresaExtranjera->id_empresa_ext) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('empresa-extranjeras.show', $empresaExtranjera->id_empresa_ext) }}">
                                                        {{ __('Show') }}
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresa-extranjeras.edit', $empresaExtranjera->id_empresa_ext) }}">
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

                {!! $empresaExtranjeras->links() !!}
            </div>
        </div>
    </div>
@endsection