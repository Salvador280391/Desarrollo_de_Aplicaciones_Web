<?php

/**
 * @category   Views
 * @package    reservacion.php 
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
<?php
if ($this->session->userdata('login')==FALSE) {
  redirect('Usuario/login');
}else if($this->session->userdata('privilegio')==2) {
  redirect('Admin');
}else{?>
<!DOCTYPE HTML>
<html>
<head>
<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>css/simple-sidebar.css" rel="stylesheet">
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
<script type="text/javascript">
function clear_cart() {
    var result = confirm('¿Deseas quitar todas las reservaciones de esta sección?');

    if (result) {
        window.location = "<?php echo base_url(); ?>index.php/HotelAlameda/remove/all";
    } else {
        return false; // cancel button
    }
}
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
<!-- header -->
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

</div>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<div class="about">
		<div class="container">
			<div class="clearfix"> </div>
					<div class="ourteam">
						<h3>Reservaciones</h3>
                            <div id='content'>
                  
                            <div id="text">
                                <?php $cart_check = $this->cart->contents();

                                // If cart is empty, this will show below message.
                                if(empty($cart_check)) {
                                echo 'Para agregar un reservación haz clic en el botón "Agregar reservación"';
                                } ?>
                            </div>

                            <table class="table">
                                <?php
                                // All values of cart store in "$cart".
                                if ($cart = $this->cart->contents()): ?>
                                <thead>
                                    <tr id= "main_heading">
                                    <td class="warning">Habitación</td>
                                    <td class="warning">Descripción</td>
                                    <td class="warning">Precio</td>
                                    <td class="warning">Quitar Reservación</td>
                                    </tr>
                                    </thead>    
                                <?php
                                    // Create form and send all values in "carrito/update_cart" function.
                                    echo form_open('HotelAlameda/update_cart');
                                    $grand_total = 0;
                                    $i = 1;

                                    foreach ($cart as $item):
                                    // echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                    // Will produce the following output.
                                    // <input type="hidden" name="cart[1][id]" value="1" />

                                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                                ?>
                                <tbody>
                                <tr>
                                
                                <td><?php echo $i++; ?></td>
                              
                                
                                <td><?php echo $item['name']; ?></td>
                                
                                <td>$ <?php echo number_format($item['price'], 2); ?></td>

                                <?php $grand_total = $grand_total + $item['price']; ?>
                                
                            <td>
                            <?php
                            // cancle image.
                            $path = "<img src='".base_url()."images/quitar.png' width='25px' height='20px'>";
                            echo anchor('HotelAlameda/remove/' . $item['rowid'], $path); ?>
                            </td>
                            <?php endforeach; ?>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                            <td><b>Order Total: $<?php
                            echo number_format($grand_total, 2); ?></b></td>

                            <?php // "clear cart" button call javascript confirmation message ?>
                            <td colspan="5" align="right"><input  class="btn btn-danger" type="button" value="Limpiar Reservaciones" onclick="clear_cart()">

                            <!-- "Place order button" on click send "billing" controller -->
                            <input class="btn btn-info" name="btnDownload" type="submit" value="Imprimir Comprobante"></td>
                            </tr>
                            </tbody>
                            <?php endif; ?>
                            </table>
                
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

  <script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<!-- footer -->
</body>
</html>

<?php } ?>