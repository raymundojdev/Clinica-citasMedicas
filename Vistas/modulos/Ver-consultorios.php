<?php

if($_SESSION["rol"] != "Paciente"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}


?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Elija un Consultorio</h1>

	</section>

	<section class="content">
		
		<div class="box">
						

			<div class="box-body">

				<?php 

				$columna = null;
				$valor = null;

				$resultado = ConsultoriosC::VerConsultoriosC($columna, $valor);

				foreach ($resultado as $key => $value) {
					
					echo '<div class="col-lg-3" style="background-color: #86aad3; border: solid #f2f2f2;">
					
					<div class="small-box bd-aqua">
						<div class="inner">
						<h3>'.$value["nombre"].'</h3>';	

						$columna = "id_consultorio";
						$valor = $value["id"];

						$doctores = DoctoresC::VerDoctoresC($columna,$valor);

						foreach ($doctores as $key => $value) {
							echo'<a href="Doctor/'.$value["id"].'" style="color:black;"><p>'.$value["nombre"].' '.$value["apellido"].'</p></a><hr style="padding-top:2px; background-color:#f2f2f2;" >';
						}
						echo '</div>						
						
					</div>
				</div>';
				}

				 ?>						

			</div>

		</div>

	</section>

</div>


