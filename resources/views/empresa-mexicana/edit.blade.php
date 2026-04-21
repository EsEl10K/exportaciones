@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Empresa Mexicana
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Empresa Mexicana</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('empresa-mexicanas.update', $empresaMexicana->id_empresa_mex) }}" role="form" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            @include('empresa-mexicana.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection