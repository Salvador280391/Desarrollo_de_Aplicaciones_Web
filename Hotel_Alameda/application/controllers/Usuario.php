<?php

/**
 * @category   Controllers
 * @package    Usuario.php
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
	}
	
	public function index() {
		
		$data['usuario'] = $this->user_model->listarU();
			$this->load->view('Administrador/usuario.php',$data);
			
	}
	
	public function register() {
	
		$data = new stdClass();

	
		$this->form_validation->set_rules('nombreU', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[Usuario.nombreU]', array('is_unique' => 'This nombreU already exists. Please choose another one.'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			$datap['privilegio'] = $this->user_model->listarP();
			$this->load->view('Administrador/registrar',$datap);
			
			
		} else {

			$nombreU = $this->input->post('nombreU');
			$apellidoU = $this->input->post('apellidoU');
			$telefonoU = $this->input->post('telefonoU');
			$correoU    = $this->input->post('correoU');
			$password = $this->input->post('password');
			$idPrivilegio = $this->input->post('idPrivilegio');
			
			if ($this->user_model->create_user( $nombreU,$apellidoU,$telefonoU, $correoU, $password, $idPrivilegio)) {

				
				$this->load->view('Administrador/registrar', $data);
				
			} else {

				$data->error = 'There was a problem creating your new account. Please try again.';
				$data['privilegio'] = $this->user_model->listarP();
				$this->load->view('Administrador/registrar', $data);
			}	
		}	
	}

	public function registroCl() {
	
		$data = new stdClass();

	
		$this->form_validation->set_rules('nombreU', 'Nombre', 'trim|required|alpha_numeric|min_length[4]|is_unique[Usuario.nombreU]', array('is_unique' => 'This nombreU already exists. Please choose another one.'));
		$this->form_validation->set_rules('password', 'Contraseña', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirma contraseña', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			$datap['privilegio'] = $this->user_model->listarP();
			$this->load->view('HotelAlameda/registroCl',$datap);
			
			
		} else {

			$nombreU = $this->input->post('nombreU');
			$apellidoU = $this->input->post('apellidoU');
			$telefonoU = $this->input->post('telefonoU');
			$correoU    = $this->input->post('correoU');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_cliente( $nombreU,$apellidoU,$telefonoU, $correoU, $password, )) {

				
				$this->load->view('Administrador/registrar', $data);
				
			} else {

				$data->error = 'There was a problem creating your new account. Please try again.';
				$data['privilegio'] = $this->user_model->listarP();
				$this->load->view('Administrador/registrar', $data);
			}	
		}	
	}
		
	public function login() {
		
		// create the data object
		$data = new stdClass();
		
		// set validation rules
		$this->form_validation->set_rules('nombreU', 'Nombre de Usuario', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
		
			$this->load->view('Administrador/login');
			
			
		} else {
			
			// set variables from the form
			$nombreU = $this->input->post('nombreU');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($nombreU, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($nombreU);
				$user    = $this->user_model->get_user($user_id);				
				
				$data = array(
					'idUsuario' => $user->idUsuario,
					'nombreU' => $nombreU,
					'privilegio' => $user->Privilegio_idPrivilegio,
					'login' => true,
				  );
					  
				  $this->session->set_userdata($data);
				// user login ok
				redirect('Admin');
			
				
			} else {
				
				$data->error = 'El nombre de usuario o la contraseña son incorrectos.';
		
				$this->load->view('Administrador/login', $data);	
			}	
		}
	}

	public function exit(){
		$this->session->sess_destroy();
		redirect('Usuario/login');
	  }  

	public function exitCl(){
		$this->session->sess_destroy();
		redirect('HotelAlameda');
	  } 


	  public function eliminarU($idUsuario){
        $this->user_model->set_idUsuario($idUsuario);
		$this->user_model->eliminarU();
		redirect('Usuario');
        
	}
	
	public function modificarU($_idUsuario){
		$this->user_model->set_idUsuario($_idUsuario);
		$data['privilegio'] = $this->user_model->listarP();
        $data['usuario'] = $this->user_model->listarU();
        $this->load->view('Administrador/modificar_usuario', $data);

	}

	/*public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			$this->load->view('header');
			$this->load->view('user/logout/logout_success', $data);
			$this->load->view('footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}*/
		
	
}
