<?php get_header(); ?>

<!-- Slider Portada-->
	<div id="carousel-index" class="carousel slide carousel-fade" data-ride="carousel" data-interval="15000">
		<div class="carousel-inner" id="galeria">
			<div class="carousel-item active">
				<div class="container-portada container-portada1" style="background-image: url(img/foto/1.jpg);">
					<div class="degradado"></div>
				</div>
			</div>

			<script>
				var imagenes = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
				var galeria = document.getElementById('galeria');

				for (imagen of imagenes) {
					galeria.innerHTML += `
					<div class="carousel-item">
						<div class="container-portada container-portada2" style="background-image: url(img/foto/${imagen}.jpg);">
							<div class="degradado"></div>
						</div>
					</div>
				`
				}
			</script>
		</div>
	</div>



	<nav class="fixed-bottom">
		<div class="navegacion mt-2">
			<ul class="container d-lg-flex justify-content-lg-around p-2 align-items-center">
				<li id="btn-servicios">
					<a class="d-flex justify-content-center align-items-center" href="#" data-toggle="modal"
						data-target="#en-construccion">
						<div class="text-center">
							<img class="m-auto" src="img/PNG/servicios.png" alt="servicios">
							<h3 class="text-center text-naranja mb-0 mt-1">SERVICIOS</h3>
						</div>
					</a>
				</li>
				<li id="btn-propietarios">
					<a class="d-flex justify-content-center align-items-center" href="propietarios.html">
						<div class="text-center">
							<img class="m-auto" src="img/PNG/propietarios.png" alt="propietarios">
							<h3 class="text-center text-naranja mb-0 mt-1">PROPIETARIOS</h3>
						</div>
					</a>
				</li>
				<li id="btn-arrendatarios">
					<a class="d-flex justify-content-center align-items-center" href="arrendatario.html">
						<div class="text-center">
							<img class="m-auto" src="img/PNG/arrendatarios.png" alt="arrendatario">
							<h3 class="text-center text-naranja mb-0 mt-1">ARRENDATARIOS</h3>
						</div>
					</a>
				</li>
				<li id="btn-inmuebles">
					<a class="d-flex justify-content-center align-items-center relative" target="_blank"
						href="https://www.ciencuadras.com/inmobiliaria/torres-y-cuadros-asociados-sas-8394">
						<div class="text-center">
							<img class="m-auto" id="inmuebles-nav" src="img/PNG/inmuebles.png" alt="inmuebles">
							<h3 id="inmuebles-text" class="text-center text-naranja mb-0 font-weight-bold mt-1">
								INMUEBLES</h3>
						</div>
					</a>
					<div class="btn-emergente btn-emergente0" target="_blank">
						<h3 class="text-center text-naranja text-white mb-0 mt-1 w-100">En alianza con</h3>
						<img class="m-auto" src="img/logo/logo-ciencuadras-blanco.png" alt="Ciencuadras">
					</div>
				</li>
				<li id="btn-mantenimientos">
					<a class="d-flex justify-content-center align-items-center" href="preguntas-frecuentes.html">
						<div class="text-center">
							<img class="m-auto" src="img/PNG/mantenimiento.png" alt="mantenimiento">
							<h3 class="text-center text-naranja mb-0 mt-1">PREGUNTAS</h3>
						</div>
						<div class="btn-emergente btn-emergente0 btn-emergente-pr" target="_blank">
								<h3 class="text-center text-white mb-0 mt-1 h5">PREGUNTAS FRECUENTES</h3>
							</div>
					</a>
				</li>
				<li id="btn-pse">
					<a class="d-flex justify-content-center align-items-center"
						href="https://www.e-collect.com/customers/Torresycuadros.htm" target="_blank">
						<div class="text-center">
							<img class="m-auto" src="img/PNG/pagos-pse.png" alt="pagos PSE">
							<h3 class="text-center text-naranja mb-0 mt-1">PAGOS PSE</h3>
						</div>
					</a>
				</li>
				<li id="btn-empleados">
					<a class="d-flex justify-content-center align-items-center" href="#">
						<div class="text-center">
							<img class="m-auto" src="img/PNG/empleados.png" alt="empleados">
							<h3 class="text-center text-naranja mb-0 mt-1">EMPLEADOS</h3>
						</div>
					</a>
					<a class="d-flex justify-content-center align-items-center btn-emergente btn-emergente1"
						href="empleados.html">
						<div class="text-center">
							<img class="m-auto" src="img/PNG/crm.png" alt="empleados">
							<h3 class="text-center text-naranja text-white mb-0 mt-1">CRM</h3>
						</div>
					</a>
					<a class="d-flex justify-content-center align-items-center btn-emergente btn-emergente2"
						href="https://portalco.net2phoneoffice.com/" target="_blank">
						<div class="text-center">
							<img class="m-auto" src="img/PNG/pbx.png" alt="empleados">
							<h3 class="text-center text-naranja text-white mb-0 mt-1">PBX</h3>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</nav>



	<!-- Mensaje de en construccion -->
	<div class="modal fade" id="en-construccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-notify modal-info" role="document">
			<!--Content-->
			<div class="modal-content">
				<!--Header-->
				<div class="modal-header warning-color-dark">
					<p class="heading lead">Sitio en construccion</p>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" class="white-text">&times;</span>
					</button>
				</div>

				<!--Body-->
				<div class="modal-body">
					<div class="text-center">
						<i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
						Lo sentimos, esta opcion aun se encuentra en construccion
					</div>
				</div>

				<!--Footer-->
				<div class="modal-footer justify-content-center">

					<a class="btn btn-outline-warning waves-effect" data-dismiss="modal">Cerrar</a>
				</div>
			</div>
			<!--/.Content-->
		</div>
	</div>
	<!-- Mensaje de en construccion-->

	<?php get_footer(); ?>