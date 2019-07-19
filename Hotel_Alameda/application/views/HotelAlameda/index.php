<!--
	Salvador Toral Naranjo 
	lunes 08 de julio del 2019
----Se agregarón 2 imagenes más a la area del carrusel---
----El área de noticias se modifico ahora las noticias se mostraran de manera dinamica, obteniendo 
	la informacion que se muestra directamente de la base de datos---
 -->

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

		<div class="header">
				<div class="logo">
					<a href="<?=base_url()?>index.php/HotelAlameda/index"><img src="<?=base_url()?>images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-16">
								<li class="active"><a href="<?=base_url()?>index.php/HotelAlameda/index" data-hover="INICIO">INICIO</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/habitaciones" data-hover="HABITACIONES">HABITACIONES</a></li>
								<li><a href="<?=base_url()?>index.php/HotelAlameda/nosotros" data-hover="NOSOTROS">NOSOTROS</a></li>
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


<!-- header -->
<div class="banner">
	<div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li>
	          <img src="<?=base_url()?>images/banner01.jpg" class="img-responsive" alt="">
	        </li>
	        <li>
	          <img src="<?=base_url()?>images/banner02.jpg" class="img-responsive" alt="">
	        </li>
	        <li>
	          <img src="<?=base_url()?>images/banner03.jpg" class="img-responsive" alt="">
	        </li>
			<li>
	          <img src="<?=base_url()?>images/banner04.jpg" class="img-responsive" alt="">
	        </li>
			<li>
	          <img src="<?=base_url()?>images/banner05.jpg" class="img-responsive" alt="">
	        </li>
	      </ul>
	  </div>
	  
  </div>
<!-- header -->

<!-- welcome -->
	<div class="welcome">
			<div class="col-md-6 welcome-left">
					<img src="<?=base_url()?>images/right.jpg" class="img-responsive" alt="" />
				<div class="welcome-lefttop">	
						<h5>Hotel Alameda</h5>
						<li><span>01.</span>Hotel familiar en el centro de Maravatío </li>
						<li><span>02.</span>Limpieza y calidad al mejor precio! </li>
						<li><span>03.</span>No se pierdan nuestras promociones! </li>
						<li><span>04.</span>ACEPTAMOS TARJETAS DE CRÉDITO! </li>
						<div class="button">
							<a href="<?=base_url()?>index.php/HotelAlameda/habitaciones" class="btn  btn-1c btn1 btn-1d">Habitaciones</a>	
						</div>
				</div>
			</div>
			<div class="col-md-6 welcome-right">
				<h3>Altruismo</h3>
				<h6>Actualmente donamos el 15% de nuestras utilidades de cada mes a la Asociación "@Vivir Mejor Mex" para apoyar personas necesitadas, deportistas, eventos de salud, educación y cultura, si sabes de alguien que necesite ayuda contactalos!</h6>
				
			</div>
				<div class="clearfix"> </div>
		
	</div>
<!-- welcome -->

<!-- midban-->
	<div class="vero">
			<div class="container">
					<section class="slider">	
						<div class="flexslider">
							<ul class="slides">
							<?php foreach ($noticia as $n):?>
				<input type="hidden" name="idNoticia" value="<?=$n->idNoticia;?>">	
								<li>
									<div class="vero-top">
										<h2><font size=20 color="white"><?=$n->titulo;?></font><br></h2>
										<div class="col-md-6 vero-1">
											<p><?=$n->noticia;?></p>
										</div>

										<div class="col-md-6 vero-2">
										<img src="<?=base_url()?>assets/uploads/files/<?=$n->imagenN;?>" class="img-responsive1" alt="">
										</div>
										<div class="clearfix"> </div>
										<div class="button-1">
												<a class="read-more" href="#">Leer maś</a>
										</div>
								<?php endforeach;?>
							</ul>
						</div>
					</section>
						<!-- FlexSlider -->
							  <script defer src="<?=base_url()?>js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->
			
		</div>
	</div>
<!-- midban-->
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
<footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a target="_blank">Creative Tim</a> EliteTeam
          </div>
        </div>
      </footer>


  <!--   Core JS Files   -->
  <script src="<?=base_url()?>assets/js/core/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/core/popper.min.js"></script>
  <script src="<?=base_url()?>assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?=base_url()?>assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?=base_url()?>assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?=base_url()?>assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?=base_url()?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?=base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?=base_url()?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?=base_url()?>assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?=base_url()?>assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?=base_url()?>assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?=base_url()?>assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?=base_url()?>assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url()?>assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?=base_url()?>assets/demo/demo.js"></script>

</body>

</html>
