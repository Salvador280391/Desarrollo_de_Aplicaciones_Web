<?php

/**
 * @category   Views
 * @package    registrar.php 
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
}else if($this->session->userdata('privilegio')==1) {
redirect('HotelAlameda');
}else if($this->session->userdata('privilegio')==2){?>
<head>
<script> alert("El campo nombre esta vacio") return 0; </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administrador Hotel Alameda -- Nuevo Usuario</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/Hotel_Alameda/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://localhost/Hotel_Alameda/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Hotel Alameda </div>
      <div class="list-group list-group-flush">
        <a href="http://localhost/Hotel_Alameda/index.php/Admin" class="list-group-item list-group-item-action bg-light">Inicio</a>
        <a href="http://localhost/Hotel_Alameda/index.php/Reservacion" class="list-group-item list-group-item-action bg-light">Reservaciones</a>
        <a href="http://localhost/Hotel_Alameda/index.php/Habitacion" class="list-group-item list-group-item-action bg-light">Habitaciones</a>
        <a href="http://localhost/Hotel_Alameda/index.php/Usuario" class="list-group-item list-group-item-action bg-light">Usuarios</a>
        <a href="http://localhost/Hotel_Alameda/index.php/Cliente" class="list-group-item list-group-item-action bg-light">Clientes</a>
        <a href="http://localhost/Hotel_Alameda/index.php/Noticia" class="list-group-item list-group-item-action bg-light">Noticias</a>
        <a href="http://localhost/Hotel_Alameda/index.php/Comentario" class="list-group-item list-group-item-action bg-light">Comentarios</a>
        <a href="http://localhost/Hotel_Alameda/index.php/Mensaje" class="list-group-item list-group-item-action bg-light">Mensajes</a>
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
              <a class="nav-link" href="http://localhost/Hotel_Alameda/index.php/Admin">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Hotel_Alameda/index.php/HotelAlameda">FrondEnd</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuario
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://localhost/Hotel_Alameda/index.php/Usuario/cuenta"><?php echo $_SESSION["nombreU"]; ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="http://localhost/Hotel_Alameda/index.php/Usuario/exit">Cerrar Secion</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
          <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/elusive-icons/css/elusive-icons.min.css">
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/common.css">
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/general.css">
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/add-edit-form.css">
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/main.css">
          
      <div class="container-fluid">

      <script type="text/javascript">
    var csrf_cookie_name = '';
</script><div class="crud-form" data-unique-hash="df8dd2595346a382fe4bf6c4f9870b8b">
    <div class="gc-container">
        <div class="row">
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
            <div class="col-md-12">
                <div class="table-label">
                    <div class="floatL l5">
                        Añadir Usuario</div>
                    <div class="clear"></div>
                </div>
                <div class="form-container table-container">
				<?= form_open() ?>
                	<div class="form-group nombreU_form_group row">
                            <label class="col-sm-3 control-label">
                                Nombre<span class="required">*</span></label>
                    	<div class="col-sm-9">
                    	<input id="field-nombreU" class="form-control" name="nombreU" type="text" value="" maxlength="70">                            </div>
                     </div>

                    <div class="form-group apellidoU_form_group row">
                        <label class="col-sm-3 control-label">
                            Apellidos<span class="required">*</span></label>
                        <div class="col-sm-9">
                        <input id="field-apellidoU" class="form-control" name="apellidoU" type="text" value="" maxlength="70">                            </div>
                    </div>

                    <div class="form-group telefonoU_form_group row">
                        <label class="col-sm-3 control-label">
                            Teléfono<span class="required">*</span></label>
                        <div class="col-sm-9">
                    	<input id="field-telefonoU" class="form-control" name="telefonoU" type="text" value="" maxlength="30">                            </div>
                    </div>

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
                    </div>

					<div class="form-group correoU_form_group row">
                        <label for="password_confirm" class="col-sm-3 control-label">
                        Confirma Contraseña</label>
                    	<div class="col-sm-9">
                        <input id="field-correoU" class="form-control" id="password_confirm" name="password_confirm" type="password" value="" maxlength="100">                            </div>
                    </div>



                    <div class="form-group Cliente_idCliente_form_group row">
                            <label class="col-sm-3 control-label">Privilegios</label>
                        <div class="col-sm-9">
                         
                            <select name="idPrivilegio" style="width: 300px;">
                             <?php foreach ($privilegio as  $item):?>                  
                                <option><?=$item->idPrivilegio;?>,<?=$item->nombreP;?></option>                          
                              <?php endforeach; ?>                            
                            </select>
                        </div>
                    </div>


                    

                         


           
                                        <!-- Start of hidden inputs -->
                                        <!-- End of hidden inputs -->
                    
                    <div class="small-loading hidden" id="FormLoading">Cargando, guardando los datos...</div>

                    <div class="form-group gcrud-form-group">
                        <div id="report-error" class="report-div error bg-danger" style="display:none"></div>
                        <div id="report-success" class="report-div success bg-success" style="display:none"></div>
                    </div>
                    <div class="form-group gcrud-form-group">
                        <div class="col-sm-offset-3 col-sm-7">
                            <button class="btn btn-secondary btn-success b10" type="submit" id="form-button-save">
                                <i class="el el-ok"></i>
                                Guardar</button>
                	
						<button class="btn btn-info b10" type="button" id="save-and-go-back-button">
							<i class="el el-return-key"></i>
							Guardar y volver a la lista</button>
									
						<button class="btn btn-secondary cancel-button b10" type="button" id="cancel-button">
                            <i class="el el-warning-sign"></i>
                            	Cancelar</button>
        				</div>
                    </div>
                    </form>
					</div>
            </div>
        </div>
    </div>
</div>
<script>
    var validation_url = 'http://localhost/Hotel_Alameda/index.php/Cliente/index/insert_validation';
    var list_url = 'http://localhost/Hotel_Alameda/index.php/Cliente/index/';

    var message_alert_add_form = "Los datos que intenta añadir no se han guardado.\n¿Esta seguro que quiere volver a la lista?";
    var message_insert_error = "Ocurrio un error al añadir.";
</script><script type="text/javascript">
var js_date_format = 'dd/mm/yy';
</script>
<script type="text/javascript">
	var default_javascript_path = 'http://localhost/Hotel_Alameda/assets/grocery_crud/js';
	var default_css_path = 'http://localhost/Hotel_Alameda/assets/grocery_crud/css';
	var default_texteditor_path = 'http://localhost/Hotel_Alameda/assets/grocery_crud/texteditor';
	var default_theme_path = 'http://localhost/Hotel_Alameda/assets/grocery_crud/themes';
	var base_url = 'http://localhost/Hotel_Alameda/';

</script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/js/jquery-1.11.1.min.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/js/jquery_plugins/jquery.numeric.min.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/js/jquery_plugins/config/jquery.numeric.config.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/build/js/global-libs.min.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/js/form/add.min.js">
    </script>
     
      </div>
   </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="http://localhost/Hotel_Alameda/vendor/jquery/jquery.min.js"></script>
  <script src="http://localhost/Hotel_Alameda/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>

<?php }else{
  redirect('HotelAlameda');
}  ?>