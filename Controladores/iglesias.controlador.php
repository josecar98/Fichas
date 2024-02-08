<?php 
class ControladorIglesias
{
/*=============================================
	=            MOSTRAR IGLESIAS          =
	=============================================*/
	
	static public function ctrMostrarIglesias($item, $valor){
		$tabla = "iglesias";
		$respuesta = ModeloIglesias::mdlMostrarIglesias($tabla, $item, $valor);
		return $respuesta;
	}
/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function ctrCrearIglesia(){

		if(isset($_POST["nuevaIglesia"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaIglesia"]) ){

			   	

				$tabla = "iglesias";

			

				$datos = array("nombre" => $_POST["nuevaIglesia"],
					           "direccion" => $_POST["nuevaDireccion"],
					           "telefono" => $_POST["nuevoTelefono"],
					          );

				$respuesta = ModeloIglesias::mdlIngresarIglesia($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡La ilgesia ha sido guardada correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "iglesias";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El nombre de la iglesia no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "iglesia";

						}

					});
				

				</script>';

			}


		}


	}
	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function ctrEditarIglesia(){

		if(isset($_POST["editarNombre"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])){

				$tabla = "iglesias";

				$datos = array("nombre" => $_POST["editarNombre"],
							   "direccion" => $_POST["editarDireccion"],
							    "telefono" => $_POST["editarTelIglesia"],
							    "id" => $_POST["idIglesia"]
							   );

				$respuesta = ModeloIglesias::mdlEditarIglesia($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La iglesia ha sido editada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
									if (result.value) {

									window.location = "iglesias";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result) {
							if (result.value) {

							window.location = "iglesias";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR IGLESIA
	=============================================*/

	static public function ctrBorrarIglesia(){

		if(isset($_GET["idIglesia"])){

			$tabla ="iglesias";
			$datos = $_GET["idIglesia"];


			$respuesta = ModeloIglesias::mdlBorrarIglesia($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La iglesia ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result) {
								if (result.value) {

								window.location = "iglesias";

								}
							})

				</script>';

			}		

		}

	}

}



 ?>