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
            <li class="breadcrumb-item active">Usuarios</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h3 class="page-header font-weight-bold">Módulo de Usuarios</h3>
        <!-- end page-header -->

        <div class="mb-3">
            <a href="#" class="btn btn-primary">Crear Nuevo Usuario</a>
        </div>

        <!-- begin row -->
        <div class="row">

            <!-- begin col-10 -->
            <div class="col-xl-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Lista de Usuarios</h4>
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
                                    <th class="text-nowrap">Apellidos</th>
                                    <th class="text-nowrap">Cargo</th>
                                    <th class="text-nowrap">Teléfono</th>
                                    <th class="text-nowrap">Dirección</th>
                                    <th class="text-nowrap">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td width="1%" class="f-s-600 text-inverse">1</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->lastname }}</td>
                                        <td>Win 95+</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>X</td>
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
