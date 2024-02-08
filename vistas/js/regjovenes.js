/*=======SUBIENDO FOTO DEL JOVEN=======
======================================== */
$(".nuevafotoJoven").change(function(){
 // console.log("Nuevafoto");
  var img = this.files;

  var imagen = this.files[0];
  
  /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

      $(".nuevafotoJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen debe estar en formato JPG o PNG!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(imagen["size"] > 2000000){

      $(".nuevafotoJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen no debe pesar más de 2MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });
    }else{
      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(imagen);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;


        $(".previsualizar").attr("src", rutaImagen);
//       console.log(rutaImagen);

      })

    }
})

/*=============================================
ELIMINAR JOVEN
=============================================*/
$(".tablas").on("click", ".btnEliminarJoven", function(){

	var idJoven = $(this).attr("idJoven");
  var fotoJoven = $(this).attr("fotoJoven");
	var nombre = $(this).attr("nombre");
  var fotoAntes = $(this).attr("fotoAntes");
  var fotoDespues = $(this).attr("fotoDespues");
  var ArchivoJoven = $(this).attr("archJoven");

	swal({
        title: '¿Está seguro de borrar el joven?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar joven!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=regjovenes&idJoven="+idJoven+"&nombre="+nombre +"&fotoJoven="+fotoJoven+"&fotoAntes="+fotoAntes+"&fotoDespues="+fotoDespues+"&ArchivoJoven="+ArchivoJoven;      }


  })

})
/*=============================================
Mostrar Tabla
=============================================*/
function showTabla(){
  document.getElementById("Tabula").style = "display: ''";
  document.getElementById("Tarjeta").style = "display: none";
}


/*=============================================
Mostrar Tarjeta
=============================================*/
function showTarjeta(){
  document.getElementById("Tarjeta").style = "display: ''";
  document.getElementById("Tabula").style = "display: none";
}
/*=============================================
Ocultar Tarjeta
=============================================*/
function showTarjeta(){
  document.getElementById("Tarjeta").style = "display: ''";
  document.getElementById("Tabula").style = "display: none";
}
/*=============================================
Mostrar la opción de conyuge en la iglesia
=============================================*/
$("#EstCiv").change(function(){
  var metodo = $(this).val();
  //console.log("metodo", metodo);

  if(metodo == "Casado(a)"){
     document.getElementById("ConyugeIglesia").style = "display: ''";
  }if(metodo != "Casado(a)")
  {
    document.getElementById("ConyugeIglesia").style = "display: none";
  }
})
$("#sexoJoven").change(function(){
  var sexo = $(this).val();
  //console.log("sexo: ", sexo);

})
/*=============================================
Mostrar la opción de cantidad de hijos
=============================================*/

$("#hijosJoven").change(function(){
  var metodo = $(this).val();
  //console.log("metodo", metodo);

  if(metodo == "Si"){
     document.getElementById("cantHijos").style = "display: ''";
  }if(metodo == "No")
  {
    document.getElementById("cantHijos").style = "display: none";
  }
})

/*=============================================
Mostrar cual otra vivienda
=============================================*/

$("#tviviendaJoven").change(function(){
  var metodo = $(this).val();


  if(metodo == "Otra"){
     document.getElementById("cualOtraV").style = "display: ''";
  }if(metodo != "Otra")
  {
    document.getElementById("cualOtraV").style = "display: none";
  }
})

/*=============================================
Mostrar cual otra convivencia
=============================================*/

$("#tconvivenciaJoven").change(function(){
  var metodo = $(this).val();


  if(metodo == "Otro"){
     document.getElementById("cualOtraC").style = "display: ''";
  }if(metodo != "Otro")
  {
    document.getElementById("cualOtraC").style = "display: none";
  }
})

/*=============================================
Mostrar DateTimePicker
=============================================*/

$('#FecNacJoven').datetimepicker({
          format: 'DD/MM/YY'
             })


/*=============================================
Mostrar la opción de qué familiares estan en la iglesia
=============================================*/
$("#nuevoFamIglJoven").change(function(){
  var metodo = $(this).val();
  //console.log("metodo", metodo);

  if(metodo == "Si"){
     document.getElementById("nuevoQuienJov").style = "display: ''";
  }if(metodo == "No")
  {
    document.getElementById("nuevoQuienJov").style = "display: none";
  }
 })

$("#nuevaFecNac").change(function(){
  
  
  console.log("Hola");
 })

/*=============================================
Mostrar Contacto
=============================================*/
function MostrarContacto(){
  document.getElementById("Principal").style = "display: none ";
  document.getElementById("Contacto").style = "display: ";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Proyectos").style = "display: none";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Estudios").style = "display: none ";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Extras").style = "display: none";
  document.getElementById("Espiritual").style = "display: none";
}

/*=============================================
Mostrar PRINCIPAL
=============================================*/
function mostrarPrinciapl(){
  document.getElementById("Principal").style = "display: ";
  document.getElementById("Contacto").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Espiritual").style = "display: none";
  document.getElementById("Proyectos").style = "display: none";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Estudios").style = "display: none ";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Extras").style = "display: none";
  
}

/*=============================================
Mostrar DOMICILIO
=============================================*/
function MostrarDomicilio(){
  document.getElementById("Domicilio").style = "display: ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Espiritual").style = "display: none";
  document.getElementById("Proyectos").style = "display: none";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Estudios").style = "display: none ";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Extras").style = "display: none";


  
}
/*=============================================
Mostrar ESPIRITUAL
=============================================*/
function MostrarEspiritual(){
  document.getElementById("Espiritual").style = "display: ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Proyectos").style = "display: none";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Estudios").style = "display: none ";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Extras").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Archivos").style = "display: none";

}
$("#momBautJoven").change(function(){
  var metodo = $(this).val();
  if(metodo == "Otro"){
     document.getElementById("cualOtroB").style = "display: ''";
  }if(metodo != "Otro")
  {
    document.getElementById("cualOtroB").style = "display: none";
  }
})

$("#probActJoven").change(function(){
  var metodo = $(this).val();
  if(metodo == "Otros"){
     document.getElementById("cualesOtrosA").style = "display: ''";
  }if(metodo != "Otros")
  {
    document.getElementById("cualesOtrosA").style = "display: none";
  }
})

$("#probSupJoven").change(function(){
  var metodo = $(this).val();
  if(metodo == "Otros"){
     document.getElementById("cualesOtrosS").style = "display: ''";
  }if(metodo != "Otros")
  {
    document.getElementById("cualesOtrosS").style = "display: none";
  }
})

