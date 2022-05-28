@extends('layouts.admin')
@section('css')

@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
            <li class="breadcrumb-item active">Categorías</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h3 class="page-header font-weight-bold">Módulo de Categorías</h3>
        <!-- end page-header -->

        <div class="mb-3">
            <a href="#" class="btn btn-primary">Crear Nueva Categoría</a>
        </div>

        <!-- begin row -->
        <div class="row">

            Categories
        </div>
        <!-- end row -->
    </div>
@endsection

@section('js')

@endsection
