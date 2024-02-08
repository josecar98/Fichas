{


		if(isset($_POST["nuevoJoven"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoJoven"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = "";

				if(isset($_FILES["nuevafotoJoven"]["tmp_name"])){
					//Imagen por defecto
					var_dump($_FILES["nuevafotoJoven"]["tmp_name"]);
					if ($_FILES["nuevafotoJoven"]["tmp_name"]== "") {

						$fotodefault = "vistas/dist/img/anonymous.png";
						list($ancho, $alto) = getimagesize($fotodefault);

						$nuevoAncho = 500;
							$nuevoAlto = 500;

							/*=============================================
							CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
							=============================================*/

							$directorio = "vistas/img/jovenes/".$_POST["nuevoJoven"];

							mkdir($directorio, 0755);

							/*=============================================
							DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
							=============================================*/

							if($_FILES["nuevafotoJoven"]["type"] == "image/jpeg"){

								/*=============================================
								GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								=============================================*/

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

								$ruta = "vistas/img/jovenes/".$_POST["nuevoJoveno"]."/".$aleatorio.".png";

								$origen = imagecreatefrompng($_FILES["nuevafotoJoven"]["tmp_name"]);						

								$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

								imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

								imagepng($destino, $ruta);

						}

					} else{
							list($ancho, $alto) = getimagesize($_FILES["nuevafotoJoven"]["tmp_name"]);

							$nuevoAncho = 500;
							$nuevoAlto = 500;

							/*=============================================
							CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
							=============================================*/

							$directorio = "vistas/img/jovenes/".$_POST["nuevoJoven"];

							mkdir($directorio, 0755);

							/*=============================================
							DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
							=============================================*/

							if($_FILES["nuevafotoJoven"]["type"] == "image/jpeg"){

								/*=============================================
								GUARDAMOS LA IMAGEN EN EL DIRECTORIO
								=============================================*/

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
					}
					}

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
					           "condjoven"=>$_POST["cantHijos"],
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
					           "tiktok"=>$_POST["tiktokJoven"]);
			  
			   	$respuesta = ModeloJovenes::mdlIngresarJoven($tabla, $datos);
			   	
			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El cliente ha sido guardado correctamente",
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
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
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