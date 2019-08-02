<?php

/**
 * @category   Controllers
 * @package    Habitacion.php
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
<?php 

class Habitacion extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
          $this->load->model('Index_model');
      }

      public function index(){
          try{
            
              $crud = new grocery_CRUD();

              $crud->set_theme('bootstrap-v4');
              $crud->set_table('Habitacion');
              $crud->set_subject('Habitación');
              $crud->columns('imagenH','numHabitacion','cantPersonas','precio','statusH');
              $crud->required_fields('numHabitacion','cantPersonas','precio');
              $crud->display_as('imagenH','Foto');
              $crud->display_as('numHabitacion','Número de habitación');
              $crud->display_as('cantPersonas','Número de Pesonas');
              $crud->display_as('statusH','Disponibilidad');
              $crud->set_field_upload('imagenH','assets/uploads/files',"jpg|png|jpeg");

              //$crud
              $output = $crud->render();
              $this->load->view('Administrador/head.php');
              $this->load->view('Administrador/habitacion.php',(array)$output);
              $this->load->view('Administrador/footer.php');
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
      }
      }
}
