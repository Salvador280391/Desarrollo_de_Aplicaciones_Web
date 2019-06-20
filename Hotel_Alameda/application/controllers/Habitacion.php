<?php 

class Habitacion extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('bootstrap-v4');
              $crud->set_table('Habitacion');
              $crud->set_subject('Habitación');
              $crud->columns('numHabitacion','cantPersonas','precio');
              $crud->required_fields('numHabitacion','cantPersonas','precio');
              $crud->display_as('numHabitacion','Número de habitación');
              $crud->display_as('cantPersonas','Numero de Pesonas');

              //$crud
              $output = $crud->render();
              $this->load->view('habitacion.php',(array)$output);
          }catch(Exception $ex){
            show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
      }
      }
}
