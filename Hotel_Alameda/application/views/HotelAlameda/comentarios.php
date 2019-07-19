<!DOCTYPE HTML>
<html>
<head>
<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Costamar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?=base_url()?>css/flexslider.css" type="text/css" media="screen" />
<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>

<div class="banner-1">
<div class="container">
		<div class="header">
				<div class="logo">
					<a href="<?=base_url()?>index.php/HotelAlameda/index"><img src="<?=base_url()?>images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-16">
								<li><a href="<?=base_url()?>index.php/HotelAlameda/index" data-hover="INICIO">INICIO</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/habitaciones" data-hover="HABITACIONES">HABITACIONES</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/nosotros" data-hover="NOSOTROS">NOSOTROS</a></li>
								<li class="active"><a href="<?=base_url()?>index.php/HotelAlameda/comentarios" data-hover="COMENTARIOS">COMENTARIOS</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/contacto" data-hover="CONTACTO">CONTACTO</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/reservacion"><img src="<?=base_url()?>images/maleta.png" title="RESERVACIONES" class="maleta" /></a></li>	
									<div class="clearfix"> </div>
							</ul>
				</div>
						<div class="clearfix"> </div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
			</div>
		</div>
  </div>
<!-- header -->
<!-- destination -->	
<div class="contact">
		<div class="container">
		<div class="section group">	
			

						<div class="col-md-8 col span_2_of_3">
						  <div class="contact-form">
							  <h3>Deja tu comentario</h3>
								<form method="post" action="<?=base_url();?>index.php/HotelAlameda/guardarC">
									<div>
										<span><label>Comentario</label></span>
										<span><textarea name="comentario"> </textarea></span>
										</div>

									<div>
										<span><label>Nombre</label></span>
										<span><input name="nombreCl" type="text" class="textbox" required></span>
									</div>
									<div>
											<span><label>Apellidos</label></span>
											<span><input name="apellidoCl" type="text" class="textbox" required></span>
										</div>
									<div>
										<span><label>Correo</label></span>
										<span><input name="correoCl" type="text" class="textbox" required></span>
									</div>
									<div>
										 <span><label>Teléfono</label></span>
										<span><input name="telefonoCl" type="text" class="textbox" required></span>
									</div>
								   <div>
										   <span><input type="submit" class="mybutton" value="Enviar"></span>
								  </div>
								</form>
		
							</div>
						</div>	
					  </div>
				</div>				
			 </div>

<div class="about">
	<div class="container">
		<div class="clearfix"> </div>
		<div class="ourteam">
			<h3>Comentarios</h3>
			<?php foreach ($comPubl as $c):?>
      
      <input type="hidden" name="idComentario" value="<?=$c->idComentario;?>"><br>
        <div class="col-md-8 grid_1_of_4 images_1_of_4">
			<div class="conte">
				<div class="margen">
			<h6><?=$c->correoCl;?></h6>
                  <h3><?=$c->comentario;?></h3>
				</div>  
			</div>
        </div>
        <?php endforeach;?><br>
		</div>
    </div>
</div>
<!-- footer -->
<div class="footer">
		<div class="container">
			<p>© 2019 Todos los derechos reservados | Diseñado por </a></p>
			<div class="social">
				<ul>
					<li><a href="#"><i class="fb"></i></a></li>
					<li><a href="#"><i class="twt"></i></a></li>
					<li><a href="#"><i class="goop"></i></a></li>
					<li><a href="#"><i class="pp"></i></a></li>
						<div class="clearfix"> </div>
				</ul>
			</div>
			<h3>Teléfono : 01 447 690 1152</h3>
		</div>
	</div>
<!-- footer -->
</body>
</html>