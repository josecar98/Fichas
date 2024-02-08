<?php 

/**
 * 
 */
class ControladorJovenes
{
	
	static public function ctrCrearJoven(){


		if(isset($_POST["nuevoJoven"]) && isset($_POST["sexoJoven"]) && isset($_POST["nuevaFecNac"]) &&
			isset($_POST["nuevaIglesiaJoven"]) && isset($_POST["nuevaTribuJoven"]) && isset($_POST["nuevaConocerIglesiaJoven"]) &&
			isset($_POST["EstCiv"]) && isset($_POST["nuevoFamIglJoven"]) && isset($_POST["hijosJoven"]) &&
			isset($_POST["Testimonio"]) && isset($_POST["emailJoven"]) && isset($_POST["celJoven"]) &&
			isset($_POST["wppJoven"]) && isset($_POST["fbJoven"]) && isset($_POST["tiktokJoven"]) &&
			isset($_POST["dirJoven"]) && isset($_POST["numCasa"]) && isset($_POST["barrioJoven"]) &&
			isset($_POST["ciudadJoven"]) && isset($_POST["deptoJoven"]) && isset($_POST["tviviendaJoven"]) &&
			isset($_POST["tconvivenciaJoven"]) && isset($_POST["nuevaFecIngJoven"]) && isset($_POST["nuevaFecIngFJUJoven"]) &&
			isset($_POST["pregbautAguas"]) && isset($_POST["pregbautEspirituSanto"]) && isset($_POST["EstAct"]) &&
			isset($_POST["servirAltarJoven"]) && isset($_POST["probActJoven"])&&
			isset($_POST["probSupJoven"]) && isset($_POST["apartJoven"]) 
			){
			
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoJoven"])){

			   	/*=============================================
				VALIDAR IMAGEN
				=============================================*/

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
					try {
						$directoriogeneral = "vistas/img/jovenes/".$_POST["nuevoJoven"] ;
						mkdir($directoriogeneral, 0755);
					} catch (\Throwable $th) {
						//throw $th;
					}
				
				$ruta = "";
				var_dump(isset($_FILES["nuevafotoJoven"]["tmp_name"]));

				if(isset($_FILES["nuevafotoJoven"]["tmp_name"]) && $_FILES["nuevafotoJoven"]["tmp_name"] !=""){
					//Imagen por defecto
					var_dump($_FILES["nuevafotoJoven"]["tmp_name"]);
					
							list($ancho, $alto) = getimagesize($_FILES["nuevafotoJoven"]["tmp_name"]);

							$nuevoAncho = 500;
							$nuevoAlto = 500;

							
							/*=============================================
							DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
							=============================================*/

							if($_FILES["nuevafotoJoven"]["type"] == "image/jpeg"){

								// =============================================
								// GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								// =============================================

								$aleatorio = mt_rand(100,999);

								$ruta = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/".$aleatorio.".jpg";

								$origen = imagecreatefromjpeg($_FILES["nuevafotoJoven"]["tmp_name"]);						

								$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

								imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

								imagejpeg($destino, $ruta);

							}

							if($_FILES["nuevafotoJoven"]["type"] == "image/png"){

								/*=============================================
								GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								=============================================*/

								$aleatorio = mt_rand(100,999);

								$ruta = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/".$aleatorio.".png";

								$origen = imagecreatefrompng($_FILES["nuevafotoJoven"]["tmp_name"]);						

								$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

								imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

								imagepng($destino, $ruta);

						}
					
					}else {

						$fotodefault = "vistas/dist/img/anonymous.png";
						list($ancho, $alto) = getimagesize($fotodefault);

						$nuevoAncho = 500;
						$nuevoAlto = 500;

					
								/*=============================================
								GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								=============================================*/

								$aleatorio = mt_rand(100,999);

								$ruta = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/".$aleatorio.".png";

								$origen = imagecreatefrompng($fotodefault);						

								$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

								imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

								imagepng($destino, $ruta);

						

					} 

				/*=============================================
				VALIDAR IMAGEN ANTES
				=============================================*/

				$rutaAntes = "";
				/*=============================================
				CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL JOVEN
				=============================================*/

				$directorioantes = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/antes";
				mkdir($directorioantes, 0755);

				var_dump(isset($_FILES["nuevafotoAntesJovenC"]["tmp_name"]));

				if(isset($_FILES["nuevafotoAntesJovenC"]["tmp_name"])){
					//Imagen por defecto
					var_dump($_FILES["nuevafotoAntesJovenC"]["tmp_name"]);
					 
					 	if($_FILES["nuevafotoAntesJovenC"]["tmp_name"] != "")
					 	{ 
							list($ancho, $alto) = getimagesize($_FILES["nuevafotoAntesJovenC"]["tmp_name"]);

							$nuevoAncho = 500;
							$nuevoAlto = 500;

							/*=============================================
							DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
							=============================================*/

							if($_FILES["nuevafotoAntesJovenC"]["type"] == "image/jpeg"){

								// =============================================
								// GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								// =============================================

								$aleatorioantes = mt_rand(100,999);

								$rutaAntes = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/antes/".$aleatorioantes.".jpg";

								$origenantes = imagecreatefromjpeg($_FILES["nuevafotoAntesJovenC"]["tmp_name"]);						

								$destinoantes = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

								imagecopyresized($destinoantes, $origenantes, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

								imagejpeg($destinoantes, $rutaAntes);

							}

							if($_FILES["nuevafotoAntesJovenC"]["type"] == "image/png"){

								/*=============================================
								GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								=============================================*/

								$aleatorioantes = mt_rand(100,999);

								$rutaAntes = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/antes/".$aleatorioantes.".png";

								$origenantes = imagecreatefrompng($_FILES["nuevafotoAntesJovenC"]["tmp_name"]);						

								$destinoantes = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

								imagecopyresized($destinoantes, $origenantes, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

								imagepng($destinoantes, $rutaAntes);

						}
						}
					}


				/*=============================================
				VALIDAR IMAGEN despues
				=============================================*/

				$rutaDespues = "";
				/*=============================================
				CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL JOVEN
				=============================================*/

				$directoriodespues = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/despues";

				mkdir($directoriodespues, 0755);
				var_dump(isset($_FILES["nuevafotoDespuesJoven"]["tmp_name"]));
				if(isset($_FILES["nuevafotoDespuesJoven"]["tmp_name"])){
					//Imagen por defecto
					var_dump($_FILES["nuevafotoDespuesJoven"]["tmp_name"]);
						if($_FILES["nuevafotoDespuesJoven"]["tmp_name"] != ""){
					 
							list($ancho, $alto) = getimagesize($_FILES["nuevafotoDespuesJoven"]["tmp_name"]);

							$nuevoAncho = 500;
							$nuevoAlto = 500;

							/*=============================================
							DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
							=============================================*/

							if($_FILES["nuevafotoDespuesJoven"]["type"] == "image/jpeg"){

								// =============================================
								// GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								// =============================================

								$aleatoriodespues = mt_rand(100,999);

								$rutaDespues = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/despues/".$aleatoriodespues.".jpg";

								$origendespues = imagecreatefromjpeg($_FILES["nuevafotoDespuesJoven"]["tmp_name"]);						

								$destinodespues = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

								imagecopyresized($destinodespues, $origendespues, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

								imagejpeg($destinodespues, $rutaDespues);

							}

							if($_FILES["nuevafotoDespuesJoven"]["type"] == "image/png"){

								/*=============================================
								GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								=============================================*/

								$aleatoriodespues = mt_rand(100,999);

								$rutaDespues = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/despues/".$aleatoriodespues.".png";

								$origendespues = imagecreatefrompng($_FILES["nuevafotoDespuesJoven"]["tmp_name"]);						

								$destinodespues = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

								imagecopyresized($destinodespues, $origendespues, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

								imagepng($destinodespues, $rutaDespues);

						
							}
						}
					}
					

				/*=============================================
				SUBMIOS EL ARCHIVO DEL JOVEN
				=============================================*/
				$rutaArchivo="";
				/*=============================================
				CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR EL ARCHIVO DEL JOVEN
				=============================================*/

				$directorioarchivo = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/archivo";

				mkdir($directorioarchivo, 0755);
				if(isset($_FILES["nuevoArchivoJoven"]["tmp_name"])){
					
					var_dump($_FILES["nuevoArchivoJoven"]["tmp_name"]);

						

								/*=============================================
								GUARDAMOS EL ARCHIVO EN EL DIRECTORIO
								=============================================*/

								if($_FILES["nuevoArchivoJoven"]["type"] == "application/pdf") {
									$rutaArchivo = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/archivo/".$_FILES["nuevoArchivoJoven"]["name"];
								}else{
									$rutaArchivo = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/archivo/".$_FILES["nuevoArchivoJoven"]["name"];
								}
								//$rutaArchivo = "vistas/img/jovenes/".$_POST["nuevoJoven"]."/archivo";
								// Cargando el fichero en la carpeta 
								move_uploaded_file($_FILES["nuevoArchivoJoven"]["tmp_name"], $rutaArchivo);
							
					}	


				$listaResjovenes = json_decode($_POST["listaResjovenes"], true);	
					
			   	$tabla = "jovenes";

			   	$datos = array("fotojoven"=>$ruta,
			   				   "nombre"=>$_POST["nuevoJoven"],
			   				   "sexo"=>$_POST["sexoJoven"],
			   				   "fechanac"=>$_POST["nuevaFecNac"],
			   				   "edad"=>$_POST["nuevoEdad"],
			   				   "iglesia"=>$_POST["nuevaIglesiaJoven"],
			   				   "tribu"=>$_POST["nuevaTribuJoven"],
			   				   "cconocioiglesia"=>$_POST["nuevaConocerIglesiaJoven"],
			   				   "ecivil"=>$_POST["EstCiv"],
					           "familiaiglesia"=>$_POST["nuevoFamIglJoven"],
					           "preguntahijos"=>$_POST["hijosJoven"],
					           "conyuge"=>$_POST["ConyugeIglesia"],
					           "quienfamilia"=>$_POST["nuevoQuienJov"],
					           "canthijos"=>$_POST["cantHijos"],
					           "condjoven"=>$_POST["nuevacondJoven"],
					           "testimonio"=>$_POST["Testimonio"],
					           "email"=>$_POST["emailJoven"],
					           "telfijo"=>$_POST["telefJoven"],
					           "telcelular"=>$_POST["celJoven"],
					           "whatsapp"=>$_POST["wppJoven"],
					           "telegram"=>$_POST["telegramJoven"],
					           "instagram"=>$_POST["instagramJoven"],
					           "facebook"=>$_POST["fbJoven"],
					           "linkedin"=>$_POST["linkedinJoven"],
					           "youtube"=>$_POST["youtubeJoven"],
					           "tiktok"=>$_POST["tiktokJoven"],
					       	   "direccion"=>$_POST["dirJoven"],
					       	   "nrocasa"=>$_POST["numCasa"],
					       	   "barrio"=>$_POST["barrioJoven"],
					       	   "ciudad"=>$_POST["ciudadJoven"],
					       	   "depto"=>$_POST["deptoJoven"],
					       	   "tvivienda"=>$_POST["tviviendaJoven"],
					       	   "tvotra"=>$_POST["cualOtraV"],
					       	   "tconvivencia"=>$_POST["tconvivenciaJoven"],
					       	   "tcotra"=>$_POST["cualOtraC"],
					       	   "fechaingiglesia"=>$_POST["nuevaFecIngJoven"],
					       	   "fechaingfju"=>$_POST["nuevaFecIngFJUJoven"],
					       	   "pregbautaguas"=>$_POST["pregbautAguas"],
					       	   "fecbautaguas"=>$_POST["nuevaFecBautismoJoven"],
					       	   "mombautaguas"=>$_POST["momBautJoven"],
					       	   "obautaguas"=>$_POST["cualOtroB"],
					       	   "pregbautEspirituSanto"=>$_POST["pregbautEspirituSanto"],
					       	   "fecbautEspSanto"=>$_POST["nuevaFecBautismoEspirutoSanto"],
					       	   "expbautEspSanto"=>$_POST["expBautismoEspSanto"],
					       	   "actobra"=>$_POST["EstAct"],
					       	   "tiempoobra"=>$_POST["tiempoObraJoven"],
					       	   "servAltar"=>$_POST["servirAltarJoven"],
					       	   "compintellimen"=>$_POST["intellimenJoven"],
					       	   "tiempointelli"=>$_POST["tiempointelliJoven"],
					       	   "probactual"=>$_POST["probActJoven"],
					       	   "probsup"=>$_POST["probSupJoven"],
					       	   "probactualotro"=>$_POST["cualesOtrosA"],
					       	   "psupotro"=>$_POST["cualesOtrosS"],
					       	   "eapartado"=>$_POST["apartJoven"],
					       	   "porqueapart"=>$_POST["porqAJoven"],
					       	   "fecapart"=>$_POST["nuevaFecApJoven"],
					       	   "encconDios"=>$_POST["encuentroconDiosJoven"],
					       	   "obspastor"=>$_POST["obsPastor"],
					       	   "proyjoven"=>$_POST["proyectoJoven"],
					       	   "funproyjoven"=>$_POST["funcionproyJoven"],
					       	   "nivproyjoven"=>$_POST["nivelproyJoven"],
					       	   "fecingproyjoven"=>$_POST["nuevaFecproyJoven"],
					       	   "funproyjoven"=>$_POST["funcionproyJoven"],
					       	   "respjoven"=>$_POST["listaResjovenes"],					       	 
					       	   "nivestudiojoven"=>$_POST["nivelestJoven"],
					       	   "estestudiojoven"=>$_POST["estEstudioJoven"],
					       	   "areaestjoven"=>$_POST["areaEstJoven"],
					       	   "tituloestjoven"=>$_POST["tituloEstJoven"],
					       	   "trabactualjoven"=>$_POST["trabactualJoven"],
					       	   "lugartrabjoven"=>$_POST["lugartrabaJoven"],
					       	   "tipoinsttrabjoven"=>$_POST["tipoInstJoven"],
					       	   "alabtrabjoven"=>$_POST["areaLabJoven"],
					       	   "tipotrabjoven"=>$_POST["ttrabaJoven"],
					       	   "idiomauno"=>$_POST["idioma1Joven"],
					       	   "niveliduno"=>$_POST["nividioma1Joven"],
					       	   "idiomados"=>$_POST["idioma2Joven"],
					       	   "niveliddos"=>$_POST["nividioma2Joven"],
					       	   "idiomatres"=>$_POST["idioma3Joven"],
					       	   "nivelidtres"=>$_POST["nividioma3Joven"],
					       	   "talentouno"=>$_POST["talento1Joven"],
					       	   "niveltaluno"=>$_POST["nivital1Joven"],
					       	   "otrotalentouno"=>$_POST["otroTalento1"],
					       	   "talentodos"=>$_POST["talento2Joven"],
					       	   "niveltaldos"=>$_POST["nivital2Joven"],
					       	   "otrotalentodos"=>$_POST["otroTalento2"],
					       	   "talentotres"=>$_POST["talento3Joven"],
					       	   "niveltaltres"=>$_POST["nivital3Joven"],
					       	   "otrotalentotres"=>$_POST["otroTalento3"],
					       	   "imagendespues"=>$rutaDespues, 
					       	   "archivojoven"=>$rutaArchivo, 
					       	   "imagenantes"=>$rutaAntes,
					       	   "nacionalidadjoven"=>$_POST["nacionalidadJoven"],
					       	   "ascendenciajoven"=>$_POST["ascendenciaJoven"],
					       	   "usuarioqueregistro"=>$_POST["userRegister"],
					       	   "idiomamadre"=>$_POST["lenguamadreJoven"],
					       	   "idiomaoriginario"=>$_POST["lenguaoriginaria"],
					       	);
			  //	var_dump($datos);
				var_dump($ruta);
			  	$respuesta = ModeloJovenes::mdlIngresarJoven($tabla, $datos);
			   	


			   	if($respuesta == "ok"){
					
			   		echo'<script>

					swal({
						  type: "success",
						  title: "Los datos del joven se han registrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "regjovenes";

									}
								})

					</script>';
				}

			}else{
				

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre del joven no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "regjovenes";

							}
						})

			  	</script>';

			  	var_dump("Hola");

			}

		}


	}
	/*=============================================
	=            MOSTRAR JOVENES          =
	=============================================*/
	
	static public function ctrMostrarJovenes($item, $valor){
		$tabla = "jovenes";
		$respuesta = ModeloJovenes::mdlMostrarJovenes($tabla, $item, $valor);
		return $respuesta;
	}
	/*=============================================
	=            MOSTRAR JOVENES          =
	=============================================*/
	
	static public function ctrMostrarJovenesdet($item, $valor){
		$tabla = "jovenes";
		$respuesta = ModeloJovenes::mdlMostrarJovenesdet($tabla, $item, $valor);
		return $respuesta;
	}
	/*=============================================
	EDITAR JOVEN
	=============================================*/
	static public function ctrEditarJoven(){
		if(isset($_POST["editarNombre"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"]) ){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["fotoActualJoven"];


				if(isset($_FILES["editarFotoJoven"]["tmp_name"]) && ($_FILES["editarFotoJoven"]["tmp_name"]!= "")){

					list($ancho, $alto) = getimagesize($_FILES["editarFotoJoven"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL JOVEN
					=============================================*/

					$directorio = "vistas/img/jovenes/".$_POST["editarNombre"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["fotoActualJoven"])){
						//console.log($_POST["fotoActualJoven"], "Elimina");
						unlink($_POST["fotoActualJoven"]);

					}else{

						mkdir($directorio, 0755);

					}	

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarFotoJoven"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/jovenes/".$_POST["editarNombre"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarFotoJoven"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarFotoJoven"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/jovenes/".$_POST["editarNombre"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarFotoJoven"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				/*=============================================
				VALIDAR IMAGEN ANTES
				=============================================*/

				$rutaedantes = $_POST["edfotoActualAntesJoven"];
				var_dump($_FILES["edfotoActualAntesJoven"]);

				if(isset($_FILES["ednuevafotoAntesJovenC"]["tmp_name"]) && ($_FILES["ednuevafotoAntesJovenC"]["tmp_name"]!= "")){

					list($ancho, $alto) = getimagesize($_FILES["ednuevafotoAntesJovenC"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL JOVEN
					=============================================*/

					$directorio = "vistas/img/jovenes/".$_POST["editarNombre"]."/antes";

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["edfotoActualAntesJoven"])){
						var_dump($_POST["edfotoActualAntesJoven"], "Elimina");
						unlink($_POST["edfotoActualAntesJoven"]);

					}else{

						mkdir($directorio, 0755);

					}	

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["ednuevafotoAntesJovenC"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$rutaedantes = "vistas/img/jovenes/".$_POST["editarNombre"]."/antes/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["ednuevafotoAntesJovenC"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $rutaedantes);

					}

					if($_FILES["ednuevafotoAntesJovenC"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$rutaedantes = "vistas/img/jovenes/".$_POST["editarNombre"]."/antes/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["ednuevafotoAntesJovenC"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $rutaedantes);

					}

				}

				/*=============================================
				VALIDAR IMAGEN DESPUES
				=============================================*/

				$rutaedespues = $_POST["edfotoActualDspsJoven"];
				var_dump($_FILES["edfotoActualDspsJoven"]);

				if(isset($_FILES["ednuevafotoDespuesJoven"]["tmp_name"]) && ($_FILES["ednuevafotoDespuesJoven"]["tmp_name"]!= "")){

					list($ancho, $alto) = getimagesize($_FILES["ednuevafotoDespuesJoven"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL JOVEN
					=============================================*/

					$directorio = "vistas/img/jovenes/".$_POST["editarNombre"]."/despues";

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["edfotoActualDspsJoven"])){
						var_dump($_POST["edfotoActualAntesJoven"], "Elimina");
						unlink($_POST["edfotoActualDspsJoven"]);

					}else{

						mkdir($directorio, 0755);

					}	

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["ednuevafotoDespuesJoven"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$rutaedespues = "vistas/img/jovenes/".$_POST["editarNombre"]."/despues/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["ednuevafotoDespuesJoven"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $rutaedespues);

					}

					if($_FILES["ednuevafotoDespuesJoven"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$rutaedespues = "vistas/img/jovenes/".$_POST["editarNombre"]."/despues/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["ednuevafotoDespuesJoven"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $rutaedespues);

					}

				

				}
				/*=============================================
				RESUBIENDO SUBMIOS EL ARCHIVO DEL JOVEN
				=============================================*/
				$rutaArchivo= $_POST["edarchivoActualJoven"];
				var_dump($_FILES["ednuevoArchivoJoven"]["tmp_name"]);
				if(isset($_FILES["ednuevoArchivoJoven"]["tmp_name"]) && ($_FILES["ednuevoArchivoJoven"]["tmp_name"]!="")){
					
					var_dump($_FILES["ednuevoArchivoJoven"]["tmp_name"]);
					if(!empty($_POST["edarchivoActualJoven"])){
						//var_dump($_POST["edarchivoActualJoven"], "Elimina");
						unlink($_POST["edarchivoActualJoven"]);

					}else{

						mkdir($directorio, 0755);

					}	

							/*=============================================
							CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR EL ARCHIVO DEL JOVEN
							=============================================*/

							$directorio = "vistas/img/jovenes/".$_POST["editarNombre"]."/archivo";

							mkdir($directorio, 0755);
				
							$rutaArchivo = "vistas/img/jovenes/".$_POST["editarNombre"]."/archivo/".$_FILES["ednuevoArchivoJoven"]["name"];
								var_dump("guardaArchivo");
								move_uploaded_file($_FILES["ednuevoArchivoJoven"]["tmp_name"], $rutaArchivo);
							
					}	


			   	$tabla = "jovenes";

			   	$datos = array("id"=>$_POST["edIdJoven"],
			   				   "fotojoven"=>$ruta,
			   				   "nombre"=>$_POST["editarNombre"],
			   				   "sexo"=>$_POST["editarsexoJoven"],
			   				   "fechanac"=>$_POST["editarFecNac"],
			   				   "edad"=>$_POST["editarEdad"],
			   				   "iglesia"=>$_POST["editarIglesiaJoven"],
			   				   "tribu"=>$_POST["editarTribuJoven"],
			   				   "cconocioiglesia"=>$_POST["editarConocerIglesiaJoven"],
			   				   "ecivil"=>$_POST["editarEstCiv"],
					           "familiaiglesia"=>$_POST["editarFamIglJoven"],
					           "preguntahijos"=>$_POST["editarhijosJoven"],
					           "conyuge"=>$_POST["editarConyugeIglesia"],
					           "quienfamilia"=>$_POST["editarnuevoQuienJov"],
					           "canthijos"=>$_POST["editarcantHijos"],
					           "condjoven"=>$_POST["editarcondJoven"],
					           "testimonio"=>$_POST["editarTestimonio"],

					           "email"=>$_POST["editaremailJoven"],
					           "telfijo"=>$_POST["editartelefJoven"],
					           "telcelular"=>$_POST["editarcelJoven"],
					           "whatsapp"=>$_POST["editarwppJoven"],
					           "telegram"=>$_POST["editartelegramJoven"],
					           "instagram"=>$_POST["editarinstagramJoven"],
					           "facebook"=>$_POST["editarfbJoven"],
					           "linkedin"=>$_POST["editarlinkedinJoven"],
					           "youtube"=>$_POST["editaryoutubeJoven"],
					           "tiktok"=>$_POST["editartiktokJoven"],

					       	   "direccion"=>$_POST["editardirJoven"],
					       	   "nrocasa"=>$_POST["editarnumCasa"],
					       	   "barrio"=>$_POST["editarbarrioJoven"],
					       	   "ciudad"=>$_POST["editarciudadJoven"],
					       	   "depto"=>$_POST["editardeptoJoven"],
					       	   "tvivienda"=>$_POST["editartviviendaJoven"],
					       	   "tvotra"=>$_POST["editarcualOtraV"],
					       	   "tconvivencia"=>$_POST["editartconvivenciaJoven"],
					       	   "tcotra"=>$_POST["editarcualOtraC"],

					       	   "fechaingiglesia"=>$_POST["editarnuevaFecIngJoven"],
					       	   "fechaingfju"=>$_POST["editarnuevaFecIngFJUJoven"],
					       	   "pregbautaguas"=>$_POST["edpregbautAguas"],
					       	   "fecbautaguas"=>$_POST["editarnuevaFecBautismoJoven"],
					       	   "mombautaguas"=>$_POST["editarmomBautJoven"],
					       	   "obautaguas"=>$_POST["editarcualOtroB"],
					       	   "pregbautEspirituSanto"=>$_POST["edpregbautEspirituSanto"],
					       	   "fecbautEspSanto"=>$_POST["editarnuevaFecBautismoEspirutoSanto"],
					       	   "expbautEspSanto"=>$_POST["editarexpBautismoEspSanto"],
					       	   "actobra"=>$_POST["editarEstAct"],
					       	   "tiempoobra"=>$_POST["editartiempoObraJoven"],
					       	   "servAltar"=>$_POST["editarservirAltarJoven"],
					       	   "compintellimen"=>$_POST["editarintellimenJoven"],
					       	   "tiempointelli"=>$_POST["editartiempointelliJoven"],
					       	   "probactual"=>$_POST["editarprobActJoven"],
					       	   "probsup"=>$_POST["editarprobSupJoven"],
					       	   "probactualotro"=>$_POST["editarcualesOtrosA"],
					       	   "psupotro"=>$_POST["editarcualesOtrosS"],
					       	   "eapartado"=>$_POST["editarapartJoven"],
					       	   "porqueapart"=>$_POST["editarporqAJoven"],
					       	   "fecapart"=>$_POST["editarnuevaFecApJoven"],
					       	   "encconDios"=>$_POST["editarencuentroconDiosJoven"],
					       	   "obspastor"=>$_POST["editarobsJoven"],

					       	   "proyjoven"=>$_POST["editarproyectoJoven"],
					       	   "encconDios"=>$_POST["editarencuentroconDiosJoven"],
					       	   "funproyjoven"=>$_POST["editarfuncionproyJoven"],
					       	   "nivproyjoven"=>$_POST["editarnivelproyJoven"],
					       	   "fecingproyjoven"=>$_POST["editarnuevaFecproyJoven"],
					       	   "funproyjoven"=>$_POST["editarfuncionproyJoven"],

					       	   "respjoven"=>$_POST["editlistaResjovenes"],


					       	   "nivestudiojoven"=>$_POST["editarnivelestJoven"],
					       	   "estestudiojoven"=>$_POST["editarestEstudioJoven"],
					       	   "areaestjoven"=>$_POST["editarareaEstJoven"],
					       	   "tituloestjoven"=>$_POST["editartituloEstJoven"],

					       	   "trabactualjoven"=>$_POST["editartrabactualJoven"],
					       	   "lugartrabjoven"=>$_POST["editarlugartrabaJoven"],
					       	   "tipoinsttrabjoven"=>$_POST["editartipoInstJoven"],
					       	   "alabtrabjoven"=>$_POST["editarareaLabJoven"],
					       	   "tipotrabjoven"=>$_POST["editarttrabaJoven"],

					       	   "idiomauno"=>$_POST["editaridioma1Joven"],
					       	   "niveliduno"=>$_POST["editarnividioma1Joven"],
					       	   "idiomados"=>$_POST["editaridioma2Joven"],
					       	   "niveliddos"=>$_POST["editarnividioma2Joven"],
					       	   "idiomatres"=>$_POST["editaridioma3Joven"],
					       	   "nivelidtres"=>$_POST["editarnividioma3Joven"],

					       	   "talentouno"=>$_POST["editartalento1Joven"],
					       	   "niveltaluno"=>$_POST["editarnivital1Joven"],
					       	   "otrotalentouno"=>$_POST["editarotroTalento1"],
					       	   "talentodos"=>$_POST["editartalento2Joven"],
					       	   "niveltaldos"=>$_POST["editarnivital2Joven"],
					       	   "otrotalentodos"=>$_POST["editarotroTalento2"],
					       	   "talentotres"=>$_POST["editartalento3Joven"],
					       	   "niveltaltres"=>$_POST["editarnivital3Joven"],
					       	   "otrotalentotres"=>$_POST["editarotroTalento3"],

								"imagenantes"=>$rutaedantes,
								"imagendespues"=>$rutaedespues,
								"archivojoven"=>$rutaArchivo,
								"nacionalidadjoven"=>$_POST["ednacionalidadJoven"],
					       	   "ascendenciajoven"=>$_POST["edascendenciaJoven"],
					       	   "idiomamadre"=>$_POST["editarlenguamadreJoven"],
					       	   "idiomaoriginario"=>$_POST["editarlenguaoriginaria"],

					       	   //"usuarioqueregistro"=>$_POST["actualedituserRegister"],
					       	   "usuarioqueedito"=>$_POST["edituserRegister"]
							);
								
				//var_dump($datos);
			   	$respuesta = ModeloJovenes::mdlEditarJoven($tabla, $datos);
			   	

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Los datos del joven han sido modificados correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "regjovenes";

									}
								})

					</script>';

				}

			}else{
				
				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre del joven no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "regjovenes";

							}
						})

			  	</script>';



			}

		}

	}
	/*=============================================
	DESCARGAR EXCEL
	=============================================*/

	public function ctrDescargarReporte(){

		if(isset($_GET["clientes"])){
			$tabla = "clientes";
	
				$item = null;
				$valor = null;

				$clientes = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);


			/*=============================================
			CREAMOS EL ARCHIVO DE EXCEL
			=============================================*/

			$hoy = Date('m-d-Y');

			$Name = 'Lista de Clientes '.$hoy.'.xls';

			header('Expires: 0');
			header('Cache-control: private');
			header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
			header("Cache-Control: cache, must-revalidate"); 
			header('Content-Description: File Transfer');
			header('Last-Modified: '.date('D, d M Y H:i:s'));
			header("Pragma: public"); 
			header('Content-Disposition:; filename="'.$Name.'"');
			header("Content-Transfer-Encoding: binary");

			echo utf8_decode("<table border='0'> 

					<tr> 
					<td style='font-weight:bold; border:1px solid #eee;'>ID</td> 
					<td style='font-weight:bold; border:1px solid #eee;'>NOMBRE</td>
					<td style='font-weight:bold; border:1px solid #eee;'>NIT</td>
					<td style='font-weight:bold; border:1px solid #eee;'>E-MAIL</td>
					<td style='font-weight:bold; border:1px solid #eee;'>TELEFONO</td>
					<td style='font-weight:bold; border:1px solid #eee;'>DEPARTAMENTO</td>
					<td style='font-weight:bold; border:1px solid #eee;'>DIRECCIÓN</td>		
					<td style='font-weight:bold; border:1px solid #eee;'>TOTAL COMPRAS</td>		
					<td style='font-weight:bold; border:1px solid #eee;'>ÚLTIMA COMPRA</td	
					<td style='font-weight:bold; border:1px solid #eee;'>FECHA INGRESO</td>		
					</tr>");

			foreach ($clientes as $row => $item){

				
			 echo utf8_decode("<tr>
			 			<td style='border:1px solid #eee;'>".$item["id"]."</td> 
			 			<td style='border:1px solid #eee;'>".$item["nombre"]."</td> 
			 			<td style='border:1px solid #eee;'>".$item["nit"]."</td>
			 			<td style='border:1px solid #eee;'>".$item["email"]."</td>
			 			<td style='border:1px solid #eee;'>".$item["telefono"]."</td>
			 			<td style='border:1px solid #eee;'>".$item["departamento"]."</td>
			 			<td style='border:1px solid #eee;'>".$item["direccion"]."</td>
			 			<td style='border:1px solid #eee;'>".$item["compras"]."</td>
			 			<td style='border:1px solid #eee;'>".$item["ultima_compra"]."</td>
			 			<td style='border:1px solid #eee;'>".$item["fecha"]."</td>
			 			<td style='border:1px solid #eee;'>");



			}


			echo "</table>";
		}

		}


	/*=============================================
	ELIMINAR JOVEN
	=============================================*/

	static public function ctrEliminarJoven(){

		if(isset($_GET["idJoven"])){

			$tabla ="jovenes";
			$datos = $_GET["idJoven"];
			if($_GET["fotoJoven"] != "" || $_GET["fotoAntes"] != "" || $_GET["fotoDespues"] != ""
				|| $_GET["ArchivoJoven"] != ""){

				unlink($_GET["fotoJoven"]);
				unlink($_GET["fotoAntes"]);
				rmdir('vistas/img/jovenes/'.$_GET["nombre"]."/antes");
				unlink($_GET["fotoDespues"]);
				rmdir('vistas/img/jovenes/'.$_GET["nombre"]."/despues");
				unlink($_GET["ArchivoJoven"]);
				rmdir('vistas/img/jovenes/'.$_GET["nombre"]."/archivo");
				//var_dump($_GET["nombre"]);
				rmdir('vistas/img/jovenes/'.$_GET["nombre"]);

			}
			$respuesta = ModeloJovenes::mdlEliminarJoven($tabla, $datos);


			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El joven ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "regjovenes";

								}
							})

				</script>';

			}		

		}

	}
}