$("#apartJoven").change(function(){
  var metodo = $(this).val();
  if(metodo == "Sí"){
     document.getElementById("porqAJoven").style = "display: ''";
     document.getElementById("FecApJoven").style = "display: ''";

  }if(metodo == "No")
  {
    document.getElementById("porqAJoven").style = "display: none";
    document.getElementById("FecApJoven").style = "display: none";
  }
})


/*=============================================
Mostrar DateTimePicker Espiritual
=============================================*/

$('#fecIngJoven').datetimepicker({
          format: 'DD/MM/YY'
             })

$('#fecIngFjuJoven').datetimepicker({
          format: 'DD/MM/YY'
             })
$('#fecBautismoJoven').datetimepicker({
          format: 'DD/MM/YY'
             })

$('#FecBautismoEspirutoSanto').datetimepicker({
          format: 'DD/MM/YY'
             })
$('#FecApJoven').datetimepicker({
          format: 'DD/MM/YY'
             })

$("#pregbautAguas").change(function(){
  var metodo = $(this).val();
  if(metodo == "Sí"){
     document.getElementById("fecBautismoJoven").style = "display: ''";
     document.getElementById("momBautJoven").style = "display: ''";

  }if(metodo == "No")
  {
    document.getElementById("fecBautismoJoven").style = "display: none";
    document.getElementById("momBautJoven").style = "display: none";
  }
})
$("#pregbautEspirituSanto").change(function(){
  var metodo = $(this).val();
  if(metodo == "Sí"){
     document.getElementById("FecBautismoEspirutoSanto").style = "display: ''";
     document.getElementById("expBautismoEspSanto").style = "display: ''";

  }if(metodo == "No")
  {
    document.getElementById("FecBautismoEspirutoSanto").style = "display: none";
    document.getElementById("expBautismoEspSanto").style = "display: none";
  }
})

/*=============================================
Mostrar PROYECTOS
=============================================*/
function MostrarProyectos(){
  document.getElementById("Proyectos").style = "display: ";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Espiritual").style = "display: none ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Estudios").style = "display: none ";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Extras").style = "display: none";
}
$('#FecproyJoven').datetimepicker({
          format: 'DD/MM/YY'
             })
$("#proyectoJoven").change(function(){
  var metodo = $(this).val();
  //console.log($("#proyectoJoven").val());
    if (metodo == "Medios" || metodo == "Asistentes" ) {
     // console.log($("#proyectoJoven").val());
    $(".nivproyJoven option[value=País]").show();
  }else{
     $(".nivproyJoven option[value=País]").hide();
  }
})
$("#funcionproyJoven").change(function(){
  var metodo = $(this).val();
  if(metodo == "Coordinador" || metodo == "Asistente del proyecto"){
     document.getElementById("nivelproyJoven").style = "display: ''";

  }else
  {
    document.getElementById("nivelproyJoven").style = "display: none";

  }
  //console.log($("#proyectoJoven").val());
    if (metodo == "Coordinador" && ($("#proyectoJoven").val() == "Medios" || $("#proyectoJoven").val() == "Asistentes") ) {
     // console.log($("#proyectoJoven").val());
    $(".nivproyJoven option[value=País]").show();
  }else{
     $(".nivproyJoven option[value=País]").hide();
  }
})


function MostrarResponsabilidades(){
  document.getElementById("Responsabilidades").style = "display: ";
  document.getElementById("Proyectos").style = "display: none";
  document.getElementById("Espiritual").style = "display: none ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Estudios").style = "display: none ";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Extras").style = "display: none";
}

$('.btnclose').on('click', function(){
    $('#modalAgregarResp').modal('hide'); // hides modal with id viewUser 
});
var ResponsabilidadJoven = "";
$("#responsJoven").change(function(){
    ResponsabilidadJoven = $(this).val();
    var cord = $(this).val();
    //console.log(cord);
    if(ResponsabilidadJoven != "Ninguna"){
      document.getElementById("nivRespJoven").style = "display: ";
      document.getElementById("adesdeJoven").style = "display: ";
      document.getElementById("ahastaJoven").style = "display: ";
      
    }else{
      document.getElementById("nivRespJoven").style = "display: none";
      document.getElementById("adesdeJoven").style = "display: none";
      document.getElementById("ahastaJoven").style = "display: none";

    }
    if(cord == "Coordinador" || cord == "Esposa de Pastor" || cord == "Asistente"){
     

      $(".nivRespJoven option[value=País]").show();

    }else{
      $(".nivRespJoven option[value=País]").hide();
    }
    
  })
var NivelRespJoven = "";
$("#nivRespJoven").change(function(){
    NivelRespJoven = $(this).val();
  })


var contadorfilas = 0;
var listaResnpons = [];
$('.btnGuardarResp').on('click', function(){
contadorfilas = contadorfilas+1
var DesdeCuando =$("#adesdeJoven").val();

var hastacuando =$("#ahastaJoven").val();

    
    listaResnpons.push({ 
                //"#" : contadorfilas, 
                "Responsabilidad" : ResponsabilidadJoven,
                "Nivel" : NivelRespJoven,
                "Año desde" : DesdeCuando,
                "Año hasta" : hastacuando})
    $("#listaResjovenes").val(JSON.stringify(listaResnpons)); 
   // console.log(listaResnpons);
    $(".tablaRespons").append(

      '<tbody>'+ 
      '<tr class="Fila" id='+contadorfilas+'>'+ 
      '<td>'+ResponsabilidadJoven+'</td>'+
      '<td>'+NivelRespJoven+'</td>'+
      '<td>'+DesdeCuando+'</td>'+
      '<td>'+hastacuando+'</td>'+
      '<td>'+ 
        '<button class="btn btn-danger btnEliminarResJoven" onclick="deleteRow(this)"><i class="fa fa-times">'+ 
      '</td>'+
      '</tr>'+
      '</tbody>' 
  )
    $('#modalAgregarResp').modal('hide'); // hides modal with id viewUser 

    //console.log(listaResnpons.length);
});
//ELIMINAR FILAS DE LAS RESPONSABILIDADES
function deleteRow(btn) {
  var test = document.querySelectorAll('.Fila');

  var row = btn.parentNode.parentNode;
  if(test.length == 1)
  {
    //console.log(test[i].id);
    listaResnpons.splice(0,1);
  }else {
    //console.log("Es 1");
    for (var i=0; i<test.length;i++)
    {
      var idfila = test[i].id - '0'
      //console.log(idfila);
      if(idfila == (i+1))
      listaResnpons.splice(i+1,1);

    }
  }
  $("#listaResjovenes").val(JSON.stringify(listaResnpons))
  row.parentNode.removeChild(row);
  //console.log(listaResnpons);
  //console.log($("#listaResjovenes").val(), "Json");
}



/*=============================================
Mostrar DateTimePicker Editar Fecha Nac Joven
=============================================*/

// $('#adesdeJoven').datetimepicker({
//           format: 'DD/MM/YY'
//              })
// $('#ahastaJoven').datetimepicker({
//           format: 'DD/MM/YY'
//              })
$("#responsJoven").change(function(){
  var metodo = $(this).val();
  if(metodo != "Ninguna" && metodo != ""){
     document.getElementById("nivRespJoven").style = "display: ''";
     document.getElementById("adesdeJoven").style = "display: ''";

  }if(metodo == "Ninguna")
  {
    document.getElementById("nivRespJoven").style = "display: none";
    document.getElementById("adesdeJoven").style = "display: none";
  }
})

/*=============================================
Mostrar ESTUDIOS
=============================================*/
function MostrarEstudios(){
  document.getElementById("Estudios").style = "display: ";
  document.getElementById("Proyectos").style = "display: none ";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Espiritual").style = "display: none ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Extras").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
}


$("#nivelestJoven").change(function(){
  var metodo = $(this).val();
  var estadoEstudio = $("#estEstudioJoven").val();
  if(metodo == "Licenciatura" || metodo == "Postgrado" || metodo == "Curso Técnico" || metodo == "Otros"){
     document.getElementById("areaEstJoven").style = "display: ''";
     

  }else
  {
    document.getElementById("areaEstJoven").style = "display: none";
    document.getElementById("tituloEstJoven").style = "display: none";
  }
  if(metodo != "Analfabeto"){
     document.getElementById("estEstudioJoven").style = "display: ''";

  }else
  {
    document.getElementById("estEstudioJoven").style = "display: none";

  }
  //mostrar titulo si está finalizado
  if (estadoEstudio == "Finalizado" && (metodo == "Licenciatura" || metodo == "Postgrado" || metodo == "Curso Técnico" || metodo == "Otros"))
   {
    document.getElementById("tituloEstJoven").style = "display:";
   }

})
  //mostrar titulo si está finalizado
$("#estEstudioJoven").change(function(){
  var metodo = $(this).val();
  var niveldeEstudio = $("#nivelestJoven").val();
  if(metodo == "Finalizado" && (niveldeEstudio == "Licenciatura" || niveldeEstudio == "Postgrado" || niveldeEstudio == "Curso Técnico" || niveldeEstudio == "Otros") ){
     document.getElementById("tituloEstJoven").style = "display: ''";

  }else
  {
    document.getElementById("tituloEstJoven").style = "display: none";

  }

})



/*=============================================
Mostrar Laboral
=============================================*/
function MostrarLaboral(){
  document.getElementById("Laboral").style = "display: ";
  document.getElementById("Estudios").style = "display: none";
  document.getElementById("Proyectos").style = "display: none ";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Espiritual").style = "display: none ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Extras").style = "display: none";
  
}
/*=============================================
Mostrar Idiomas
=============================================*/
function MostrarIdiomas(){
  document.getElementById("Idiomas").style = "display: ";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Estudios").style = "display: none";
  document.getElementById("Proyectos").style = "display: none ";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Espiritual").style = "display: none ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Extras").style = "display: none";
  
}
/*=============================================
Mostrar Talentos
=============================================*/
function MostrarTalentos(){
  document.getElementById("Talentos").style = "display: ";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Estudios").style = "display: none";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Proyectos").style = "display: none ";
  document.getElementById("Espiritual").style = "display: none ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Extras").style = "display: none";

}

  //mostrar otro talento
$("#talento1Joven").change(function(){
  var metodo = $(this).val();
  //var niveldeEstudio = $("#nivelestJoven").val();
  if(metodo == "Otros"){
     document.getElementById("otroTalento1").style = "display: ''";

  }else
  {
    document.getElementById("otroTalento1").style = "display: none";

  }

})
//mostrar otro talento
$("#talento2Joven").change(function(){
  var metodo = $(this).val();
  //var niveldeEstudio = $("#nivelestJoven").val();
  if(metodo == "Otros"){
     document.getElementById("otroTalento2").style = "display: ''";

  }else
  {
    document.getElementById("otroTalento2").style = "display: none";

  }

})
//mostrar otro talento
$("#talento3Joven").change(function(){
  var metodo = $(this).val();
  //var niveldeEstudio = $("#nivelestJoven").val();
  if(metodo == "Otros"){
     document.getElementById("otroTalento3").style = "display: ''";

  }else
  {
    document.getElementById("otroTalento3").style = "display: none";

  }

})

/*=============================================
Mostrar Archivos
=============================================*/
function MostrarArchivos(){
  document.getElementById("Archivos").style = "display: ";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Estudios").style = "display: none";
  document.getElementById("Proyectos").style = "display: none ";
  document.getElementById("Espiritual").style = "display: none ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
  document.getElementById("Extras").style = "display: none";
}

/*=======SUBIENDO FOTO DEL ANTES DEL JOVEN=======
======================================== */
$(".nuevafotoAntesJoven").change(function(){

  var img = this.files;

  var imagen = this.files[0];
  
  /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

      $(".nuevafotoAntesJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen debe estar en formato JPG o PNG!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(imagen["size"] > 2000000){

      $(".nuevafotoAntesJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen no debe pesar más de 2MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });
    }else{
      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(imagen);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;


        $(".fotoantes").attr("src", rutaImagen);
        //console.log(rutaImagen);

      })

    }
})
/*=======SUBIENDO FOTO DEL DESPUÉS DEL JOVEN=======
======================================== */
$(".nuevafotoDespuesJoven").change(function(){

  var img = this.files;

  var imagen = this.files[0];
  
  /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

      $(".nuevafotoDespuesJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen debe estar en formato JPG o PNG!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(imagen["size"] > 2000000){

      $(".nuevafotoDespuesJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen no debe pesar más de 2MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });
    }else{
      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(imagen);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;


        $(".fotoDesps").attr("src", rutaImagen);
        //console.log(rutaImagen);

      })

    }
})

/*=======SUBIENDO ARCHIVO DEL JOVEN=======
======================================== */
$(".nuevoArchivoJoven").change(function(){

  var file = this.files;

  var archivo = this.files[0];
  
  /*=============================================
    VALIDAMOS EL FORMATO DEL ARCHIVO SEA PDF O DOC
    =============================================*/

    if(archivo["type"] != "application/msword" && archivo["type"] != "application/pdf"){

      $(".nuevoArchivoJoven").val("");

       swal({
          title: "Error al subir el archivo",
          text: "¡El archivo debe estar en formato .doc o .PDF",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(archivo["size"] > 5000000){

      $(".nuevoArchivoJoven").val("");

       swal({
          title: "Error al subir el archivo",
          text: "¡La imagen no debe pesar más de 10MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });
    }else{
      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(archivo);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;
        //console.log();

      })

    }
})

/*=============================================
Mostrar EXTRAS
=============================================*/
function MostrarExtras(){
  document.getElementById("Extras").style = "display: ";
  document.getElementById("Archivos").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("Responsabilidades").style = "display: none";
  document.getElementById("Idiomas").style = "display: none";
  document.getElementById("Laboral").style = "display: none";
  document.getElementById("Estudios").style = "display: none";
  document.getElementById("Proyectos").style = "display: none ";
  document.getElementById("Espiritual").style = "display: none ";
  document.getElementById("Contacto").style = "display: none ";
  document.getElementById("Principal").style = "display: none";
  document.getElementById("Domicilio").style = "display: none";
}



var editarlistaResnpons = [];

/*======================================
=            Editar Joven            =
======================================*/
$(".tablas").on("click", ".btnEditarJoven", function(){
  //console.log(editarlistaResnpons.length);
  
  //console.log("Hola");
  var idJoven = $(this).attr("idJoven");

  var datos = new FormData();
    datos.append("idJoven", idJoven);

    $.ajax({

      url:"ajax/regjovenes.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

        $("#edIdJoven").val(respuesta["id"]);
         $("#editarNombre").val(respuesta["nombre"]);
         $("#editarsexoJoven").html(respuesta["sexo"]);
         $("#editarsexoJoven").val(respuesta["sexo"]);
         $("#editarFecNac").val(respuesta["fechanac"]);
         $("#editarEdad").val(respuesta["edad"]);
         $("#editarIglesiaJoven").html(respuesta["iglesia"]);
         $("#editarIglesiaJoven").val(respuesta["iglesia"]);
         $("#editarTribuJoven").html(respuesta["tribu"]);
         $("#editarTribuJoven").val(respuesta["tribu"]);
         $("#editarConocerIglesiaJoven").html(respuesta["cconocioiglesia"]);
         $("#editarConocerIglesiaJoven").val(respuesta["cconocioiglesia"]);
         $("#editarEstCiv").html(respuesta["ecivil"]);
         $("#editarEstCiv").val(respuesta["ecivil"]);
         $("#editarFamIglJoven").html(respuesta["familiaiglesia"]);
         $("#editarFamIglJoven").val(respuesta["familiaiglesia"]);
         $("#editarhijosJoven").html(respuesta["preguntahijos"]);
         $("#editarnuevoQuienJov").val(respuesta["quienfamilia"]);
         $("#editarcantHijos").val(respuesta["canthijos"]);
         $("#editarnuevoQuienJov").val(respuesta["quienfamilia"]);
         $("#editarConyugeIglesia").html(respuesta["conyuge"]);
         $("#editarConyugeIglesia").val(respuesta["conyuge"]);
         $("#editarcondJoven").html(respuesta["condjoven"]);
         $("#editarcondJoven").val(respuesta["condjoven"]);
         $("#editarTestimonio").val(respuesta["testimonio"]);  

         $("#editaremailJoven").val(respuesta["email"]);  
         $("#editartelefJoven").val(respuesta["telfijo"]);  
         $("#editarcelJoven").val(respuesta["telcelular"]);  
         $("#editarwppJoven").val(respuesta["whatsapp"]);  
         $("#editarwppJoven").val(respuesta["whatsapp"]);  
         $("#editartelegramJoven").val(respuesta["telegram"]);  
         $("#editarinstagramJoven").val(respuesta["instagram"]); 
         $("#editarfbJoven").val(respuesta["facebook"]); 
         $("#editarlinkedinJoven").val(respuesta["linkedin"]); 
         $("#editaryoutubeJoven").val(respuesta["youtube"]); 
         $("#editartiktokJoven").val(respuesta["tiktok"]); 

         $("#editardirJoven").val(respuesta["direccion"]);  
         $("#editarnumCasa").val(respuesta["nrocasa"]);  
         $("#editarbarrioJoven").val(respuesta["barrio"]);  
         $("#editarciudadJoven").val(respuesta["ciudad"]);  
         $("#editardeptoJoven").val(respuesta["depto"]);  
         $("#editartviviendaJoven").html(respuesta["tvivienda"]);
         $("#editartviviendaJoven").val(respuesta["tvivienda"]); 
         $("#editarcualOtraV").val(respuesta["tvotra"]); 
         $("#editardeptoJoven").val(respuesta["depto"]);  
         $("#editartconvivenciaJoven").html(respuesta["tconvivencia"]);
         $("#editartconvivenciaJoven").val(respuesta["tconvivencia"]); 
         $("#editarcualOtraC").val(respuesta["tcotra"]); 

         $("#editarfecIngJoven").val(respuesta["fechaingiglesia"]);  
         $("#editarfecIngFjuJoven").val(respuesta["fechaingfju"]); 
         $("#edpregbautAguas").val(respuesta["pregbautaguas"]);  
         $("#edpregbautAguas").html(respuesta["pregbautaguas"]);
         $("#editarfecBautismoJoven").val(respuesta["fecbautaguas"]);  
         $("#editarmomBautJoven").html(respuesta["mombautaguas"]);
         $("#editarmomBautJoven").val(respuesta["mombautaguas"]);  
         $("#editarcualOtroB").val(respuesta["obautaguas"]);  
         $("#edpregbautEspirituSanto").val(respuesta["pregbautEspirituSanto"]);  
         $("#edpregbautEspirituSanto").html(respuesta["pregbautEspirituSanto"]);
         $("#editarFecBautismoEspirutoSanto").val(respuesta["fecbautEspSanto"]);
         $("#editarexpBautismoEspSanto").val(respuesta["expbautEspSanto"]); 
         $("#editarEstAct").html(respuesta["actobra"]);
         $("#editarEstAct").val(respuesta["actobra"]); 
         $("#editartiempoObraJoven").val(respuesta["tiempoobra"]);  
         $("#editarservirAltarJoven").html(respuesta["servAltar"]);
         $("#editarservirAltarJoven").val(respuesta["servAltar"]); 
         $("#editarintellimenJoven").html(respuesta["compintellimen"]);
         $("#editarintellimenJoven").val(respuesta["compintellimen"]); 
         $("#editartiempointelliJoven").val(respuesta["tiempointelli"]); 
         $("#editarprobActJoven").val(respuesta["probactual"]); 
         $("#editarprobActJoven").html(respuesta["probactual"]);
         $("#editarprobSupJoven").val(respuesta["probsup"]); 
         $("#editarprobSupJoven").html(respuesta["probsup"]);
         $("#editarcualesOtrosA").val(respuesta["probactualotro"]); 
         $("#editarcualesOtrosS").val(respuesta["psupotro"]); 
         $("#editarapartJoven").html(respuesta["eapartado"]); 
         $("#editarapartJoven").val(respuesta["eapartado"]); 
         $("#editarporqAJoven").val(respuesta["porqueapart"]); 
         $("#editarFecApJoven").val(respuesta["fecapart"]); 
         $("#editarencuentroconDiosJoven").val(respuesta["encconDios"]); 
         $("#editarobsJoven").val(respuesta["obspastor"]); 

         $("#editarproyectoJoven").html(respuesta["proyjoven"]); 
         $("#editarproyectoJoven").val(respuesta["proyjoven"]); 
         $("#editarfuncionproyJoven").html(respuesta["funproyjoven"]); 
         $("#editarfuncionproyJoven").val(respuesta["funproyjoven"]); 
         $("#editarnivelproyJoven").html(respuesta["nivproyjoven"]); 
         $("#editarnivelproyJoven").val(respuesta["nivproyjoven"]); 
         $("#editarFecproyJoven").val(respuesta["fecingproyjoven"]); 
         
       //  console.log(respuesta["respjoven"],"Responsabilidad");
      
          if(respuesta["respjoven"]!=""|| respuesta["respjoven"]!=null){
                try{
                  editarlistaResnpons =  JSON.parse(respuesta["respjoven"]);
                   $("#editlistaResjovenes").val(JSON.stringify(editarlistaResnpons));
                }catch{
                  console.log('error');
                }
                  //console.log(editarlistaResnpons);
               var filas ="" ; var Responsabilidades = "" ; var Nivel = "" ; var edañodesde =""; var edañohasta = "";

               $(".tablaeditarRespons").append(
                  '<tbody id="'+'bodyLista">'+
                  '</tbody>'
             )
               let listarapida=[];
               if(listarapida.length>0){
                listarapida.splice(0, listarapida.length());
               }
               for(var i=0; i<editarlistaResnpons.length; i++)
               {
                var obj = editarlistaResnpons[i];
                  var valor ; 
                 var contadorfe=0;
                 $(".tablaeditarRespons").append(
                  
              
                  )
                  for (var k in obj) {
                    var valor = obj[k];
                    listarapida.push(
                      valor
                    );
                    
                  }
                  //console.log(listarapida);

               }
              var c=-1; var cbtnel=7;
               for(var i=0; i<listarapida.length; i++)
               {
                   
                  if(i%4 == 0)
                  {
                    c = c+1;
                    //console.log(c);
                    $("#bodyLista").append(
                    '<tr class="editFila" id="'+i+'" >'
                   )
                  }else if((i%4 == 0) && (i>0)){
                    $(".editFila").append(
                    '<td>'+
                      '<button class="btn btn-danger btnEliminarEditJoven" onclick="EditdeleteRow(this)"><i class="fa fa-times">'+ 
                    '</td>'
                    )
                    //Si está en la primera fila, entonces agrega los datos en la primera fila
                  }if(c==0){
                    $("#"+0).append(
                    '<td>'+listarapida[i] +
                    '</td>' 
                   );if(i==3)
                    {
                      $("#"+0).append(
                    '<td>'+
                      '<button type="button" class="btn btn-danger btnEliminarEditJoven" onclick="EditdeleteRow(this)"><i class="fa fa-times">'+ 
                    '</td>'
                   )
                    }
                  }
                  //Sino, va agregando en las siguientes filas
                  else{
                   // console.log((c*4)-1);
                  $("#"+c*4).append(
                    '<td>'+listarapida[i] +
                    '</td>'
                   );if(i==cbtnel)
                    {
                      cbtnel = cbtnel+4;
                      $("#"+c*4).append(
                    '<td>'+
                      '<button type="button"  class="btn btn-danger btnEliminarEditJoven" onclick="EditdeleteRow(this)"><i class="fa fa-times">'+ 
                    '</td>'
                   )
                    }
                  }
               }
                }
         
         


         

         $("#editarnivelestJoven").val(respuesta["nivestudiojoven"]); 
         $("#editarnivelestJoven").html(respuesta["nivestudiojoven"]); 
         $("#editarestEstudioJoven").val(respuesta["estestudiojoven"]); 
         $("#editarestEstudioJoven").html(respuesta["estestudiojoven"]); 
         $("#editarareaEstJoven").val(respuesta["areaestjoven"]);
         $("#editartituloEstJoven").val(respuesta["tituloestjoven"]);

         $("#editartrabactualJoven").val(respuesta["trabactualjoven"]); 
         $("#editarlugartrabaJoven").val(respuesta["lugartrabjoven"]); 
         $("#editartipoInstJoven").val(respuesta["tipoinsttrabjoven"]); 
         $("#editartipoInstJoven").html(respuesta["tipoinsttrabjoven"]); 
         $("#editarareaLabJoven").val(respuesta["alabtrabjoven"]); 
         $("#editarttrabaJoven").val(respuesta["tipotrabjoven"]); 
         $("#editarttrabaJoven").html(respuesta["tipotrabjoven"]); 

         $("#editaridioma1Joven").val(respuesta["idiomauno"]); 
         $("#editaridioma1Joven").html(respuesta["idiomauno"]); 
         $("#editarnividioma1Joven").val(respuesta["niveliduno"]); 
         $("#editarnividioma1Joven").html(respuesta["niveliduno"]); 
         $("#editaridioma2Joven").val(respuesta["idiomados"]); 
         $("#editaridioma2Joven").html(respuesta["idiomados"]); 
         $("#editarnividioma2Joven").val(respuesta["niveliddos"]); 
         $("#editarnividioma2Joven").html(respuesta["niveliddos"]); 
         $("#editaridioma3Joven").val(respuesta["idiomatres"]); 
         $("#editaridioma3Joven").html(respuesta["idiomatres"]);
         $("#editarnividioma3Joven").val(respuesta["nivelidtres"]); 
         $("#editarnividioma3Joven").html(respuesta["nivelidtres"]); 

         $("#editartalento1Joven").val(respuesta["talentouno"]); 
         $("#editartalento1Joven").html(respuesta["talentouno"]); 
         $("#editarnivital1Joven").val(respuesta["niveltaluno"]); 
         $("#editarnivital1Joven").html(respuesta["niveltaluno"]);
         if(respuesta["otrotalentouno"]!="")
         {
          $("#editarotroTalento1").val(respuesta["otrotalentouno"]);
         } 
         $("#editartalento2Joven").html(respuesta["talentodos"]);  
         $("#editartalento2Joven").val(respuesta["talentodos"]); 
         $("#editarnivital2Joven").val(respuesta["niveltaldos"]); 
         $("#editarnivital2Joven").html(respuesta["niveltaldos"]);
        if(respuesta["otrotalentodos"]!="")
         {
          $("#editarotroTalento2").val(respuesta["otrotalentodos"]);
         } 
         $("#editartalento3Joven").val(respuesta["talentotres"]); 
         $("#editartalento3Joven").html(respuesta["talentotres"]);
         $("#editarnivital3Joven").val(respuesta["niveltaltres"]); 
         $("#editarnivital3Joven").html(respuesta["niveltaltres"]);
         if(respuesta["otrotalentotres"]!="")
         {
          $("#editarotroTalento3").val(respuesta["otrotalentotres"]);
         } 

         $("#fotoActualJoven").val(respuesta["fotojoven"]);
         $("#edfotoActualAntesJoven").val(respuesta["imagenantes"]);
         $("#edfotoActualDspsJoven").val(respuesta["imagendespues"]);
         $("#edarchivoActualJoven").val(respuesta["archivojoven"]);

         $("#ednacionalidadJoven").val(respuesta["nacionalidadjoven"]); 
         $("#ednacionalidadJoven").html(respuesta["nacionalidadjoven"]); 
         $("#edascendenciaJoven").val(respuesta["ascendenciajoven"]); 
         $("#edascendenciaJoven").html(respuesta["ascendenciajoven"]);
         $("#editarlenguamadreJoven").val(respuesta["idiomamadre"]); 
         $("#editarlenguamadreJoven").html(respuesta["idiomamadre"]);
         $("#editarlenguaoriginaria").val(respuesta["idiomaoriginario"]); 
         $("#editarlenguaoriginaria").html(respuesta["idiomaoriginario"]);
          $("#actUser").val(respuesta["usuarioqueregistro"]); 
          $("#fechadeRegistro").val(respuesta["fecharegistro"]); 
          //console.log(respuesta["usuarioqueregistro"]);
        // $("#verarchivoActualJoven").val(respuesta["archivojoven"]);
         //console.log($("#fotoActualJoven").val());
         //Se muestra la previsualización de la foto ya subida del joven
         if(respuesta["fotojoven"]!="")
        {
          //console.log("FotoJoven");
          $(".prevEdjoven").attr("src", respuesta["fotojoven"]);
        }else{
          $(".prevEdjoven").attr("src", "vistas/img/usuarios/default/anonymous.png");
        }if(respuesta["imagenantes"]!="")
        {
          //Se muestra la previsualización de la foto del antes del joven
          $(".edfotoantes").attr("src", respuesta["imagenantes"]);
        }else{
          $(".edfotoantes").attr("src", "vistas/img/usuarios/default/anonymous.png");
        }if(respuesta["imagendespues"]!="")
        {
          //Se muestra la previsualización de la foto del antes del joven
          $(".edfotodsps").attr("src", respuesta["imagendespues"]);
        }else{
          $(".edfotodsps").attr("src", "vistas/img/usuarios/default/anonymous.png");
        }
        


      } 

      
      



    })
   
    //console.log();
    


})
function Verarchivo(){
  if($("#edarchivoActualJoven").val()!="")
        {
          var rutaarchivo = $("#edarchivoActualJoven").val();
          //window.location = "index.php?ruta=regjovenes="+rutaarchivo;
          window.open(rutaarchivo, "_blank");
        }
}

/*=======RESUBIENDO FOTO DEL JOVEN=======
======================================== */
$(".ednuevafotoJoven").change(function(){

  var img = this.files;

  var imagen = this.files[0];
  
  /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

      $(".nuevafotoJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen debe estar en formato JPG o PNG!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(imagen["size"] > 2000000){

      $(".nuevafotoJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen no debe pesar más de 2MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });
    }else{
      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(imagen);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;


        $(".prevEdjoven").attr("src", rutaImagen);
        //console.log(rutaImagen);

      })

    }
})


/*=======RESUBIENDO FOTO DEL ANTES DEL JOVEN=======
======================================== */
$(".ednuevafotoAntesJoven").change(function(){

  var img = this.files;

  var imagen = this.files[0];
  
  /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

      $(".ednuevafotoAntesJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen debe estar en formato JPG o PNG!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(imagen["size"] > 2000000){

      $(".ednuevafotoAntesJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen no debe pesar más de 2MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });
    }else{
      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(imagen);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;


        $(".edfotoantes").attr("src", rutaImagen);
       // console.log(rutaImagen);

      })

    }
})


/*=======RESUBIENDO FOTO DEL DESPUES DEL JOVEN=======
======================================== */
$(".ednuevafotoDespuesJoven").change(function(){

  var img = this.files;

  var imagen = this.files[0];
  
  /*=============================================
    VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
    =============================================*/

    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

      $(".ednuevafotoDespuesJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen debe estar en formato JPG o PNG!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(imagen["size"] > 2000000){

      $(".ednuevafotoDespuesJoven").val("");

       swal({
          title: "Error al subir la imagen",
          text: "¡La imagen no debe pesar más de 2MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });
    }else{
      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(imagen);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;


        $(".edfotodsps").attr("src", rutaImagen);
       // console.log(rutaImagen);

      })

    }
})

//ELIMINAR FILAS DE LAS RESPONSABILIDADES
function EditdeleteRow(btn) {
  var test = document.querySelectorAll('.editFila');
  //console.log(test.length);
  var row = btn.parentNode.parentNode;
  if(test.length == 1)
  {
    //console.log(test[i].id);
    editarlistaResnpons.splice(0,1);
  }else {
    //console.log("Es 1");
    for (var i=0; i<test.length;i++)
    {
      var idfila = test[i].id - '0'
      console.log(idfila);
      if(idfila == (i))
      editarlistaResnpons.splice(i+1,1);

    }
  }
  $("#editlistaResjovenes").val(JSON.stringify(editarlistaResnpons))
  row.parentNode.removeChild(row);
  //console.log(editarlistaResnpons);
  //console.log($("#editlistaResjovenes").val(), "Json");
}

var edResponsabilidadJoven = "";
$("#edresponsJoven").change(function(){
    edResponsabilidadJoven = $(this).val();
    var cord = $(this).val();
    //console.log(cord);
    if(edResponsabilidadJoven != "Ninguna"){
      document.getElementById("ednivRespJoven").style = "display: ";
      document.getElementById("edadesdeJoven").style = "display: ";
      document.getElementById("edahastaJoven").style = "display: ";
      
    }else{
      document.getElementById("ednivRespJoven").style = "display: none";
      document.getElementById("edadesdeJoven").style = "display: none";
      document.getElementById("edahastaJoven").style = "display: none";

    }
    if(cord == "Coordinador" || cord == "Esposa de Pastor" || cord == "Asistente"){
     

      $(".ednivRespJoven option[value=País]").show();

    }else{
      $(".ednivRespJoven option[value=País]").hide();
    }
  })
var edNivelRespJoven = "";
$("#ednivRespJoven").change(function(){
    edNivelRespJoven = $(this).val();
  })


var contadoredfilas
$('.btnGuardaredResp').on('click', function(){
  var test = document.querySelectorAll('.editFila');

contadoredfilas = test.length;
//console.log(contadoredfilas);
contadoredfilas = contadoredfilas+1
var DesdeCuando =$("#edadesdeJoven").val();

var hastacuando =$("#edahastaJoven").val();

    
    editarlistaResnpons.push({ 
                //"#" : contadorfilas, 
                "Responsabilidad" : edResponsabilidadJoven,
                "Nivel" : edNivelRespJoven,
                "Año desde" : DesdeCuando,
                "Año hasta" : hastacuando})
    $("#editlistaResjovenes").val(JSON.stringify(editarlistaResnpons)); 
   // console.log(listaResnpons);
   if(test.length!=0){
    $("#bodyLista").append(

      
      '<tr class="editFila" id='+contadoredfilas+'>'+ 
      '<td>'+edResponsabilidadJoven+'</td>'+
      '<td>'+edNivelRespJoven+'</td>'+
      '<td>'+DesdeCuando+'</td>'+
      '<td>'+hastacuando+'</td>'+
      '<td>'+ 
        '<button class="btn btn-danger btnEliminarEditJoven" onclick="EditdeleteRow(this)"><i class="fa fa-times">'+ 
      '</td>'+
      '</tr>'
      )
   }else{
    $(".tablaeditarRespons").append(

      '<tbody id="bodyLista">'+ 
      '<tr class="editFila" id='+contadoredfilas+'>'+ 
      '<td>'+edResponsabilidadJoven+'</td>'+
      '<td>'+edNivelRespJoven+'</td>'+
      '<td>'+DesdeCuando+'</td>'+
      '<td>'+hastacuando+'</td>'+
      '<td>'+ 
        '<button class="btn btn-danger btnEliminarEditJoven" onclick="EditdeleteRow(this)"><i class="fa fa-times">'+ 
      '</td>'+
      '</tr>'
      )
   }

    
    $('#modalEditAgregarResp').modal('hide'); // hides modal with id viewUser 

    //console.log(editarlistaResnpons);
    //document.getElementById("bodyLista").remove();
});
function BorrarTablas(){
  document.getElementById("bodyLista").remove();
}




