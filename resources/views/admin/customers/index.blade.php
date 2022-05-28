@extends('layouts.admin')
@section('css')
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{ asset('plugins/admin/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/admin/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet">
    <!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
            <li class="breadcrumb-item active">Clientes</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h3 class="page-header font-weight-bold">Módulo de Clientes</h3>
        <!-- end page-header -->

        <div class="mb-3">
            <a href="{{ route('admin.customers.create') }}" class="btn btn-primary">Crear Nuevo Cliente</a>
        </div>

        <!-- begin row -->
        <div class="row">

            <!-- begin col-10 -->
            <div class="col-xl-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Lista de Clientes</h4>
                        <div class="panel-heading-btn">

                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                data-click="panel-reload"><i class="fa fa-redo"></i></a>

                        </div>
                    </div>
                    <!-- end panel-heading -->

                    <div class="panel-body">
                        <table id="data-table-responsive" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">Id</th>
                                    <th class="text-nowrap">Nombres</th>
                                    <th class="text-nowrap">Apellido Paterno</th>
                                    <th class="text-nowrap">Apellido Materno</th>
                                    <th class="text-nowrap">Email</th>
                                    <th class="text-nowrap">Teléfono</th>
                                    <th class="text-nowrap">Dirección</th>
                                    <th class="text-nowrap">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td width="1%" class="f-s-600 text-inverse">{{ $customer->Id_Cliente }}</td>
                                        <td>{{ $customer->Nombres }}</td>
                                        <td>{{ $customer->Apellidos_Paterno }}</td>
                                        <td>{{ $customer->Apellido_Materno }}</td>
                                        <td>{{ $customer->Correo_Electronico }}</td>
                                        <td>{{ $customer->Telefono }}</td>
                                        <td>{{ $customer->Direccion }}</td>
                                        <td width="9%">
                                            <a href="{{ route('admin.customers.edit', $customer->Id_Cliente) }}" class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                                <span>Editar</span>
                                            </a>
                                            <a href="" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                                <span>Eliminar</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    <script>
        $(document).ready(function() {
            $('#data-table-responsive').DataTable();
        });
    </script>
    <script src="{{ asset('plugins/admin/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/admin/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/admin/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/admin/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
@endsection
