<?php 

require_once "conexion.php";

class ModeloJovenes{

/*=============================================
	CREAR JOVEN
	=============================================*/

	static public function mdlIngresarJoven($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fotojoven, nombre, sexo, fechanac, edad, iglesia, tribu, cconocioiglesia, ecivil, familiaiglesia, preguntahijos, conyuge, quienfamilia, canthijos,
				condjoven, testimonio, email, telfijo, telcelular, whatsapp, telegram, instagram, facebook, linkedin,
				youtube, tiktok, direccion, nrocasa, barrio, ciudad, depto, tvivienda, tvotra, tconvivencia, tcotra, 
				fechaingiglesia, fechaingfju, pregbautaguas,fecbautaguas, mombautaguas, obautaguas, pregbautEspirituSanto ,fecbautEspSanto, expbautEspSanto, actobra, tiempoobra, servAltar, compintellimen, tiempointelli, probactual, probsup, probactualotro, psupotro, eapartado, porqueapart, fecapart, encconDios, obspastor, proyjoven, funproyjoven, nivproyjoven, fecingproyjoven, respjoven, nivestudiojoven, estestudiojoven, areaestjoven, tituloestjoven, trabactualjoven, lugartrabjoven, tipoinsttrabjoven, alabtrabjoven, tipotrabjoven, idiomauno, niveliduno, idiomados, niveliddos, idiomatres,	nivelidtres, talentouno, niveltaluno, otrotalentouno, talentodos, niveltaldos, otrotalentodos, talentotres, niveltaltres, otrotalentotres, imagenantes, imagendespues, archivojoven, nacionalidadjoven, ascendenciajoven, usuarioqueregistro, idiomamadre, idiomaoriginario

				) VALUES (:fotojoven, :nombre, :sexo, :fechanac, :edad, :iglesia, :tribu, :cconocioiglesia, :ecivil, :familiaiglesia, :preguntahijos, :conyuge, :quienfamilia, :canthijos, :condjoven, :testimonio, :email, :telfijo, :telcelular, :whatsapp, :telegram, :instagram, :facebook, :linkedin, :youtube, :tiktok, :direccion, :nrocasa, :barrio, :ciudad, :depto, :tvivienda, :tvotra, :tconvivencia, :tcotra, :fechaingiglesia, :fechaingfju, :pregbautaguas, :fecbautaguas, :mombautaguas, :obautaguas, 	:pregbautEspirituSanto, :fecbautEspSanto, :expbautEspSanto, :actobra, :tiempoobra, :servAltar, :compintellimen, :tiempointelli, :probactual, :probsup, :probactualotro, :psupotro, :eapartado, 
				:porqueapart, :fecapart, :encconDios, :obspastor, :proyjoven, :funproyjoven, :nivproyjoven, :fecingproyjoven, :respjoven, :nivestudiojoven, :estestudiojoven, :areaestjoven, :tituloestjoven, :trabactualjoven, :lugartrabjoven, :tipoinsttrabjoven, :alabtrabjoven, :tipotrabjoven, :idiomauno, :niveliduno, :idiomados, :niveliddos, :idiomatres, 
					:nivelidtres, :talentouno, :niveltaluno, :otrotalentouno, :talentodos, :niveltaldos, :otrotalentodos, :talentotres, :niveltaltres, :otrotalentotres, :imagenantes, :imagendespues, :archivojoven, :nacionalidadjoven, :ascendenciajoven, :usuarioqueregistro, :idiomamadre, :idiomaoriginario)");

