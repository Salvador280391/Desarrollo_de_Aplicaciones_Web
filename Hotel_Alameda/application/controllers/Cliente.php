<?php 

class Cliente extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('bootstrap-v4');
              $crud->set_table('Cliente');
              $crud->set_subject('Cliente');
              $crud->columns('nombreCl','apellidoCl','telefonoCl','correoCl');
              $crud->required_fields('nombreCl','apellidoCl','telefonoCl');
              $crud->display_as('nombreCl','Nombre');
              $crud->display_as('apellidoCl','Apellidos');
              $crud->display_as('telefonoCl','Telefono');
              $crud->display_as('correoCl','Correo');

              //$crud
              $output = $crud->render();
              $this->load->view('cliente.php',(array)$output);
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
