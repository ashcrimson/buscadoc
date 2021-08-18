@extends('adminlte::page')

@section('title', 'Configuracion Bloqueos')

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h4 class="card-title">Bloqueo por Medico</h4>
      </div>
        <div class="card-body d-flex flex-column">
            <div class="row">

                <div class="form-group col-4">
                    <label>Medico</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Seleccionar</option>
                    </select>
                </div>

                <div class="form-group col-4">
                    <label>Fecha y Hora</label>

                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservationtime">
                    </div>
                </div>
                

                <div class="form-group col-4">
                    <label>Motivo</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Seleccionar</option>
                    </select>
                </div>
                
                <div class="form-group col-12 text-center mt-auto">
                    <button type="submit" class="btn btn-primary float-center">Guardar</button>
                </div>
            </div>
            
        </div>
      
    </div>
    <div class="card card-primary">
        <div class="card-header">
          <h4 class="card-title">Bloqueo por Recurso Fisico</h4>
        </div>
          <div class="card-body d-flex flex-column">
                <div class="row">
  
                  <div class="form-group col-4">
                      <label>Medico</label>
                      <select class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">Seleccionar</option>
                      </select>
                  </div>
  
                    <div class="form-group col-4">
                      <label>Fecha y Hora</label>
  
                      <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime1">
                      </div>
                    </div>
  
                  <div class="form-group col-4">
                      <label>Motivo</label>
                      <select class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">Seleccionar</option>
                      </select>
                  </div>
                  
                  <div class="form-group col-12 text-center mt-auto">
                      <button type="submit" class="btn btn-primary float-center">Guardar</button>
                  </div>
            </div>
              
        </div>
        
    </div>
    <div class="card card-primary">
        <div class="card-header">
          <h4 class="card-title">Bloqueo por Patron</h4>
        </div>
          <div class="card-body d-flex flex-column">
              <div class="row">
  
                  <div class="form-group col-4">
                      <label>Patron</label>
                      <select class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">Seleccionar</option>
                      </select>
                  </div>
  
                    <div class="form-group col-4">
                      <label>Fecha y Hora</label>
  
                      <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservationtime2">
                      </div>
                    </div>
  
                  <div class="form-group col-4">
                      <label>Motivo</label>
                      <select class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">Seleccionar</option>
                      </select>
                  </div>
                  
                  <div class="form-group col-12 text-center mt-auto">
                      <button type="submit" class="btn btn-primary float-center">Guardar</button>
                  </div>
            </div>
              
        </div>
        
    </div>
  
</div>

@endsection