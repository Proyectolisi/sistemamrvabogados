
document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("form");

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:"es",

      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      }, 

      events:"http://127.0.0.1:8000/calendar/mostrar",

      dateClick: function(info) {
        
        formulario.reset();
        
        
        $("#evento").modal("show");

      },
      eventClick: function(info) {

          var calendarios =info.event;
          console.log(calendarios);
          
          axios.post("http://127.0.0.1:8000/calendar/editar/"+info.event.id).then(
            (respuesta) =>{ 
              formulario.id.value=respuesta.data.id;
              formulario.title.value=respuesta.data.title;
              formulario.start.value=respuesta.data.start;
              formulario.end.value=respuesta.data.end;
              formulario.description.value=respuesta.data.description;              
              formulario.user_id.value=respuesta.data.user_id; 
              $("#evento").modal("show");    
            } 
            ).catch(  
              error=>{
                if(error.response){
                  console.log(error.response.data);
                }
              }
            )}
    
    });
    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click",function(){
      
      enviarDatos("http://127.0.0.1:8000/calendar/agregar");

    });

    document.getElementById("btnEliminar").addEventListener("click",function(){
        
      enviarDatos("http://127.0.0.1:8000/calendar/borrar/"+formulario.id.value);

    });

    document.getElementById("btnModificar").addEventListener("click",function(){
        
      enviarDatos("http://127.0.0.1:8000/calendar/actualizar/"+formulario.id.value);

    });


    //Función para el envio de a información

    function enviarDatos(url){
      const datos = new FormData(formulario);
      console.log(datos);
      console.log(formulario.title.value);
      axios.post(url, datos).then(
        (respuesta) =>{
          $("#evento").modal("hide");
          calendar.refetchEvents();
        }
        ).catch(
          error=>{  if(error.response){console.log(error.response.data); }
          }
        )
    }
  });