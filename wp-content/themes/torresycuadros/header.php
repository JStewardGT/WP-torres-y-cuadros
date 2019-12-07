<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/svg" sizes="96x96" href="img/logo/edificio_naranja.png">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>TORRES &amp; CUADROS</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<nav class="navbar navbar-expand-xl navbar-light bg-white fixed-top">
			<div class="navbar-brand mr-0" href="index.html">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="img/logo/Imagen1.png" alt="Torres y cuadros" class="mb-xs-1"></a>
				<br><a class="text-dark font-weight-bold" href="tel:0317943643">PBX: 7 943 643 <i class="fas fa-phone"></i></a>
			</div>
			<div class="contacto pl-2 font-weight-bold">
				<h3 class="text-dark mb-0">Inmobiliaria</h3>
				<p class="text-dark mb-0">CR 27 No 53 - 61 OF 504 BOGOTÁ</p>
				<p class="text-dark mb-0">CL 3D No 14 - 51 OF 303 ZIPAQUIRÁ</p>
			</div>
			<button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#nav-superior"
				aria-controls="nav-superior" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
        wp_nav_menu( array(
            'theme_location'    => 'Menu-principal',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-end',
            'container_id'      => 'nav-superior',
            'menu_class'        => 'nav navbar-nav text-center',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
		</nav>
	</header>