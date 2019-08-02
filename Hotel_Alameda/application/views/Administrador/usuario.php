<?php
if ($this->session->userdata('login')==FALSE) {
  redirect('Usuario/login');
}else if($this->session->userdata('privilegio')==1) {
  redirect('HotelAlameda');
}else if($this->session->userdata('privilegio')==2){?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administrador Hotel Alameda -- Usuario</title>

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
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/list.css">
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/general.css">
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/plugins/animate.min.css">
        <link rel="stylesheet" href="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/css/main.css">
          
      <div class="container-fluid">

      <script type="text/javascript">
	var dialog_forms = '';

</script>
<script type="text/javascript">
    var csrf_cookie_name = '';
</script><script type="text/javascript">
    var base_url = 'http://localhost/Hotel_Alameda/';

    var subject = 'Reservación';
    var ajax_list_info_url = 'http://localhost/Hotel_Alameda/index.php/Admin/index/ajax_list_info';
    var ajax_list_url = 'http://localhost/Hotel_Alameda/index.php/Admin/index/ajax_list';
    var unique_hash = '7bffb286b818a3ef610215739b26485f';

    var message_alert_delete = "¿Esta seguro que quiere eliminar este registro?";
    var THEME_VERSION = '1.4.5';
</script>
    <br>
    <div class="container-fluid gc-container">
        <div class="success-message hidden"></div>

 		<div class="row">
        	<div class="table-section">
                <div class="table-label">
                    <div class="floatL l5">
                        Usuarios                    </div>
                    <div class="clear"></div>
                </div>
                <div class="table-container">
                    <form action="http://localhost/Hotel_Alameda/index.php/Admin" method="post" autocomplete="off" id="gcrud-search-form" accept-charset="utf-8">
                        <div class="header-tools">
                                                            <div class="floatL t5">
                                    <a class="btn btn-default btn-outline-dark" href="<?=base_url();?>index.php/Usuario/register">
                                        <i class="el el-plus"></i> &nbsp; Añadir Usuario</a>
                                </div>
                                                        <div class="floatR">
                                              
                                
                                <a class="btn btn-primary search-button t5" href="javascript:;">
                                    <i class="el el-search"></i>
                                    <input type="text" name="search" class="search-input">
                                </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        




  <div class="scroll-if-required">
    <table class="table table-bordered grocery-crud-table table-hover">
        					<thead>
        						<tr>
        							<th colspan="2">
                      Acciones</th>
                      <th class="column-with-ordering" data-order-by="nombreU">Nombre</th>
                      <th class="column-with-ordering" data-order-by="apellidoU">Apellidos</th>
                      <th class="column-with-ordering" data-order-by="telefonoU">Teléfono</th>
                      <th class="column-with-ordering" data-order-by="correoU">Correo</th>
                    </tr>
        						
        						<tr class="filter-row gc-search-row">
        							<td class="no-border-right ">
                        <div class="floatL t5">
            						  <input type="checkbox" class="select-all-none">
            						</div>
                        </td>

        							<td class="no-border-left ">
                                        <div class="floatL">
                                            <a href="<?=base_url();?>Usuario/eliminarU"  title="Eliminar" class="hidden btn btn-outline-dark delete-selected-button">
                                                <i class="el el-remove text-danger"></i>
                                                <span class="text-danger">Eliminar</span>
                                            </a>
                      </div>

                                        <div class="floatR l5">
                                            <a href="javascript:void(0);" class="btn btn-default btn-outline-dark gc-refresh">
                                                <i class="el el-refresh"></i>
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </td>

                      <td>
                        <input type="text" class="form-control searchable-input floatL" placeholder="Buscar por Nombre" name="nombreU">
                      </td>
                      <td>
                        <input type="text" class="form-control searchable-input floatL" placeholder="Buscar por Apellidos" name="apellidoU">
                      </td>
                      <td>
                        <input type="text" class="form-control searchable-input floatL" placeholder="Buscar por Teléfono" name="telefonoU">
                      </td>
                      <td>
                        <input type="text" class="form-control searchable-input floatL" placeholder="Buscar por Correo" name="correoU">
                      </td>
                      </tr>

        					</thead>
        					<tbody>
                                
        <td>
          
        </td>
        <td>
          

          <?php foreach ($usuario as  $item):?>
                    <tbody>
                        <tr>
                        <td><input type="checkbox" class="select-row" data-id="4"></td>

                         <td>
                         <div class="only-desktops" style="white-space: nowrap">
                            
                                                        
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-outline-dark gc-bootstrap-dropdown dropdown-toggle">
                                Mas<span class="caret"></span>
                              </button>
                                <div class="dropdown-menu">
                                  
                                <a href="<?=base_url();?>index.php/Usuario/eliminarU/<?=$item->idUsuario;?>" >
                                <i class="el el-remove text-danger"></i>
                                <span class="text-danger">Eliminar</span></a>                             

                                </div>
                          </div> 
                         </td>
                          <td><?=$item->nombreU;?></td>
                          <td><?=$item->apellidoU;?></td>
                          <td><?=$item->telefonoU;?></td>
                          <td><?=$item->correoU;?></td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
  
      </tbody>
    </table>
  </div>






                            <!-- Table Footer -->
        					<div class="footer-tools">

                                            <!-- "Show 10/25/50/100 entries" (dropdown per-page) -->
                                            <div class="floatL t20 l5">
                                                <div class="floatL t10">
                                                                                                        Mostrar                                                 </div>
                                                <div class="floatL r5 l5">
                                                    <select name="per_page" class="per_page form-control">
                                                                                                                    <option value="10" selected="selected">
                                                                        10&nbsp;&nbsp;
                                                            </option>
                                                                                                                    <option value="25">
                                                                        25&nbsp;&nbsp;
                                                            </option>
                                                                                                                    <option value="50">
                                                                        50&nbsp;&nbsp;
                                                            </option>
                                                                                                                    <option value="100">
                                                                        100&nbsp;&nbsp;
                                                            </option>
                                                                                                            </select>
                                                </div>
                                                <div class="floatL t10">
                                                     registros                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <!-- End of "Show 10/25/50/100 entries" (dropdown per-page) -->


                                            <div class="floatR r5">

                                                <!-- Buttons - First,Previous,Next,Last Page -->
                                                <ul class="pagination">
                                                    <li class="disabled paging-first page-item">
                                                        <a href="javascript:;" class="page-link">
                                                            <i class="el el-step-backward"></i>
                                                        </a>
                                                    </li>
                                                    <li class="prev disabled paging-previous page-item">
                                                        <a href="javascript:;" class="page-link">
                                                            <i class="el el-chevron-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item">
                                                        <span class="page-number-input-container page-link">
                                                            <input type="number" value="1" class="form-control page-number-input">
                                                        </span>
                                                    </li>
                                                    <li class="next paging-next page-item disabled">
                                                        <a href="#" class="page-link">
                                                            <i class="el el-chevron-right"></i>
                                                        </a>
                                                    </li>
                                                    <li class="paging-last page-item disabled">
                                                        <a href="#" class="page-link">
                                                            <i class="el el-step-forward"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- End of Buttons - First,Previous,Next,Last Page -->

                                                <input type="hidden" name="page_number" class="page-number-hidden" value="1">

                                                <!-- Start of: Settings button -->
                                                <div class="btn-group floatR t20 l10 settings-button-container">
                                                    <button type="button" class="btn btn-default btn-outline-dark settings-button gc-bootstrap-dropdown dropdown-toggle">
                                                        <i class="el el-cog r5"></i>
                                                        <span class="caret"></span>
                                                    </button>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="javascript:void(0)" class="clear-filtering dropdown-item">
                                                            <i class="el el-eraser"></i> Clear filtering
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End of: Settings button -->

                                            </div>


                                            <!-- "Displaying 1 to 10 of 116 items" -->
                                            <div class="floatR r10 displaying-paging-items">
                                                Mostrando <span class="paging-starts">1</span> a <span class="paging-ends">10</span> de <span class="current-total-results">0</span> registros                                                <span class="full-total-container hidden">
                                                    (filtrando de <span class="full-total">0</span> total registros)                                                </span>
                                            </div>
                                            <!-- End of "Displaying 1 to 10 of 116 items" -->

                                            <div class="clear"></div>
                            </div>
                            <!-- End of: Table Footer -->

                    </form>                </div>
        	</div>

            <!-- Delete confirmation dialog -->
            <div class="delete-confirmation modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <p>¿Esta seguro que quiere eliminar este registro?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger delete-confirmation-button">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Delete confirmation dialog -->

            <!-- Delete Multiple confirmation dialog -->
            <div class="delete-multiple-confirmation modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <p class="alert-delete-multiple hidden">
                                ¿Estás seguro que deseas eliminar esos <span class="delete-items-amount"></span> elementos?                            </p>
                            <p class="alert-delete-multiple-one hidden">
                                ¿Estás seguro que deseas eliminar ese 1 elemento?                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Cancelar                            </button>
                            <button type="button" class="btn btn-danger delete-multiple-confirmation-button" data-target="http://localhost/Hotel_Alameda/index.php/Admin/index/delete_multiple">
                                Eliminar                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Delete Multiple confirmation dialog -->

            </div>
        </div>
        <script type="text/javascript">
	var default_javascript_path = 'http://localhost/Hotel_Alameda/assets/grocery_crud/js';
	var default_css_path = 'http://localhost/Hotel_Alameda/assets/grocery_crud/css';
	var default_texteditor_path = 'http://localhost/Hotel_Alameda/assets/grocery_crud/texteditor';
	var default_theme_path = 'http://localhost/Hotel_Alameda/assets/grocery_crud/themes';
	var base_url = 'http://localhost/Hotel_Alameda/';

</script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/js/jquery-1.11.1.min.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/build/js/global-libs.min.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/js/jquery-plugins/gc-dropdown.min.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/js/jquery-plugins/gc-modal.min.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/js/jquery-plugins/bootstrap-growl.min.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/js/jquery-plugins/jquery.print-this.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/js/datagrid/gcrud.datagrid.js">
    </script>
        <script src="http://localhost/Hotel_Alameda/assets/grocery_crud/themes/bootstrap-v4/js/datagrid/list.js">
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