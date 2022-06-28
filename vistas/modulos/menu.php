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

			</li>';

		}

//		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){
//
//			echo '<li>
//
//				<a href="categorias">
//
//					<i class="fa fa-th"></i>
//					<span>Categorías</span>
//
//				</a>
//
//			</li>
//
//			<li>
//
//				<a href="productos">
//
//					<i class="fa fa-product-hunt"></i>
//					<span>Archivos</span>
//
//				</a>
//
//			</li>';
//
//		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Analista" || $_SESSION["perfil"] == "Especial" ){

			echo '<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Lecciones</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Analista"){

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Gestión</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="http://142.93.53.141:41062/www/HELPACT/cute">
							
							<i class="fa fa-circle-o"></i>
							<span>Archivos</span>

						</a>

					</li>

					<li>

						<a href="categorias">
							
							<i class="fa fa-circle-o"></i>
							<span>Categoria</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Indicadores</span>

						</a>

					</li>';

					}

				

				echo '</ul>

			</li>';

		}

		?>

		</ul>

	 </section>

</aside>