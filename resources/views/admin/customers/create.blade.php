@extends('layouts.admin')
@section('css')
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/admin/customers">Clientes</a></li>
            <li class="breadcrumb-item active">Crear Cliente</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h3 class="page-header font-weight-bold">Crear Nuevo Cliente</h3>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">

            <!-- begin col-10 -->
            <div class="col-xl-7">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Nuevo Cliente</h4>
                    </div>
                    <!-- end panel-heading -->

                    <div class="panel-body">

                        <div class="col-xl-12">
                            {!! Form::open(['route' => 'admin.customers.store']) !!}

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombres:') !!}
                                        {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese los nombres del cliente', 'autocomplete' => 'off']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('ap_pat', 'Apellido Paterno:') !!}
                                        {!! Form::text('ap_pat', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el apellido paterno del cliente', 'autocomplete' => 'off']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('ap_pat', 'Apellido materno:') !!}
                                        {!! Form::text('ap_pat', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el apellido paterno del cliente', 'autocomplete' => 'off']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('email', 'Email:') !!}
                                        {!! Form::text('email', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el email del cliente', 'autocomplete' => 'off']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('phone', 'Telefono:') !!}
                                        {!! Form::text('phone', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el teléfono del cliente', 'autocomplete' => 'off']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::label('address', 'Dirección:') !!}
                                        {!! Form::text('address', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la dirección del cliente', 'autocomplete' => 'off']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    {!! Form::submit('Crear', ['class'=> 'btn btn-md btn-primary mt-3']) !!}
                                    {!! Form::submit('Limpiar', ['class'=> 'btn btn-md btn-info mt-3']) !!}
                                </div>

                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>
            <div class="col-xl-5">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Búsqueda por API SUNAT</h4>
                    </div>
                    <!-- end panel-heading -->

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::open(['route' => 'admin.customers.store']) !!}
                                        {!! Form::label('api_dni', 'Ingrese su DNI') !!}
                                        {!! Form::text('api_dni', null, ['class' => 'form-control']) !!}
                                        {!! Form::submit('Buscar', ['class'=> 'btn btn-md btn-primary mt-3']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
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
