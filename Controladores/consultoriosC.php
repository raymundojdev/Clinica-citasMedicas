<?php

class ConsultoriosC{

	//Crear consultorios
	public function CrearConsultorioC(){

		if(isset($_POST["consultorioN"])){

			$tablaBD = "consultorios";

			$consultorio = array("nombre"=>$_POST["consultorioN"]);

			$resultado = ConsultoriosM::CrearConsultorioM($tablaBD, $consultorio);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/Clinica/consultorios";
				</script>';

			}

		}

	}


	//Ver consultorios
	static public function VerConsultoriosC($columna, $valor){

		$tablaBD = "consultorios";

		$resultado = ConsultoriosM::VerConsultoriosM($tablaBD, $columna, $valor);

		return $resultado;

	}



	//Borrar Consultorios
	public function BorrarConsultorioC(){

		if(substr($_GET["url"], 13)){

			$tablaBD = "consultorios";

			$id = substr($_GET["url"], 13);

			$resultado = ConsultoriosM::BorrarConsultorioM($tablaBD, $id);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/Clinica/consultorios";
				</script>';

			}

		}

	}




	//Editar consultorios
	public function EditarConsultoriosC(){

		$tablaBD = "consultorios";

		$id = substr($_GET["url"], 4);

		$resultado = ConsultoriosM::EditarConsultoriosM($tablaBD, $id);

		echo '<div class="form-group">
						
				<h2>Nombre:</h2>

				<input type="text" class="form-control input-lg" name="consultorioE" value="'.$resultado["nombre"].'">
				<input type="hidden" class="form-control input-lg" name="Cid" value="'.$resultado["id"].'">

				<br>

				<button class="btn btn-success" type="submit">Guardar Cambios</button>

			</div>';

	}




	//Actualizar Consultorios
	public function ActualizarConsultoriosC(){

		if(isset($_POST["consultorioE"])){

			$tablaBD = "consultorios";

			$datosC = array("id"=>$_POST["Cid"], "nombre"=>$_POST["consultorioE"]);

			$resultado = ConsultoriosM::ActualizarConsultoriosM($tablaBD, $datosC);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/Clinica/consultorios";
				</script>';

			}

		}

	}



}