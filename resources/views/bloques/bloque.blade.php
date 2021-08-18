@extends('adminlte::page')

@section('title', 'Configuracion Bloques')

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h4 class="card-title">Gestionar Bloques</h4>
      </div>
        <div class="card-body d-flex flex-column">
            <div class="row">

                <div class="form-group col-4">
                    <label>Nombre bloque</label>
                    <input type="text" class="form-control" id="direccion" placeholder="">
                </div>

                <div class="form-group col-4">
                    <label>Duracion</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Seleccionar</option>
                    </select>
                </div>
                <div class="form-group col-4 text-center mt-auto">
                    <button type="submit" class="btn btn-primary float-left">Agregar</button>
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
              <h3 class="card-title">Tabla de Bloques</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Bloques</th>
                  <th>Duracion</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr><tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                </tr><tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                </tr><tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                </tr><tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                </tr><tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                </tr>
                
                
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
@endsection