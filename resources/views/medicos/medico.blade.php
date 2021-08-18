@extends('adminlte::page')

@section('title', 'Configuracion Medicos')

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h4 class="card-title">Administradores Medicos</h4>
      </div>
        <div class="card-body d-flex flex-column">
            <div class="row">
                <div class="form-group col-4">
                    <label for="nombres">Nombres</label>
                    <input type="text" class="form-control" id="nombres" placeholder="Ingrese Nombres">
                </div>

                <div class="form-group col-4">
                    <label for="paterno">Ap. Paterno</label>
                    <input type="text" class="form-control" id="paterno" placeholder="Ingrese Ap. paterno">
                </div>

                <div class="form-group col-4">
                    <label for="materno">Ap. Materno</label>
                    <input type="text" class="form-control" id="materno" placeholder="Ingrese Ap. materno">
                </div>

                <div class="form-group col-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese Email">
                </div>

                <div class="form-group col-4">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono">
                </div>
                

                <div class="form-group col-4">
                    <label>Fecha de nacimiento</label>

                    <div class="input-group">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                  
                <div class="form-group col-4 mt-auto">
                  <label>Especialidad</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Seleccionar Especialidad</option>
                  </select>
                </div>

                <div class="col-sm-4 mt-auto">
                    <div class="form-group clearfix">
                        <h6><strong>Convenios: </strong></h6>
                        <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" >
                        <label for="checkboxPrimary1">FONASA
                        </label>
                        </div>
                        <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2" >
                        <label for="checkboxPrimary2">
                            Vida Tres
                        </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary3">
                            <label for="checkboxPrimary3">
                            Nueva Mas Vida
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group col-4 mt-auto">
                </div>

                <div class="form-group col-4 mt-auto">
                  <label>Sub-Especialidad 1</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Seleccionar Sub-Especialidad</option>
                  </select>
                </div>

                <div class="col-sm-4 mt-auto">
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                      <input type="checkbox" id="checkboxPrimary1" >
                      <label for="checkboxPrimary1">Banmedica
                      </label>
                      </div>
                      <div class="icheck-primary d-inline">
                      <input type="checkbox" id="checkboxPrimary2" >
                      <label for="checkboxPrimary2">
                          Consalud
                      </label>
                      </div>
                      <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary3">
                          <label for="checkboxPrimary3">
                          Colmena
                          </label>
                      </div>
                  </div>
                </div>

                <div class="form-group col-4 mt-auto">
                </div>

                <div class="form-group col-4 mt-auto">
                  <label>Sub-Especialidad 2</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Seleccionar Sub-Especialidad</option>
                  </select>
                </div>

                <div class="col-sm-4 mt-auto">
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                      <input type="checkbox" id="checkboxPrimary1" >
                      <label for="checkboxPrimary1">Cruz Blanca
                      </label>
                      </div>
                      
                  </div>
                </div>

                <div class="form-group col-4 mt-auto">
                </div>

                <div class="form-group col-4 mt-auto">
                  <label>Sub-Especialidad 3</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Seleccionar Sub-Especialidad</option>
                  </select>
                </div>

                <div class="form-group col-12 text-center mt-auto">
                  <button type="submit" class="btn btn-primary float-center">Agregar</button>
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
              <h3 class="card-title">Tabla de Medicos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Medico</th>
                  <th>Especialidad</th>
                  <th>Convenio</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                </tr>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
@endsection