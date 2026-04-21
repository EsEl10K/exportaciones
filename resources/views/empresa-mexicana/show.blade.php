@extends('layouts.app')

@section('template_title')
    {{ __('Show') . ' ' . __('Empresa Mexicana') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empresa Mexicana</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('empresa-mexicanas.index') }}">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>ID Empresa:</strong>
                            {{ $empresaMexicana->id_empresa_mex }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Empresa:</strong>
                            {{ $empresaMexicana->nombre_empresa }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>RFC:</strong>
                            {{ $empresaMexicana->rfc }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sector:</strong>
                            {{ $empresaMexicana->sector }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $empresaMexicana->direccion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $empresaMexicana->telefono }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection