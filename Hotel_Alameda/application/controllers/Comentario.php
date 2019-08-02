<?php

/**
 * @category   Controllers
 * @package    Comentario.php
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
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
              $crud->columns('comentario','fechaC','Usuario_idUsuario');
              $crud->required_fields('comentario','fechaC','statusC');
              $crud->display_as('fechaC','fecha');

              $crud->set_relation("Usuario_idUsuario","Usuario","nombreU");
              $crud->display_as("Usuario_idUsuario","Usuario");


              //$crud
              $output = $crud->render();
              $this->load->view('Administrador/head.php');
              $this->load->view('Administrador/comentario.php',(array)$output);
              $this->load->view('Administrador/footer.php');
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