		$stmt->bindParam(":fotojoven", $datos["fotojoven"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":sexo", $datos["sexo"], PDO::PARAM_STR);
		$stmt->bindParam(":fechanac", $datos["fechanac"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_INT);
		$stmt->bindParam(":iglesia", $datos["iglesia"], PDO::PARAM_STR);
		$stmt->bindParam(":tribu", $datos["tribu"], PDO::PARAM_STR);
		$stmt->bindParam(":cconocioiglesia", $datos["cconocioiglesia"], PDO::PARAM_STR);
		$stmt->bindParam(":ecivil", $datos["ecivil"], PDO::PARAM_STR);
		$stmt->bindParam(":familiaiglesia", $datos["familiaiglesia"], PDO::PARAM_STR);
		$stmt->bindParam(":preguntahijos", $datos["preguntahijos"], PDO::PARAM_STR);
		$stmt->bindParam(":conyuge", $datos["conyuge"], PDO::PARAM_STR);
		$stmt->bindParam(":quienfamilia", $datos["quienfamilia"], PDO::PARAM_STR);
		$stmt->bindParam(":canthijos", $datos["canthijos"], PDO::PARAM_INT);
		$stmt->bindParam(":condjoven", $datos["condjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":testimonio", $datos["testimonio"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telfijo", $datos["telfijo"], PDO::PARAM_STR);
		$stmt->bindParam(":telcelular", $datos["telcelular"], PDO::PARAM_STR);
		$stmt->bindParam(":whatsapp", $datos["whatsapp"], PDO::PARAM_STR);
		$stmt->bindParam(":telegram", $datos["telegram"], PDO::PARAM_STR);
		$stmt->bindParam(":instagram", $datos["instagram"], PDO::PARAM_STR);
		$stmt->bindParam(":facebook", $datos["facebook"], PDO::PARAM_STR);
		$stmt->bindParam(":linkedin", $datos["linkedin"], PDO::PARAM_STR);
		$stmt->bindParam(":youtube", $datos["youtube"], PDO::PARAM_STR);
		$stmt->bindParam(":tiktok", $datos["tiktok"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":nrocasa", $datos["nrocasa"], PDO::PARAM_STR);
		$stmt->bindParam(":barrio", $datos["barrio"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":depto", $datos["depto"], PDO::PARAM_STR);
		$stmt->bindParam(":tvivienda", $datos["tvivienda"], PDO::PARAM_STR);
		$stmt->bindParam(":tvotra", $datos["tvotra"], PDO::PARAM_STR);
		$stmt->bindParam(":tconvivencia", $datos["tconvivencia"], PDO::PARAM_STR);
		$stmt->bindParam(":tcotra", $datos["tcotra"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaingiglesia", $datos["fechaingiglesia"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaingfju", $datos["fechaingfju"], PDO::PARAM_STR);
		$stmt->bindParam(":pregbautaguas", $datos["pregbautaguas"], PDO::PARAM_STR);
		$stmt->bindParam(":fecbautaguas", $datos["fecbautaguas"], PDO::PARAM_STR);
		$stmt->bindParam(":mombautaguas", $datos["mombautaguas"], PDO::PARAM_STR);
		$stmt->bindParam(":obautaguas", $datos["obautaguas"], PDO::PARAM_STR);
		$stmt->bindParam(":pregbautEspirituSanto", $datos["pregbautEspirituSanto"], PDO::PARAM_STR);
		$stmt->bindParam(":fecbautEspSanto", $datos["fecbautEspSanto"], PDO::PARAM_STR);
		$stmt->bindParam(":expbautEspSanto", $datos["expbautEspSanto"], PDO::PARAM_STR);
		$stmt->bindParam(":actobra", $datos["actobra"], PDO::PARAM_STR);
		$stmt->bindParam(":tiempoobra", $datos["tiempoobra"], PDO::PARAM_STR);
		$stmt->bindParam(":servAltar", $datos["servAltar"], PDO::PARAM_STR);
		$stmt->bindParam(":compintellimen", $datos["compintellimen"], PDO::PARAM_STR);
		$stmt->bindParam(":tiempointelli", $datos["tiempointelli"], PDO::PARAM_STR);
		$stmt->bindParam(":probactual", $datos["probactual"], PDO::PARAM_STR);
		$stmt->bindParam(":probsup", $datos["probsup"], PDO::PARAM_STR);
		$stmt->bindParam(":probactualotro", $datos["probactualotro"], PDO::PARAM_STR);
		$stmt->bindParam(":psupotro", $datos["psupotro"], PDO::PARAM_STR);
		$stmt->bindParam(":eapartado", $datos["eapartado"], PDO::PARAM_STR);
		$stmt->bindParam(":porqueapart", $datos["porqueapart"], PDO::PARAM_STR);
		$stmt->bindParam(":fecapart", $datos["fecapart"], PDO::PARAM_STR);
		$stmt->bindParam(":encconDios", $datos["encconDios"], PDO::PARAM_STR);
		$stmt->bindParam(":obspastor", $datos["obspastor"], PDO::PARAM_STR);

		$stmt->bindParam(":proyjoven", $datos["proyjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":funproyjoven", $datos["funproyjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":nivproyjoven", $datos["nivproyjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":fecingproyjoven", $datos["fecingproyjoven"], PDO::PARAM_STR);

		$stmt->bindParam(":respjoven", $datos["respjoven"], PDO::PARAM_STR);

		$stmt->bindParam(":nivestudiojoven", $datos["nivestudiojoven"], PDO::PARAM_STR);
		$stmt->bindParam(":estestudiojoven", $datos["estestudiojoven"], PDO::PARAM_STR);
		$stmt->bindParam(":areaestjoven", $datos["areaestjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":tituloestjoven", $datos["tituloestjoven"], PDO::PARAM_STR);

		$stmt->bindParam(":trabactualjoven", $datos["trabactualjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":lugartrabjoven", $datos["lugartrabjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoinsttrabjoven", $datos["tipoinsttrabjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":alabtrabjoven", $datos["alabtrabjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":tipotrabjoven", $datos["tipotrabjoven"], PDO::PARAM_STR);

		$stmt->bindParam(":idiomauno", $datos["idiomauno"], PDO::PARAM_STR);
		$stmt->bindParam(":niveliduno", $datos["niveliduno"], PDO::PARAM_STR);
		$stmt->bindParam(":idiomados", $datos["idiomados"], PDO::PARAM_STR);
		$stmt->bindParam(":niveliddos", $datos["niveliddos"], PDO::PARAM_STR);
		$stmt->bindParam(":idiomatres", $datos["idiomatres"], PDO::PARAM_STR);
		$stmt->bindParam(":nivelidtres", $datos["nivelidtres"], PDO::PARAM_STR);

		$stmt->bindParam(":talentouno", $datos["talentouno"], PDO::PARAM_STR);
		$stmt->bindParam(":niveltaluno", $datos["niveltaluno"], PDO::PARAM_STR);
		$stmt->bindParam(":otrotalentouno", $datos["otrotalentouno"], PDO::PARAM_STR);
		$stmt->bindParam(":talentodos", $datos["talentodos"], PDO::PARAM_STR);
		$stmt->bindParam(":niveltaldos", $datos["niveltaldos"], PDO::PARAM_STR);
		$stmt->bindParam(":otrotalentodos", $datos["otrotalentodos"], PDO::PARAM_STR);
		$stmt->bindParam(":talentotres", $datos["talentotres"], PDO::PARAM_STR);
		$stmt->bindParam(":niveltaltres", $datos["niveltaltres"], PDO::PARAM_STR);
		$stmt->bindParam(":otrotalentotres", $datos["otrotalentotres"], PDO::PARAM_STR);

		$stmt->bindParam(":imagenantes", $datos["imagenantes"], PDO::PARAM_STR);
		$stmt->bindParam(":imagendespues", $datos["imagendespues"], PDO::PARAM_STR);
		$stmt->bindParam(":archivojoven", $datos["archivojoven"], PDO::PARAM_STR);

		$stmt->bindParam(":nacionalidadjoven", $datos["nacionalidadjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":ascendenciajoven", $datos["ascendenciajoven"], PDO::PARAM_STR);
		$stmt->bindParam(":usuarioqueregistro", $datos["usuarioqueregistro"], PDO::PARAM_STR);
		$stmt->bindParam(":idiomamadre", $datos["idiomamadre"], PDO::PARAM_STR);
		$stmt->bindParam(":idiomaoriginario", $datos["idiomaoriginario"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
/*=============================================
	MOSTRAR JOVEN
	=============================================*/
	static public function mdlMostrarJovenes($tabla, $item, $valor)
	{
		if($item != null){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}
		$stmt -> close();
		$stmt = null;
	}	
	/*=============================================
	MOSTRAR JOVEN
	=============================================*/
	static public function mdlMostrarJovenesDet($tabla, $item, $valor)
	{
		if($item != null){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetchAll();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}
		$stmt -> close();
		$stmt = null;
	}	
/*=============================================
	EDITAR JOVEN
	=============================================*/

	static public function mdlEditarJoven($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fotojoven = :fotojoven, nombre = :nombre, sexo = :sexo, fechanac = :fechanac, edad = :edad, iglesia = :iglesia, tribu = :tribu, cconocioiglesia = :cconocioiglesia, ecivil = :ecivil, familiaiglesia = :familiaiglesia, preguntahijos = :preguntahijos, conyuge = :conyuge, quienfamilia = :quienfamilia, canthijos = :canthijos, condjoven = :condjoven, testimonio = :testimonio, 
			email = :email, telfijo = :telfijo, telcelular = :telcelular, whatsapp = :whatsapp, telegram = :telegram, 
			instagram = :instagram, facebook = :facebook, linkedin = :linkedin, youtube = :youtube, tiktok = :tiktok, 
			 direccion = :direccion, nrocasa = :nrocasa, barrio = :barrio, ciudad = :ciudad, depto = :depto,
			 tvivienda = :tvivienda, tvotra = :tvotra, tconvivencia = :tconvivencia, tcotra = :tcotra, 
			 fechaingiglesia = :fechaingiglesia, fechaingfju = :fechaingfju, pregbautaguas = :pregbautaguas,
			 fecbautaguas = :fecbautaguas, mombautaguas = :mombautaguas, obautaguas = :obautaguas, 
			 pregbautEspirituSanto = :pregbautEspirituSanto,  fecbautEspSanto = :fecbautEspSanto, 
			 expbautEspSanto = :expbautEspSanto, actobra = :actobra, tiempoobra = :tiempoobra, servAltar = :servAltar, compintellimen = :compintellimen, tiempointelli = :tiempointelli, probactual = :probactual,
			 probsup = :probsup, probactualotro = :probactualotro, psupotro = :psupotro, eapartado = :eapartado,
			 porqueapart = :porqueapart, 
			 fecapart = :fecapart, encconDios = :encconDios, proyjoven = :proyjoven, funproyjoven = :funproyjoven, nivproyjoven = :nivproyjoven, fecingproyjoven = :fecingproyjoven, respjoven = :respjoven,
			  nivestudiojoven = :nivestudiojoven,
			  estestudiojoven = :estestudiojoven, areaestjoven = :areaestjoven, tituloestjoven = :tituloestjoven, 
			  trabactualjoven = :trabactualjoven, lugartrabjoven = :lugartrabjoven, tipoinsttrabjoven = :tipoinsttrabjoven, alabtrabjoven = :alabtrabjoven, tipotrabjoven = :tipotrabjoven, idiomauno = :idiomauno, 
			  niveliduno = :niveliduno, idiomados = :idiomados, niveliddos = :niveliddos, idiomatres = :idiomatres,
			  nivelidtres = :nivelidtres, talentouno = :talentouno, niveltaluno = :niveltaluno,
			  otrotalentouno = :otrotalentouno, talentodos = :talentodos, niveltaldos = :niveltaldos, 
			  otrotalentodos = :otrotalentodos,  talentotres = :talentotres, niveltaltres =:niveltaltres, 
			  otrotalentotres = :otrotalentotres, imagenantes = :imagenantes, imagendespues = :imagendespues, archivojoven = :archivojoven,  nacionalidadjoven = :nacionalidadjoven, ascendenciajoven = :ascendenciajoven,  idiomamadre = :idiomamadre,idiomaoriginario = :idiomaoriginario, usuarioqueedito = :usuarioqueedito WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":fotojoven", $datos["fotojoven"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":sexo", $datos["sexo"], PDO::PARAM_STR);
		$stmt->bindParam(":fechanac", $datos["fechanac"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_INT);
		$stmt->bindParam(":iglesia", $datos["iglesia"], PDO::PARAM_STR);
		$stmt->bindParam(":tribu", $datos["tribu"], PDO::PARAM_STR);
		$stmt->bindParam(":cconocioiglesia", $datos["cconocioiglesia"], PDO::PARAM_STR);
		$stmt->bindParam(":ecivil", $datos["ecivil"], PDO::PARAM_STR);
		$stmt->bindParam(":familiaiglesia", $datos["familiaiglesia"], PDO::PARAM_STR);
		$stmt->bindParam(":preguntahijos", $datos["preguntahijos"], PDO::PARAM_STR);
		$stmt->bindParam(":conyuge", $datos["conyuge"], PDO::PARAM_STR);
		$stmt->bindParam(":quienfamilia", $datos["quienfamilia"], PDO::PARAM_STR);
		$stmt->bindParam(":canthijos", $datos["canthijos"], PDO::PARAM_INT);
		$stmt->bindParam(":condjoven", $datos["condjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":testimonio", $datos["testimonio"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telfijo", $datos["telfijo"], PDO::PARAM_STR);
		$stmt->bindParam(":telcelular", $datos["telcelular"], PDO::PARAM_STR);
		$stmt->bindParam(":whatsapp", $datos["whatsapp"], PDO::PARAM_STR);
		$stmt->bindParam(":telegram", $datos["telegram"], PDO::PARAM_STR);
		$stmt->bindParam(":instagram", $datos["instagram"], PDO::PARAM_STR);
		$stmt->bindParam(":facebook", $datos["facebook"], PDO::PARAM_STR);
		$stmt->bindParam(":linkedin", $datos["linkedin"], PDO::PARAM_STR);
		$stmt->bindParam(":youtube", $datos["youtube"], PDO::PARAM_STR);
		$stmt->bindParam(":tiktok", $datos["tiktok"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":nrocasa", $datos["nrocasa"], PDO::PARAM_STR);
		$stmt->bindParam(":barrio", $datos["barrio"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":depto", $datos["depto"], PDO::PARAM_STR);
		$stmt->bindParam(":tvivienda", $datos["tvivienda"], PDO::PARAM_STR);
		$stmt->bindParam(":tvotra", $datos["tvotra"], PDO::PARAM_STR);
		$stmt->bindParam(":tconvivencia", $datos["tconvivencia"], PDO::PARAM_STR);
		$stmt->bindParam(":tcotra", $datos["tcotra"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaingiglesia", $datos["fechaingiglesia"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaingfju", $datos["fechaingfju"], PDO::PARAM_STR);
		$stmt->bindParam(":pregbautaguas", $datos["pregbautaguas"], PDO::PARAM_STR);
		$stmt->bindParam(":fecbautaguas", $datos["fecbautaguas"], PDO::PARAM_STR);
		$stmt->bindParam(":mombautaguas", $datos["mombautaguas"], PDO::PARAM_STR);
		$stmt->bindParam(":obautaguas", $datos["obautaguas"], PDO::PARAM_STR);
		$stmt->bindParam(":pregbautEspirituSanto", $datos["pregbautEspirituSanto"], PDO::PARAM_STR);
		$stmt->bindParam(":fecbautEspSanto", $datos["fecbautEspSanto"], PDO::PARAM_STR);
		$stmt->bindParam(":expbautEspSanto", $datos["expbautEspSanto"], PDO::PARAM_STR);
		$stmt->bindParam(":actobra", $datos["actobra"], PDO::PARAM_STR);
		$stmt->bindParam(":tiempoobra", $datos["tiempoobra"], PDO::PARAM_STR);
		$stmt->bindParam(":servAltar", $datos["servAltar"], PDO::PARAM_STR);
		$stmt->bindParam(":compintellimen", $datos["compintellimen"], PDO::PARAM_STR);
		$stmt->bindParam(":tiempointelli", $datos["tiempointelli"], PDO::PARAM_STR);
		$stmt->bindParam(":probactual", $datos["probactual"], PDO::PARAM_STR);
		$stmt->bindParam(":probsup", $datos["probsup"], PDO::PARAM_STR);
		$stmt->bindParam(":probactualotro", $datos["probactualotro"], PDO::PARAM_STR);
		$stmt->bindParam(":psupotro", $datos["psupotro"], PDO::PARAM_STR);
		$stmt->bindParam(":eapartado", $datos["eapartado"], PDO::PARAM_STR);
		$stmt->bindParam(":porqueapart", $datos["porqueapart"], PDO::PARAM_STR);
		$stmt->bindParam(":fecapart", $datos["fecapart"], PDO::PARAM_STR);
		$stmt->bindParam(":encconDios", $datos["encconDios"], PDO::PARAM_STR);
		
		$stmt->bindParam(":proyjoven", $datos["proyjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":funproyjoven", $datos["funproyjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":nivproyjoven", $datos["nivproyjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":fecingproyjoven", $datos["fecingproyjoven"], PDO::PARAM_STR);

		$stmt->bindParam(":respjoven", $datos["respjoven"], PDO::PARAM_STR);


		$stmt->bindParam(":nivestudiojoven", $datos["nivestudiojoven"], PDO::PARAM_STR);
		$stmt->bindParam(":estestudiojoven", $datos["estestudiojoven"], PDO::PARAM_STR);
		$stmt->bindParam(":areaestjoven", $datos["areaestjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":tituloestjoven", $datos["tituloestjoven"], PDO::PARAM_STR);

		$stmt->bindParam(":trabactualjoven", $datos["trabactualjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":lugartrabjoven", $datos["lugartrabjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoinsttrabjoven", $datos["tipoinsttrabjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":alabtrabjoven", $datos["alabtrabjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":tipotrabjoven", $datos["tipotrabjoven"], PDO::PARAM_STR);

		$stmt->bindParam(":idiomauno", $datos["idiomauno"], PDO::PARAM_STR);
		$stmt->bindParam(":niveliduno", $datos["niveliduno"], PDO::PARAM_STR);
		$stmt->bindParam(":idiomados", $datos["idiomados"], PDO::PARAM_STR);
		$stmt->bindParam(":niveliddos", $datos["niveliddos"], PDO::PARAM_STR);
		$stmt->bindParam(":idiomatres", $datos["idiomatres"], PDO::PARAM_STR);
		$stmt->bindParam(":nivelidtres", $datos["nivelidtres"], PDO::PARAM_STR);

		$stmt->bindParam(":talentouno", $datos["talentouno"], PDO::PARAM_STR);
		$stmt->bindParam(":niveltaluno", $datos["niveltaluno"], PDO::PARAM_STR);
		$stmt->bindParam(":otrotalentouno", $datos["otrotalentouno"], PDO::PARAM_STR);
		$stmt->bindParam(":talentodos", $datos["talentodos"], PDO::PARAM_STR);
		$stmt->bindParam(":niveltaldos", $datos["niveltaldos"], PDO::PARAM_STR);
		$stmt->bindParam(":otrotalentodos", $datos["otrotalentodos"], PDO::PARAM_STR);
		$stmt->bindParam(":talentotres", $datos["talentotres"], PDO::PARAM_STR);
		$stmt->bindParam(":niveltaltres", $datos["niveltaltres"], PDO::PARAM_STR);
		$stmt->bindParam(":otrotalentotres", $datos["otrotalentotres"], PDO::PARAM_STR);
		
		$stmt->bindParam(":imagenantes", $datos["imagenantes"], PDO::PARAM_STR);
		$stmt->bindParam(":imagendespues", $datos["imagendespues"], PDO::PARAM_STR);
		$stmt->bindParam(":archivojoven", $datos["archivojoven"], PDO::PARAM_STR);

		$stmt->bindParam(":nacionalidadjoven", $datos["nacionalidadjoven"], PDO::PARAM_STR);
		$stmt->bindParam(":ascendenciajoven", $datos["ascendenciajoven"], PDO::PARAM_STR);
		$stmt->bindParam(":idiomamadre", $datos["idiomamadre"], PDO::PARAM_STR);
		$stmt->bindParam(":idiomaoriginario", $datos["idiomaoriginario"], PDO::PARAM_STR);
		
		$stmt->bindParam(":usuarioqueedito", $datos["usuarioqueedito"], PDO::PARAM_STR);
		
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function mdlEliminarJoven($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}
	/*=============================================
	ACTUALIZAR CLIENTE
	=============================================*/

	static public function mdlActualizarCliente($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}
}