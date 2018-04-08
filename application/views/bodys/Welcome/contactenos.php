<div class=" text-center"  style="

								position: relative;        
								max-width:100%;height:auto;
								background-size: 100% 65%;       								
								margin-left: auto;      
								margin-right: auto;       
								background-attachment: fixed; 
								background-repeat: no-repeat; 
								background-image: url('<?=base_url("publico/images/contactenos.jpg")?>');" data-bgposition="center center"  data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
	<div class="row bredcrumb-inner">
		<div class="col-sm-12  align-self-center">
		<!--	
			<ul class="" style="color:#f44336">
				<li><a href="<?=base_url('Welcome/index')?>" class="bread_link" style="color:#f44336">Inicio</a></li>
				<li style="color:#f44336">Nosotros</li>
			</ul>
		-->		
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
					<h2 class="title-text">CONTÁCTENOS</h2>

				</div><br>
			</div>
			<div class="col-md-2"></div>
		</div>

		<div class="row">
			<!-- Left column -->
			<div class="col-md-5 col-lg-4">
				<div class="media contact-media">
					<div class="icon icon-circle">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						Av 28 de Julio 1235 <br>
						Miraflores
					</div>
				</div>
				<div class="media contact-media">
					<div class="icon icon-circle">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="media-body">
					940 369 911<br>
					965 646 795	
					</div>
				</div>
				<div class="media contact-media">
					<div class="icon icon-circle">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						info@papacorrectores.com <br>
						contacto@papacorrectores.com
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
				  		<button type="button" name="btnEnviar" id="btnEnviar" class="btn btn-lg btn-primary ml-auto">Enviar Mensaje</button>
					</div>
				</form><!-- Contact Form ends-->
			</div><!-- Right column -->
		</div>
	</div>
</section>


<!-- Map area -->
<script type="text/javascript" src="<?= base_url('publico/js/formulario.js')?>"></script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.79588102942523!2d-77.02034824697452!3d-12.130337157549391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b7fd66f13bc3%3A0xacc71f8b29a1b11!2sAv+28+de+Julio+1235%2C+Miraflores+15047!5e0!3m2!1ses!2spe!4v1520209062578" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
<!-- Map area Ends -->