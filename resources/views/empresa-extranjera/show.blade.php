@extends('layouts.app')

@section('template_title')
    {{ __('Show') . ' ' . __('Empresa Extranjera') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empresa Extranjera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('empresa-extranjeras.index') }}">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>ID Empresa:</strong>
                            {{ $empresaExtranjera->id_empresa_ext }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Empresa:</strong>
                            {{ $empresaExtranjera->nombre_empresa }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>País:</strong>
                            {{ $empresaExtranjera->pais }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ciudad:</strong>
                            {{ $empresaExtranjera->ciudad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Contacto:</strong>
                            {{ $empresaExtranjera->contacto }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection