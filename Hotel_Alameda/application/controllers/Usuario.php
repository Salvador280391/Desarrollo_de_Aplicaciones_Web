<?php 

class Usuario extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('bootstrap-v4');
              $crud->set_table('Usuario');
              $crud->set_subject('Usuario');
              $crud->columns('nombreU','apellidoU','telefonoU','correoU','fotoU','Privilegio_idPrivilegio');
              $crud->required_fields('nombreU','apellidoU','correoU','passwordU');
              $crud->display_as('nombreU','Nombre');
              $crud->display_as('apellidoU','Apellidos');
              $crud->display_as('telefonoU','Teléfono');
              $crud->display_as('correoU','Correo');
              $crud->display_as('fotoU','Foto');
              $crud->display_as('passwordU','Contraseña');
              $crud->set_field_upload('fotoU','assets/uploads/files',"jpg|png|jpeg");

              $crud->set_relation("Privilegio_idPrivilegio","Privilegio","nombreP");
              $crud->display_as("Privilegio_idPrivilegio","Privilegio");

              //$crud
              $output = $crud->render();
              $this->load->view('usuario.php',(array)$output);
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
