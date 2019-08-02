<?php

/**
 * @category   Controllers
 * @package    Reservacion.php
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
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
              $crud->columns('Usuario_idUsuario','fechaLlegada','fechaSalida');
              $crud->required_fields('fechaLlegada','fechaSalida');
              $crud->display_as('fechaLlegada','Fecha de llegada');
              $crud->display_as('fechaSalida','Fecha de salida');
              $crud->display_as('Usuario_idUsuario','Datos del Cliente');

              $crud->set_relation('Usuario_idUsuario','Usuario','{nombreU}  {apellidoU}');        
              
              //$crud
              $output = $crud->render();
              $this->load->view('Administrador/head.php');
              $this->load->view('Administrador/reservacion.php',(array)$output);
              $this->load->view('Administrador/footer.php');
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
      }
    
}
