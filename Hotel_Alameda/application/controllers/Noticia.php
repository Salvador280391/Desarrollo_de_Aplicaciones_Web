<?php 

class Noticia extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('bootstrap-v4');
              $crud->set_table('Noticia');
              $crud->set_subject('Noticia');
              $crud->columns('titulo','noticia','imagenN','Usuario_idUsuario');
              $crud->required_fields('titulo','noticia');
              $crud->display_as('imagenN','Foto');
              $crud->set_field_upload('imagenN','assets/uploads/files',"jpg|png|jpeg");

              $crud->set_relation("Usuario_idUsuario","Usuario","nombreU");
              $crud->display_as("Usuario_idUsuario","Usuario");

              //$crud
              $output = $crud->render();
              $this->load->view('noticia.php',(array)$output);
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