/*=============================================
Mostrar EDITAR Contacto
=============================================*/
function MostrarEditarContacto(){
  document.getElementById("editarPrincipal").style = "display: none ";
  document.getElementById("editarContacto").style = "display: ";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none ";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarTalentos").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
  document.getElementById("editarEspiritual").style = "display: none";
}



/*=============================================
Mostrar PRINCIPAL
=============================================*/
function mostrarEditarPrinciapl(){
  document.getElementById("editarPrincipal").style = "display: ";
  document.getElementById("editarContacto").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarEspiritual").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none ";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarTalentos").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
}

/*=============================================
Mostrar DateTimePicker Editar Fecha Nac Joven
=============================================*/

$('#editarFecNacJoven').datetimepicker({
          format: 'DD/MM/YY'
             })
/*=============================================
Mostrar DOMICILIO
=============================================*/
function MostrarEditarDomicilio(){
  document.getElementById("editarDomicilio").style = "display: ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarEspiritual").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none ";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarTalentos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
  
}
/*=============================================
Mostrar ESPIRITUAL
=============================================*/
function MostrarEditarEspiritual(){
  document.getElementById("editarEspiritual").style = "display: ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none ";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
  document.getElementById("editarTalentos").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
}


/*=============================================
Mostrar DateTimePicker Espiritual
=============================================*/

$('#editarfecIngJoven').datetimepicker({
          format: 'DD/MM/YY'
             })

$('#editarfecIngFjuJoven').datetimepicker({
          format: 'DD/MM/YY'
             })
$('#editarfecBautismoJoven').datetimepicker({
          format: 'DD/MM/YY'
             })

$('#editarFecBautismoEspirutoSanto').datetimepicker({
          format: 'DD/MM/YY'
             })
$('#editarFecApJoven').datetimepicker({
          format: 'DD/MM/YY'
             })



/*=============================================
Mostrar PROYECTOS
=============================================*/
function MostrarEditarProyectos(){
  document.getElementById("editarProyectos").style = "display: ";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarEspiritual").style = "display: none ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none ";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("Talentos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
}
$('#editarFecproyJoven').datetimepicker({
          format: 'DD/MM/YY'
             })
$("#edproyectoJoven").change(function(){
  var metodo = $(this).val();
  
  //console.log($("#proyectoJoven").val());
    if ((metodo == "Medios" || metodo == "Asistentes") && $("#edfuncionproyJoven").val() == "Coordinador") {
     // console.log($("#proyectoJoven").val());
    $(".ednivelproyJoven option[value=País]").show();
  }else{
     $(".ednivelproyJoven option[value=País]").hide();
  }
})
$("#edfuncionproyJoven").change(function(){
  var metodo = $(this).val();
  
  //console.log($("#proyectoJoven").val());
    if (metodo == "Coordinador" && ($("#edproyectoJoven").val() == "Medios"  || $("#edproyectoJoven").val() == "Asistentes") ) {
     // console.log($("#proyectoJoven").val());
    $(".ednivelproyJoven option[value=País]").show();
  }else{
     $(".ednivelproyJoven option[value=País]").hide();
  }
})

