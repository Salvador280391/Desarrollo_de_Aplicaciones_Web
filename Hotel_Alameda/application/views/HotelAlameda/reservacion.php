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

                            <table id="table" border="0" cellpadding="5px" cellspacing="1px">
                                <?php
                                // All values of cart store in "$cart".
                                if ($cart = $this->cart->contents()): ?>
                                    <tr id= "main_heading">
                                    <td>Habitación</td>
                                    <td>Descripción</td>
                                    <td>Precio</td>
                                    <td>Cantidad</td>
                                    <td>Existencia</td>
                                    <td>Quitar Reservación</td>
                                    </tr>
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
                                <tr>
                                <td>
                                    <?php echo $i++; ?>
                                </td>
                                <td>
                                    <?php echo $item['name']; ?>
                                </td>
                                <td>
                                    $ <?php echo number_format($item['price'], 2); ?>
                                </td>
                                <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                            <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                            $ <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>

                            <?php
                            // cancle image.
                            $path = "<img src='".base_url()."images/quitar.png' width='25px' height='20px'>";
                            echo anchor('HotelAlameda/remove/' . $item['rowid'], $path); ?>
                            </td>
                            <?php endforeach; ?>
                            </tr>
                            <tr>
                            <td><b>Order Total: $<?php

                            //Grand Total.
                            echo number_format($grand_total, 2); ?></b></td>

                            <?php // "clear cart" button call javascript confirmation message ?>
                            <td colspan="5" align="right"><input  class ='fg-button teal' type="button" value="Limpiar Reservaciones" onclick="clear_cart()">

                            <?php //submit button. ?>
                            <input class ='fg-button teal'  type="submit" value="Actualizar Reservaciones">
                            <?php echo form_close(); ?>

                            <!-- "Place order button" on click send "billing" controller -->
                            <input class ='fg-button teal' type="button" value="Imprimir Comprobante" onclick="window.location = 'HotelAlameda/billing_view'"></td>
                            </tr>
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
<!-- footer -->
</body>
</html>