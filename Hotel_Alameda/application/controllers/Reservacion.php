<?php 

class Reservacion extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('bootstrap-v4');
              $crud->set_table('Reservacion');
              $crud->set_subject('Reservación');
              $crud->columns('pago','fechaEntr','fechaSal','Cliente_idCliente');
              $crud->required_fields('pago','fechaEntr','fechaSal');
              $crud->display_as('fechaEntr','fecha de Entrada');
              $crud->display_as('fechaSal','fecha de Salida');

              $crud->set_relation("Usuario_idUsuario","Usuario","nombreU");
              $crud->display_as("Usuario_idUsuario","Usuario");

              $crud->set_relation("Cliente_idCliente","Cliente","nombreCl");
              $crud->display_as("Cliente_idCliente","Cliente");


              //$crud
              $output = $crud->render();
              $this->load->view('reservacion.php',(array)$output);
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