function MostrarEditarResponsabilidades(){
  document.getElementById("editarResponsabilidades").style = "display: ";
  document.getElementById("editarProyectos").style = "display: none";
  document.getElementById("editarEspiritual").style = "display: none ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none ";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarTalentos").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";

}

$("#responsJoven").change(function(){
  var metodo = $(this).val();
  if(metodo != "Ninguna" && metodo != ""){
     document.getElementById("nivRespJoven").style = "display: ''";
     document.getElementById("adesdeJoven").style = "display: ''";

  }if(metodo == "Ninguna")
  {
    document.getElementById("nivRespJoven").style = "display: none";
    document.getElementById("adesdeJoven").style = "display: none";
  }
})


$('.tablaVentas').DataTable( {
    "ajax": "ajax/datatable-ventas.ajax.php",
    "deferRender": true,
    "retrieve": true,
    "processing": true,
     "language": {

      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
      "sFirst":    "Primero",
      "sLast":     "Último",
      "sNext":     "Siguiente",
      "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }

  }
  } );

/*=============================================
Mostrar ESTUDIOS
=============================================*/
function MostrarEditarEstudios(){
  document.getElementById("editarEstudios").style = "display: ";
  document.getElementById("editarProyectos").style = "display: none ";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarEspiritual").style = "display: none ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("editarTalentos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
}


$("#nivelestJoven").change(function(){
  var metodo = $(this).val();
  var estadoEstudio = $("#estEstudioJoven").val();
  if(metodo == "Licenciatura" || metodo == "Postgrado" || metodo == "Curso Técnico" || metodo == "Otros"){
     document.getElementById("areaEstJoven").style = "display: ''";
     

  }else
  {
    document.getElementById("areaEstJoven").style = "display: none";
    document.getElementById("tituloEstJoven").style = "display: none";
  }
  if(metodo != "Analfabeto"){
     document.getElementById("estEstudioJoven").style = "display: ''";

  }else
  {
    document.getElementById("estEstudioJoven").style = "display: none";

  }
  //mostrar titulo si está finalizado
  if (estadoEstudio == "Finalizado" && (metodo == "Licenciatura" || metodo == "Postgrado" || metodo == "Curso Técnico" || metodo == "Otros"))
   {
    document.getElementById("tituloEstJoven").style = "display:";
   }

})
  //mostrar titulo si está finalizado
$("#estEstudioJoven").change(function(){
  var metodo = $(this).val();
  var niveldeEstudio = $("#nivelestJoven").val();
  if(metodo == "Finalizado" && (niveldeEstudio == "Licenciatura" || niveldeEstudio == "Postgrado" || niveldeEstudio == "Curso Técnico" || niveldeEstudio == "Otros") ){
     document.getElementById("tituloEstJoven").style = "display: ''";

  }else
  {
    document.getElementById("tituloEstJoven").style = "display: none";

  }

})



/*=============================================
Mostrar Laboral
=============================================*/
function MostrarEditarLaboral(){
  document.getElementById("editarLaboral").style = "display: ";
  document.getElementById("editarEstudios").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none ";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarEspiritual").style = "display: none ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarTalentos").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
}
/*=============================================
Mostrar Idiomas
=============================================*/
function MostrarEditarIdiomas(){
  document.getElementById("editarIdiomas").style = "display: ";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none ";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarEspiritual").style = "display: none ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarTalentos").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
  document.getElementById("editarExtras").style = "display: none";
}
/*=============================================
Mostrar Talentos
=============================================*/
function MostrarEditarTalentos(){
  document.getElementById("editarTalentos").style = "display: ";
  document.getElementById("editarExtras").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none ";
  document.getElementById("editarEspiritual").style = "display: none ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";

}
/*=============================================
Mostrar EDITAR ARCHIVOS
=============================================*/
function MostrarEditarArchivos(){
  document.getElementById("editarTalentos").style = "display: none ";
  document.getElementById("editarExtras").style = "display: none";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none ";
  document.getElementById("editarEspiritual").style = "display: none ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarArchivos").style = "display: ";
}
$(".ednuevoArchivoJoven").change(function(){

  var file = this.files;

  var archivo = this.files[0];
  
  /*=============================================
    VALIDAMOS EL FORMATO DEL ARCHIVO SEA PDF O DOC
    =============================================*/

    if(archivo["type"] != "application/msword" && archivo["type"] != "application/pdf"){

      $(".ednuevoArchivoJoven").val("");

       swal({
          title: "Error al subir el archivo",
          text: "¡El archivo debe estar en formato .doc o .PDF",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });

    }else if(archivo["size"] > 5000000){

      $(".ednuevoArchivoJoven").val("");

       swal({
          title: "Error al subir el archivo",
          text: "¡La imagen no debe pesar más de 10MB!",
          type: "error",
          confirmButtonText: "¡Cerrar!"
        });
    }else{
      var datosImagen = new FileReader;
      datosImagen.readAsDataURL(archivo);

      $(datosImagen).on("load", function(event){

        var rutaImagen = event.target.result;
        //console.log();

      })

    }
})
$('.btnedclose').on('click', function(){
    $('#modalEditAgregarResp').modal('hide'); // hides modal with id viewUser 
});
/*=============================================
Mostrar EDITAR EXTRAS
=============================================*/
function MostrarEditarExtras(){
  document.getElementById("editarExtras").style = "display: ";
  document.getElementById("editarTalentos").style = "display: none ";
  document.getElementById("editarIdiomas").style = "display: none";
  document.getElementById("editarLaboral").style = "display: none";
  document.getElementById("editarEstudios").style = "display: none";
  document.getElementById("editarResponsabilidades").style = "display: none";
  document.getElementById("editarProyectos").style = "display: none ";
  document.getElementById("editarEspiritual").style = "display: none ";
  document.getElementById("editarContacto").style = "display: none ";
  document.getElementById("editarPrincipal").style = "display: none";
  document.getElementById("editarDomicilio").style = "display: none";
  document.getElementById("editarArchivos").style = "display: none";
}
/*=============================================
IMPRIMIR FICHA
=============================================*/

$(".tablas").on("click", ".btnImprimirJoven", function(){

  console.log("Imrpimir");
  var idJoven = $(this).attr("idJoven");
  var usuario = $(this).attr("userActual");
  window.open("extensiones/tcpdf/pdf/fichajoven.php?idJoven="+idJoven +"&usuario="+usuario, "_blank");

})

/*=============================================
IMPRIMIR FICHA VACIA
=============================================*/

$(".btnImprimirFicha").on("click", function(){

  window.open("extensiones/tcpdf/pdf/fichavacia.php", "_blank");

})