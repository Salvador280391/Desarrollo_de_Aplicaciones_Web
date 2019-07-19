<?php 

class Comentario extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('bootstrap-v4');
              $crud->set_table('Comentario');
              $crud->set_subject('Comentario');
              $crud->columns('comentario','fechaC','statusC','Cliente_idCliente');
              $crud->required_fields('comentario','fechaC','statusC');
              $crud->display_as('fechaC','fecha');
              $crud->display_as('statusC','Publicado');

              $crud->set_relation("Cliente_idCliente","Cliente","nombreCl");
              $crud->display_as("Cliente_idCliente","Cliente");


              //$crud
              $output = $crud->render();
              $this->load->view('comentario.php',(array)$output);
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
