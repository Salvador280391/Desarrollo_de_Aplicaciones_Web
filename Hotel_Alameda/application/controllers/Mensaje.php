<?php 

class Mensaje extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('bootstrap-v4');
              $crud->set_table('Mensaje');
              $crud->set_subject('Mensaje');
              $crud->columns('mensaje','fechaM','respuesta','Cliente_idCliente');
              $crud->required_fields('mensaje','fechaM');
              $crud->display_as('fechaM','fecha');

              $crud->set_relation("Usuario_idUsuario","Usuario","nombreU");
              $crud->display_as("Usuario_idUsuario","Usuario");

              $crud->set_relation("Cliente_idCliente","Cliente","nombreCl");
              $crud->display_as("Cliente_idCliente","Cliente");


              //$crud
              $output = $crud->render();
              $this->load->view('mensaje.php',(array)$output);
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
