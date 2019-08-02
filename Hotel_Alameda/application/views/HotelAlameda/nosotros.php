<?php

/**
 * @category   Views
 * @package    nosotros.php 
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
								<li><a href="<?=base_url()?>index.php/HotelAlameda/habitaciones" data-hover="HABITACIONES">HABITACIONES</a></li>
								<li class="active"><a href="<?=base_url()?>index.php/HotelAlameda/nosotros" data-hover="NOSOTROS">NOSOTROS</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/comentarios" data-hover="COMENTARIOS">COMENTARIOS</a></li>
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
		
  </div>
  </div>
<!-- header -->
<!-- welcome -->
<div class="welcome">
		<div class="col-md-6 welcome-right">

			<div>
				<h3>Misión</h3>
				<h6>La excelencia en el servicio a los huéspedes, excediendo sus expectativas y 
					motivándolos a regresar, es el principal objetivo de Hotel Alameda Maravatío.
					Nuestro equipo genera un ambiente cálido y positivo, cuidando cada detalle 
					de la atención a los visitantes, y manteniendo un compromiso de calidad.</h6>
			</div>

			</div>
		<div class="col-md-6 welcome-right">
				<h3>Visión</h3>
				<h6>Ser el hotel de referencia en Maravatío, Michoacán por su estilo vanguardista 
					y la calidad de su servicio.  al mismo tiempo ser reconocidos, por la comodidad 
					de nuestras instalaciones, por la conveniencia de nuestra ubicación y por 
					nuestros programas sustentables y de apoyo a la comunidad.</h6>

		</div>
			<div class="clearfix"> </div>
	
</div>


<div class="welcome-right">
<div class="col-md-2 welcome-right">
</div>
		<div class="col-md-8 welcome-right">
			<h3>Valores</h3>
				
				<h6>Servicio: Cuando la calidad de nuestro servicio logra satisfacer y exceder lo 
					que anticipan nuestros huéspedes estamos cumpliendo con el objetivo de hacerles 
					sentir que son ellos la razón de ser de nuestro negocio. <br><br>

						Calidad: Prestamos atención a los requerimientos de cada huésped y servimos 
						con amabilidad.<br><br>
												
						Honestidad: Actuamos con coherencia y seriedad, respetando la verdad y la 
						justicia, siendo sinceros y cuidadosos con los demás.<br><br>
						
						Calidez: Ofrecemos un trato cuidado y amable, entregando nuestra mejor 
						actitud para hacer sentir al otro bienvenido y apreciado.<br><br>						
						
						Flexibilidad: Ejercemos la capacidad y disposición personal de adaptación 
						a diversas circunstancias y al cambio con adecuación e inteligencia emocional.<br><br>
												
						Compromiso: Somos conscientes de la importancia que tiene el cumplir con el 
						trabajo demostrando adhesión emocional hacia el trabajo, la empresa y el 
						servicio a los huéspedes.<br><br>					
						
						Actitud proactiva: Anticipamos los problemas para resolverlos y mostramos la 
						mejor predisposición para minimizar el impacto de las dificultades.<br><br>				
						
						Trabajo en equipo: Compartimos un propósito común, nos respetamos, colaboramos 
						y necesitamos mutuamente, con el objetivo de alcanzar resultados de calidad en 
						forma colectiva, siendo productivos, participativos y creativos.<br><br>
						
						Respeto: Reconocemos y consideramos a las demás personas por su individualidad, 
						apoyando la generación de vínculos, basados en la ética y el cuidado 
						interpersonal.<br><br></h6>
			</div>

			<div class="col-md-2 welcome-right">
			</div>

			<div class="clearfix"> </div>
	
</div>
<!-- welcome -->
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