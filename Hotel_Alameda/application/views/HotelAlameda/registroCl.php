<?php

/**
 * @category   Views
 * @package    registroCl.php 
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



  <div class="about">
	<div class="container">
		<div class="clearfix"> </div>
		<div class="ourteam">
			<h3>Registro de Clientes</h3>
			<div class="section group">

<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
            <div class="col-md-8">
                <div class="table-label">
                    <div class="clear"></div>
                </div>
                <div class="form-container table-container">
				<?= form_open() ?>
                	<div class="form-group nombreU_form_group row">
					<br>
                            <label class="col-sm-3 control-label">
                                Nombre<span class="required">*</span></label>
                    	<div class="col-sm-9">
                    	<input id="field-nombreU" class="form-control" name="nombreU" 
                        type="text" value="" maxlength="70"></div>
                     </div> <br>

                    <div class="form-group apellidoU_form_group row">
                        <label class="col-sm-3 control-label">
                            Apellidos<span class="required">*</span></label>
                        <div class="col-sm-9">
                        <input id="field-apellidoU" class="form-control" name="apellidoU" type="text" value="" maxlength="70">                            </div>
                    </div><br>

                    <div class="form-group telefonoU_form_group row">
                        <label class="col-sm-3 control-label">
                            Teléfono<span class="required">*</span></label>
                        <div class="col-sm-9">
                    	<input id="field-telefonoU" class="form-control" name="telefonoU" type="text" value="" maxlength="30">                            </div>
                    </div><br>

                    <div class="form-group correoU_form_group row">
                        <label class="col-sm-3 control-label">
                        Correo</label>
                    	<div class="col-sm-9">
                        <input id="field-correoU" class="form-control" name="correoU" type="text" value="" maxlength="100">                            </div>
                    </div>

					<div class="form-group correoU_form_group row">
                        <label for="password" class="col-sm-3 control-label">
                        Contraseña</label>
                    	<div class="col-sm-9">
                        <input id="field-correoU" class="form-control" id="password" name="password" type="password" value="" maxlength="100">                            </div>
                    </div><br>

					<div class="form-group correoU_form_group row">
                        <label for="password_confirm" class="col-sm-3 control-label">
                        Confirma Contraseña</label>
                    	<div class="col-sm-9">
                        <input id="field-correoU" class="form-control" id="password_confirm" name="password_confirm" type="password" value="" maxlength="100">                            </div>
                    </div><br>

                    <div>
							<span><input type="submit" onclick="tratamiento()" class="mybutton" value="Entrar"></span>
					</div><br>

                    </div>
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

</body>
</html>