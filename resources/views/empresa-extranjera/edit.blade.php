@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Empresa Extranjera
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Empresa Extranjera</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('empresa-extranjeras.update', $empresaExtranjera->id_empresa_ext) }}" role="form" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            @include('empresa-extranjera.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection