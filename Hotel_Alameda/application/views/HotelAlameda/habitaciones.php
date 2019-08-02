<?php

/**
 * @category   Views
 * @package    habitacion.php 
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
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
								<li class="active"><a href="<?=base_url()?>index.php/HotelAlameda/habitaciones" data-hover="HABITACIONES">HABITACIONES</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/nosotros" data-hover="NOSOTROS">NOSOTROS</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/comentarios" data-hover="COMENTARIOS">COMENTARIOS</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/contacto" data-hover="CONTACTO">CONTACTO</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/reservacion"><img src="<?=base_url()?>images/maleta.png" title="RESERVACIONES" class="maleta" /></a></li>
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
<?php if ($this->session->userdata('login')==true) {?>
<div class="header">
  <div class="head-1">
        <div  class="col-md-6 welcome-left">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuario
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"><?php echo $_SESSION["nombreU"]; ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=base_url();?>index.php/Usuario/exitCl">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </div>
        </div>
        </div>
<?php }else{ ?>
	<div class="header">
  	<div class="head-1">
        <div  class="col-md-6 welcome-left">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuario
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?=base_url();?>index.php/Usuario/login">Iniciar Sesión</a>
              </div>
            </li>
          </ul>
        </div>
        </div>
        </div>
	<?php } ?>
</div>
<div class="about">
	<div class="container">
		<div class="clearfix"> </div>
		<div class="ourteam">
			<h3>Habitaciones</h3>
			<div class="section group">
				<?php if ($this->session->userdata('login')==true) {
				// "$products" send from "shopping" controller,its stores all product which available in database.
				foreach ($habitacion as $product) {
					$id = $product['numHabitacion'];
					$name = $product['descripcionH'];
					$price = $product['precio'];
					$img = $product['imagenH'];
					$can = $product['cantPersonas'];
				?>
					<div class="col-md-3 grid_1_of_4 images_1_of_4">
					<div>
						<img src="<?php echo base_url() . 'assets/uploads/files/'.$img ?>"  class="img-habit">	
						<h3>Habitación <?php echo $id; ?></h3>
						<p><?php echo $name; ?><br>
							<?php echo $can; ?> Personas<br>
							Precio: $<?php echo $price; ?>.00</p><br>
						</div>
						<div>
							<?php
							echo form_open('HotelAlameda/add');
							echo form_hidden('id', $id);
							echo form_hidden('name', $name);
							echo form_hidden('price', $price);
							echo form_hidden('img', $img);
						
								$btn = array(
								'class' => 'fg-button teal',
								'value' => 'Agregar reservación',
								'name' => 'action'
								);
								echo form_submit($btn);
							echo form_close();
							?>
							</div>
							</div>
				<?php } 
					  }else{ ?>
						<div class="alert alert-info">
  							<strong>Importante!</strong> Si deseas realizar una compra debes iniciar sesión.
						</div>
						<div>
						<a href="<?=base_url();?>index.php/Usuario/login" class="btn btn-info">iniciar sesión</a>
						</div><br><br>
				<?php
				// "$products" send from "shopping" controller,its stores all product which available in database.
				foreach ($habitacion as $product) {
					$id = $product['numHabitacion'];
					$name = $product['descripcionH'];
					$price = $product['precio'];
					$img = $product['imagenH'];
					$can = $product['cantPersonas'];
				?>
					<div class="col-md-3 grid_1_of_4 images_1_of_4">
						<img src="<?php echo base_url() . 'assets/uploads/files/'.$img ?>"  class="img-habit">	
						<h3>Habitación <?php echo $id; ?></h3>
						<p><?php echo $name; ?><br>
							<?php echo $can; ?> Personas<br>
							Precio: $<?php echo $price; ?>.00<br><br>							
							</p><br>
		
						</div>
				<?php } 
					  } ?>		
			</div>
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
<script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>