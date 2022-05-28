@extends('layouts.admin')
@section('css')

@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/admin/customers">Clientes</a></li>
            <li class="breadcrumb-item active">Editar Cliente</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h3 class="page-header font-weight-bold">Editar Cliente</h3>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">

            <!-- begin col-10 -->
            <div class="col-xl-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Cliente : </h4>
                    </div>
                    <!-- end panel-heading -->

                    <div class="panel-body">

                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-10 -->
        </div>
        <!-- end row -->
    </div>
@endsection

@section('js')

@endsection
