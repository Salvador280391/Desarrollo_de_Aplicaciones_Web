<?php

/**
 * @category   Controllers
 * @package    Noticia.php
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
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
              $this->load->view('Administrador/head.php');
              $this->load->view('Administrador/noticia.php',(array)$output);
              $this->load->view('Administrador/footer.php');
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
