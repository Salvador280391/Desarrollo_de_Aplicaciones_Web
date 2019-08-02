<?php

/**
 * @category   Controllers
 * @package    Mensaje.php
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
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
              $crud->columns('mensaje','fechaM','respuestaM','Usuario_idUsuario');
              $crud->required_fields('mensaje','fechaM');
              $crud->display_as('fechaM','fecha');
              $crud->display_as('respuestaM','Respuesta');

              $crud->set_relation("Usuario_idUsuario","Usuario","nombreU");
              $crud->display_as("Usuario_idUsuario","Usuario");


              //$crud
              $output = $crud->render();
              $this->load->view('Administrador/head.php');
              $this->load->view('Administrador/mensaje.php',(array)$output);
              $this->load->view('Administrador/footer.php');
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
}
