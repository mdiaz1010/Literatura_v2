<div class=" text-center"  style="background-image: url('<?=base_url("publico/images/contacto.jpg")?>');">
	<div class="row bredcrumb-inner">
		<div class="col-sm-12  align-self-center">
			
			<ul class="" style="color:#000000">
				<li><a href="<?=base_url('Welcome/index')?>" class="bread_link" style="color:#000000">Inicio</a></li>
				<li style="color:#000000">Trabaja con nosotros</li>
			</ul>
		</div>
	</div>
</div>

<!-- TESTIMONIAL SECTION -->
<section class="bg-sand hero-block home-about">
	<div class="container">
		<div class="row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="section-title title-ex1 text-center">
					<h2 class="title-text">TRABAJA CON NOSOTROS</h2>
				</div><br>
			</div>
			<div class="col-md-2"></div>
		</div>
		<!-- section title ends -->
		<div class="row">
			<!-- Left column -->
			<div class="col-md-5 col-lg-4">
				<div id="accordion" class="th-accordions" data-children=".item">
					<div class="item">
						<a data-toggle="collapse" class="collapse-bar" data-parent="#accordion" href="#accordion1" aria-expanded="true" aria-controls="accordion1">
							<i class="fa fa-database" aria-hidden="true"></i> Proveedor
						</a>
						<div id="accordion1" class="collapse show tab-pane" role="tabpanel">
							<p class="">
								Únete como uno de nuestros proveedores.
							</p>
						</div>
					</div>
					<div class="item">
						<a data-toggle="collapse" class="collapse-bar" data-parent="#accordion" href="#accordion2" aria-expanded="false" aria-controls="accordion2">
							<i class="fa fa-desktop" aria-hidden="true"></i> Socios
						</a>
						<div id="accordion2" class="collapse tab-pane" role="tabpanel">
							<p class="">
								Sé parte de nuestro equipo para los diversos proyectos que tenemos.
							</p>
						</div>
					</div>
				</div>
			</div><!-- Left column -->

			<!-- Right column -->
			<div class="col-md-7 col-lg-8">
			<div id="envio"></div>
				<!-- Contact Form Starts-->
				<form  name="enviarFormulario" id="enviarFormulario" method="post"> 
					<div class="row ">
						<div class="form-group col-md-3">
						  <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
						</div>
						<div class="form-group col-md-3">
						  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
						</div>						
						<div class="form-group col-md-6">
						  <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
						</div>
						<div class="form-group col-md-12">
						   <textarea class="form-control" id="men" name="men" rows="6" placeholder="Mensaje" required></textarea>
						</div>
					</div>
					<div class="d-flex">
				  		<button type="button" name="btnEnviar" id="btnEnviar" class="btn btn-lg btn-primary ml-auto">Postula Aquí</button>
					</div>
				</form><!-- Contact Form ends-->
			</div><!-- Right column -->
		</div>
	</div>
</section>

<script type="text/javascript" src="<?= base_url('publico/js/formulario.js')?>"></script>