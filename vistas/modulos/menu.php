<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>
			<li>

				<a href="iglesias">

					<i class="fa fa-heart"></i>
					<span>Iglesias</span>

				</a>

			</li>
			<li>

				<a href="regjovenes">

					<i class="fa fa-th"></i>
					<span>Registro de Jovenes</span>

				</a>

			</li>
			';

		}

		if( $_SESSION["perfil"] == "Asistente"){

			echo '
			<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="regjovenes">

					<i class="fa fa-th"></i>
					<span>Registro de Jovenes</span>

				</a>

			</li>

			';

		}

		// if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Asistente"){

			
		// 			if($_SESSION["perfil"] == "Administrador"){

		// 			echo '<li>

		// 				<a href="reportes">
							
		// 					<i class="fa fa-circle-o"></i>
		// 					<span>Reporte de jóvenes</span>

		// 				</a>

		// 			</li>';

		// 			}

				

		// 		echo '</ul>

		// 	</li>';

		// }

		?>

		</ul>

	 </section>

</aside>