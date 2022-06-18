<?php namespace es\hundirLaFlota;
	require('includes/config.php');
	/*
	*   Función que genera el html de la noticia que se muestra en el cuadro de noticias destacadas en noticias_principal
	*/	
	$tituloPagina = 'Gamers Den';
	$contenidoPrincipal = <<<EOS
		<div class="contenedor">
			<section class = "content">
				<article class="container">
					<h1 class="text-center">Página principal</h1>
					<p class="text-center"> Bienvenido a la unidad de mando comandante, por favor acreditese antes de pasar al area de batalla</p>
				</article>
				<article class="container">
					<h2 href ="login.php" class="text-center">Iniciar Sesion</h2>
					<h2 class="text-center" href ="registro.php">Registrarse</h2>
					</div>
				</article>
			</section>

		</div>
	EOS;
	include 'includes/vistas/plantillas/plantilla.php';
?>
