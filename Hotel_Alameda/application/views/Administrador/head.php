<?php
if ($this->session->userdata('login')==FALSE) {
  redirect('Usuario/login');
}else if($this->session->userdata('privilegio')==1) {
  redirect('HotelAlameda');
}else if($this->session->userdata('privilegio')==2){?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administrador Hotel Alameda -- Inicio</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Hotel Alameda </div>
      <div class="list-group list-group-flush">
        <a href="<?=base_url()?>index.php/Admin" class="list-group-item list-group-item-action bg-light">Inicio</a>
        <a href="<?=base_url()?>index.php/Reservacion" class="list-group-item list-group-item-action bg-light">Reservaciones</a>
        <a href="<?=base_url()?>index.php/Habitacion" class="list-group-item list-group-item-action bg-light">Habitaciones</a>
        <a href="<?=base_url()?>index.php/Usuario" class="list-group-item list-group-item-action bg-light">Usuarios</a>
        <a href="<?=base_url()?>index.php/Noticia" class="list-group-item list-group-item-action bg-light">Noticias</a>
        <a href="<?=base_url()?>index.php/Comentario" class="list-group-item list-group-item-action bg-light">Comentarios</a>
        <a href="<?=base_url()?>index.php/Mensaje" class="list-group-item list-group-item-action bg-light">Mensajes</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Ocultar Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?=base_url()?>index.php/Admin">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>index.php/HotelAlameda">FrondEnd</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuario
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?=base_url();?>index.php/Usuario/cuenta"><?php echo $_SESSION["nombreU"]; ?></a>
                <a class="dropdown-item" href="<?=base_url();?>index.php/Usuario/cuenta">Privilegio<?php echo $_SESSION["privilegio"]; ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=base_url();?>index.php/Usuario/exit">Cerrar Secion</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <?php }else{
  redirect('HotelAlameda');
}  ?>