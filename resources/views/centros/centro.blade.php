@extends('adminlte::page')

@section('title', 'Configuracion Centro')

@section('content')
    <div class="container-fluid">
        <form class="" method="POST" action="">
            {!! csrf_field() !!}
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Gestionar Centro</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group clearfix">
                                <h6><strong>Días de Atención</strong></h6>

                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="dias_atencion[]" id="lunes">
                                    <label for="lunes">Lunes</label>
                                </div>

                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="dias_atencion[]" id="martes">
                                    <label for="martes">Martes</label>
                                </div>

                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="dias_atencion[]" id="miercoles">
                                    <label for="miercoles">Miercoles</label>
                                </div>

                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="dias_atencion[]" id="jueves">
                                    <label for="jueves">Jueves</label>
                                </div>

                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="dias_atencion[]" id="viernes">
                                    <label for="viernes">Viernes</label>
                                </div>

                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="dias_atencion[]" id="sabado">
                                    <label for="sabado">Sabado</label>
                                </div>

                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" name="dias_atencion[]" id="domingo">
                                    <label for="domingo">Domingo</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <div class="form-group">
                                <label>Horario de Apertura: </label>

                                <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#timepicker">
                                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <div class="form-group">
                                <label>Horario de Cierre: </label>

                                <div class="input-group date" id="timepicker2" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#timepicker2">
                                    <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                        </div>

                        <div class="form-group col-4">
                            <label for="cantbox">Cantidad de Boxes</label>
                            <input type="text" class="form-control" id="cantbox" placeholder="">
                        </div>

                        <div class="form-group col-4">
                            <label>Region</label>
                            <select class="form-control select2bs4" style="width: 100%;">
                                <option disabled selected="selected">Seleccionar</option>
                                @foreach ($regiones as $region)
                                    <option value="{{ $region['region_id'] }}">{{ $region['nombre'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label>Comuna</label>
                            <select class="form-control select2bs4" style="width: 100%;">
                                <option disabled selected="selected">Seleccionar</option>
                                @foreach ($comunas as $comuna)
                                    <option value="{{ $comuna['comuna_id'] }}">{{ $comuna['nombre'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" placeholder="">
                        </div>

                        <div class="form-group col-4">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" placeholder="">
                        </div>

                        <div class="form-group col-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                        </div>

                        <div class="form-group col-4">
                            <label for="cantidad_recurso_fisico">Cantidad de recurso fisico</label>
                            <input type="number" class="form-control" id="cantidad_recurso_fisico" placeholder="">
                        </div>

                        <div class="form-group col-11">
                            <button type="submit" class="btn btn-primary float-right">Agregar Centro</button>
                        </div>

                    </div>
                </div>

            </div>
        </form>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabla de Centros</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apertura</th>
                                        <th>Cierre</th>
                                        <th>Boxes</th>
                                        <th>Ubicacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($centros as $centro)

                                        <tr>
                                            <td>{{ $centro->nombre }}</td>
                                            <td>{{ $centro->hora_apertura }}</td>
                                            <td>{{ $centro->hota_cierre }}</td>
                                            <td>{{ $centro->cantidad_recursos_fisicos }}</td>
                                            <td>{{ $centro->direccion }}</td>

                                        </tr>

                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                @endsection
