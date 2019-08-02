<?php

/**
 * @category   Models
 * @package    User_model.php 
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


class User_model extends CI_Model {

	private $idUsuario;
	private $idPrivilegio;
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}


	function get_idUsuario(){
        return $this->idUsuario;
	}
	
	function set_idUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
	}
	
	function get_idPrivilegio(){
        return $this->idPrivilegio;
	}
	
	function set_idPrivilegio($idPrivilegio){
        $this->idPrivilegio = $idPrivilegio;
    }
	
	
	public function create_user($nombreU,$apellidoU,$telefonoU, $correoU, $password,$idPrivilegio) {
		
		$data = array(
			'nombreU'   => $nombreU,
			'apellidoU'   => $apellidoU,
			'telefonoU'   => $telefonoU,
			'correoU'      => $correoU,
			'password'   => $this->hash_password($password),
			'Privilegio_idPrivilegio'   => $idPrivilegio,
			
		);
            return $this->db->insert('Usuario', $data);
    
	}	

	public function create_cliente($nombreU,$apellidoU,$telefonoU, $correoU, $password) {
		
		$data = array(
			'nombreU'   => $nombreU,
			'apellidoU'   => $apellidoU,
			'telefonoU'   => $telefonoU,
			'correoU'      => $correoU,
			'password'   => $this->hash_password($password),
			'Privilegio_idPrivilegio'   => 1,
			
		);
            return $this->db->insert('Usuario', $data);
    
	}
	
	public function resolve_user_login($nombreU, $password) {
		
		$this->db->select('password');
		$this->db->from('Usuario');
		$this->db->where('nombreU', $nombreU);
		$hash = $this->db->get()->row('password');
		
		return $this->verify_password_hash($password, $hash);
		
	}
	
	public function get_user_id_from_username($nombreU) {
		
		$this->db->select('idUsuario');
		$this->db->from('Usuario');
		$this->db->where('nombreU', $nombreU);

		return $this->db->get()->row('idUsuario');
		
	}
	

	public function get_user($user_id) {

		$this->db->select('*');
		$this->db->from('Usuario');
		$this->db->where('idUsuario', $user_id);
		return $this->db->get()->row();
		
	}	
	
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}

	public function listarU(){
        if($this->idUsuario != null){
            $this->db->where('idUsuario', $this->idUsuario);
        }
        $usuario = $this->db->get('Usuario');
        return $usuario->result();
	}
	
	public function listarP(){
        if($this->idPrivilegio != null){
            $this->db->where('idPrivilegio', $this->idPrivilegio);
        }
        $privilegio = $this->db->get('Privilegio');
        return $privilegio->result();
	}

	public function eliminarU(){
		$this->db->where('idUsuario',  $this->idUsuario);
		$this->db->delete('Usuario');
	}

	public function guardar($idUsuario,$nombreU,$apellidoU,$telefonoU, $correoU, $password,$idPrivilegio) {
		
		$data = array(
			'idUsuario'   => $idUsuario,
			'nombreU'   => $nombreU,
			'apellidoU'   => $apellidoU,
			'telefonoU'   => $telefonoU,
			'correoU'      => $correoU,
			'password'   => $this->hash_password($password),
			'Privilegio_idPrivilegio'   => $idPrivilegio,
			
		);
		
		return $this->db->where('idUsuario', $this->idUsuario);
				$this->db->update('Usuario', $data);
		
	}
	
}
