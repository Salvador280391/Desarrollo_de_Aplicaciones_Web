<?php 

class Admin extends CI_Controller
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
            $crud->columns('fechaLlegada','fechaSalida','Cliente_idCliente');
            $crud->required_fields('fechaLlegada','fechaSalida');
            $crud->display_as('fechaLlegada','Fecha de llegada');
            $crud->display_as('fechaSalida','Fecha de salida');

            $crud->set_relation("Cliente_idCliente","Cliente","nombreCl");
            $crud->display_as("Cliente_idCliente","Cliente");

            $output = $crud->render();
            $this->load->view('index.php',(array)$output);
        }catch(Exception $ex){
              show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
    }
}
