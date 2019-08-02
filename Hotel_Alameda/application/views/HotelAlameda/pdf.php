<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>
<body>

<form action="<?php echo base_url();?>index.php/HotelAlameda/descargar" method="POST">

    <table class="table">
        <?php if ($cart = $this->cart->contents()): ?>

    <div>
	    <span><label>Nombre del Cliente</label> <label>Nombre del Cliente</label></span>
	</div>


                            
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
                            echo number_format($grand_total, 2); ?></b></td></tr>
                            </tbody>
                            <input type="submit" name="btnDownload">
                            <?php endif; ?>
                            </table>











</form>
    
</body>
</html>