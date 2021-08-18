@extends('adminlte::page')

@section('title', 'Calendario Secretaria')

@section('css')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/vendor/fullcalendar/main.css">
    <link rel="stylesheet" href="/vendor/fullcalendar-plugins/daygrid/main.min.css">
    <link rel="stylesheet" href="/vendor/fullcalendar-plugins/timegrid/main.min.css">
    <link rel="stylesheet" href="/vendor/fullcalendar-plugins/list/main.min.css">
    <link rel="stylesheet" href="/vendor/fullcalendar-plugins/bootstrap/main.min.css">
    <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
@stop

@section('js')
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>   
  <script src="/vendor/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <script src="/vendor/fullcalendar/main.js"></script>
  <script src="/vendor/fullcalendar-plugins/interaction/main.min.js"></script>

  <script src="/vendor/fullcalendar-plugins/daygrid/main.min.js"></script>
  <script src="/vendor/fullcalendar-plugins/timegrid/main.min.js"></script>
  <script src="/vendor/fullcalendar-plugins/bootstrap/main.min.js"></script>
  <script src="/vendor/fullcalendar-plugins/list/main.min.js"></script>

  <script src="/vendor/select2/js/select2.full.min.js"></script>
  <script src="/vendor/moment/moment.min.js"></script>
  <script src="/vendor/inputmask/jquery.inputmask.min.js"></script>
  <script src="/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="/vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  
  <script src="/js/custom.js"></script>
  <script src="/js/datecustom.js"></script>
@endsection

@section('content')

  <div class="container">
    
      <div class="card card-primary">
        <div class="card-header">
          <h4 class="card-title">Buscador de Agenda</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="form-group col-4">
              <label>Centro</label>
              <select class="form-control select2bs4" style="width: 100%;">
                <option selected="selected">Seleccionar</option>
              </select>
            </div>
            
            <div class="form-group col-4">
              <label>Especialidad</label>
              <select class="form-control select2bs4" style="width: 100%;">
                <option selected="selected">Seleccionar</option>
              </select>
            </div>

            <div class="form-group col-4">
              <label>Fecha:</label>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                  </span>
                </div>
                <input type="text" class="form-control float-right" id="reservation">
              </div>
            </div>

            <div class="form-group col-4">
              <label>Médico</label>
              <select class="form-control select2bs4" style="width: 100%;">
                <option selected="selected">Seleccionar</option>
              </select>
            </div>

            <div class="form-group col-4">
              <label for="rutpaciente">Rut Paciente</label>
              <input type="text" class="form-control" id="rutpaciente" placeholder="Ingrese rut">
            </div>

            <div class="form-group col-4">
              <label for="nombrepaciente">Nombre Paciente</label>
              <input type="text" class="form-control" id="nombrepaciente" placeholder="Ingrese nombre">
            </div>

            <div class="form-group col-4">
              <button type="submit" class="btn btn-primary">Atencion oportuna por especialidad</button>
            </div>

            <div class="form-group col-4">
              <button type="submit" class="btn btn-primary">Atencion oportuna por medico</button>
            </div>

            <div class="form-group col-4">
              <button type="submit" class="btn btn-primary">Aplicar filtros y buscar</button>
            </div>
            <div id="calendar"></div>
          </div>
          
        </div>
        
      </div>
    
  </div>
  


  <div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title" id="exampleModalLabel"">Datos del Evento</h3>
              </div>
              <form role="form">
                <div class="box-body">
                  <div class="d-none">
                    <label>ID</label>
                    <input type="text" name="txtID" id="txtID" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" name="txtFecha" id="txtFecha" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" name="txtTitulo" id="txtTitulo" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Hora</label>
                    <input type="time" step="600" name="txtHora" id="txtHora" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="txtDescripcion" id="txtDescripcion" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Color</label>
                    <input type="color" name="txtColor" id="txtColor" class="form-control" >
                  </div>
                </div>
            </div>
          
          
          <div class="modal-footer">

              <button id="btnAgregar" class="btn btn-success">Agregar</button>
              <button id="btnModificar" class="btn btn-warning">Modificar</button>
              <button id="btnEliminar" class="btn btn-danger">Eliminar</button>
              <button id="btnCancelar" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
@endsection