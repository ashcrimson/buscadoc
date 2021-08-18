@extends('adminlte::page')

@section('title', 'Configuracion Especialidades')

@section('js')
  <script src="/js/especialidades/custom.js"></script>  
@endsection



@section('content')
<div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h4 class="card-title">Gestionar Especialidad</h4>
      </div>
        <div class="card-body d-flex flex-column">
            <div class="row">

                <div class="form-group col-4">
                    <label>Especialidad</label>
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
              <h3 class="card-title">Tabla de Especialidades cliente {{ $user->getUserClientData[0]->id }}</h3>
            </div>
            
            
            {{$clienteEspecialidad}}
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Especialidades</th>
                  <th>Seleccione</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach ($especialidades as $especialidad)
                    <tr>
                    <td>{{$especialidad->nombre}}</td>
                    <td>
                      <input type="checkbox" />
                    </td>
                    </tr>
                  @endforeach
                </tr>
                #aqui irian las especialidades del cliente
                <tr>
                  <td></td>
                  <td>
                    <input type="checkbox" />
                  </td>
                </tr>
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
@endsection