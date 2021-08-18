@extends('adminlte::page')

@section('title', 'Configuracion Recursos')

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h4 class="card-title">Gestionar Recursos</h4>
      </div>
        <div class="card-body d-flex flex-column">
            <div class="row">

                <div class="form-group col-6">
                    <label>Seleccione Centro</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Seleccionar</option>
                    </select>
                </div>

                <div class="form-group col-6">
                </div>

                <div class="form-group col-6">
                    <label>Tipo</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Seleccionar</option>
                    </select>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <h6><strong>Días de Atención</strong></h6>
                        <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" >
                        <label for="checkboxPrimary1">Lunes
                        </label>
                        </div>
                        <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2">
                        <label for="checkboxPrimary2">
                            Martes
                        </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary3">
                            <label for="checkboxPrimary3">
                            Miercoles
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary4">
                            <label for="checkboxPrimary4">
                                Jueves
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary5">
                            <label for="checkboxPrimary5">
                                Viernes
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary6">
                            <label for="checkboxPrimary6">
                                Sabado
                            </label>
                        </div>
                        <div class="icheck-primary">
                            <input type="checkbox" id="checkboxPrimary7">
                            <label for="checkboxPrimary7">
                                Domingo
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label>Horario disponible</label>

                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                </div>

                <div class="form-group col-1 mt-auto">
                    <button type="submit" class="btn btn-primary">Bloque</button>
                </div>
                    
                <div class="form-group col-1 mt-auto">
                    <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Seleccionar</option>
                    </select>
                </div>

                <div class="form-group col-1 mt-auto">
                  <input type="text" class="form-control" id="direccion" placeholder="Min">
                </div>

                <div class="form-group col-3 mt-auto">
                  <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Intervalo entre atenciones</option>
                  </select>
                </div>

                <div class="form-group col-4">
                  <label>Especialidad</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Seleccionar</option>
                  </select>
                </div>

                
                <div class="form-horizontal form-group row col-4 mt-auto">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Equipamiento Especial</label>
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>
                        <label for="radioPrimary1">
                            Si
                        </label>
                    </div>
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">
                            No
                        </label>
                    </div>
                </div>

                <div class="form-group col-4 mt-auto">
                  <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Seleccionar</option>
                  </select>
                </div>

              <div class="form-group col-6">
                <label>Medico</label>
                <select class="form-control select2bs4" style="width: 100%;">
                <option selected="selected">Seleccionar</option>
                </select>
              </div>

              <div class="form-group col-6">
              </div>
              
              <div class="form-group col-6">
                  <button type="submit" class="btn btn-primary float-right">Guardar</button>
              </div>
              <div class="form-group col-6">
                <button type="submit" class="btn btn-primary float-right">Generar patron</button>
              </div>

            </div>
        </div>
      
    </div>
  
</div>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabla de Recursos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Especialidad</th>
                  <th>Medico</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Bloque</th>
                  <th>Equipamiento</th>
                  <th>Dias</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                  <td>X</td>
                </tr>
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
@endsection