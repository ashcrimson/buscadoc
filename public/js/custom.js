document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'dayGrid', 'timeGrid', 'list', 'interaction','bootstrap' ],
        defaultDate:new Date(),
        themeSystem: 'bootstrap',
        header: {
        left: 'prev,next today  Miboton',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        customButtons:{
            Miboton:{
                text:"Agregar Evento",
                click:function(){
                    $('#evento').modal('toggle');
                }
            }
        },
        
        dateClick:function(info){
            limpiarFormulario();
            $('#txtFecha').val(info.dateStr);

            $("#btnAgregar").prop("disabled",false);
            $("#btnModificar").prop("disabled",true);
            $("#btnEliminar").prop("disabled",true);

            $('#evento').modal('toggle');
        },

        eventClick:function(info){

          $("#btnAgregar").prop("disabled",true);
          $("#btnModificar").prop("disabled",false);
          $("#btnEliminar").prop("disabled",false);

          console.log(info);
          console.log(info.event.title);
          console.log(info.event.start);
          console.log(info.event.end);
          console.log(info.event.textColor);
          console.log(info.event.backgroundColor);
          console.log(info.event.extendedProps.descripcion);
          $('#txtID').val(info.event.id);
          $('#txtTitulo').val(info.event.title);
          

          mes = (info.event.start.getMonth()+1);
          dia = (info.event.start.getDate());
          anio = (info.event.start.getFullYear());

          mes = (mes<10)?"0"+mes:mes;  
          dia = (dia<10)?"0"+dia:dia;

          hora=info.event.start.getHours();
          minutos=info.event.start.getMinutes()
          hora = (hora<10)?"0"+hora:hora;  
          minutos = (minutos<10)?"0"+minutos:minutos;
          horario= (hora+":"+minutos);
          
            
          $('#txtFecha').val(anio+"-"+mes+"-"+dia);
          $('#txtHora').val(horario);
          $('#txtColor').val(info.event.backgroundColor);
          $('#txtDescripcion').val(info.event.extendedProps.descripcion);
          $('#evento').modal('toggle');
        },
        
        events:"/secretaria/calendario/show"
        
    });

    calendar.render();

    $('#btnAgregar').click(function(){
        objEvento=recolectarDatos("POST");
        EnviarInfo('',objEvento);
    });
    $('#btnEliminar').click(function(){
        objEvento=recolectarDatos("DELETE");
        EnviarInfo('/'+$('#txtID').val(),objEvento);
    });
    $('#btnModificar').click(function(){
        objEvento=recolectarDatos("PATCH");
        EnviarInfo('/'+$('#txtID').val(),objEvento);
    });

    function recolectarDatos(method){
        nuevoEvento ={
            id:$("#txtID").val(),
            title:$("#txtTitulo").val(),
            descripcion:$("#txtDescripcion").val(),
            color:$("#txtColor").val(),
            textColor:'#FFFFFF',
            start:$("#txtFecha").val()+" "+$("#txtHora").val(),
            end:$("#txtFecha").val()+" "+$("#txtHora").val(),
            '_token':$("meta[name=csrf-token]").attr("content"),
            '_method':method

        }
        return (nuevoEvento);
    }
    function EnviarInfo(accion,objEvento){
        $.ajax({
            type:"POST",
            url:"/secretaria/calendario" + accion,
            data:objEvento,
            success:function(msg){
              console.log(msg);
              $('#evento').modal('toggle');
              calendar.refetchEvents();
            },
            error:function(){alert("Hay un error");}
        });
    }
    function limpiarFormulario(){
        $('#txtID').val("");
        $('#txtTitulo').val(""); 
        $('#txtFecha').val("");
        $('#txtHora').val("07:00");
        $('#txtColor').val("");
        $('#txtDescripcion').val("");
    }

    });