<?php

/**
 * @category   Controllers
 * @package    Admin
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>

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
            $crud->set_table('DetalleReservacion');
            $crud->set_subject('Reservación');
            $crud->columns('Reservacion_idReservacion','Habitacion_numHabitacion');
            $crud->display_as("Habitacion_numHabitacion","Habitación");
            $crud->display_as("Reservacion_idReservacion","Fecha de Reservación");
            $crud->display_as("totalR","Total");


            $crud->set_relation('Habitacion_numHabitacion','Habitacion','{descripcionH}  {precio}');
            $crud->set_relation('Reservacion_idReservacion','Reservacion','LLegada {fechaLlegada} --- Salida {fechaSalida}');            
            
            $output = $crud->render();
            $this->load->view('Administrador/head.php');
            $this->load->view('Administrador/index.php',(array)$output);
            $this->load->view('Administrador/footer.php');
        }catch(Exception $ex){
              show_error($ex->getMessage().' ----- '.$ex->getTraceAsString());
        }
    }

}
