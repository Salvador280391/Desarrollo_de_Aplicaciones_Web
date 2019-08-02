<?php

/**
 * @category   Models
 * @package    Mensaje_model.php 
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
<?php

class Mensaje_model extends CI_Model{

    private $_idMensaje;
    private $_mensaje;
    private $_fechaM;
    private $_respuestaM;
    private $_nombreU;
    private $_apellidoU;
    private $_telefonoU;
    private $_correoU;
    private $_idUsuario;
    private $_Usuario_idUsuario;

    function __construct(){
	}

    ///Getters

    function get_idMensaje(){
        return $this->_idMensaje;
    }

    function get_mensaje(){
        return $this->_mensaje;
    }

    function get_fechaM(){
        return $this->_fechaM;
    }

    function get_respuestaM(){
        return $this->_respuestaM;
    }

    function get_nombreU(){
        return $this->_nombreU;
    }

    function get_apellidoU(){
        return $this->_apellidoU;
    }

    function get_telefonoU(){
        return $this->_telefonoU;
    }

    function get_correoU(){
        return $this->_correoU;
    }

    function get_idUsuario(){
        return $this->_idUsuario;
    }

    function get_Usuario_idUsuario(){
        return $this->_Usuario_idUsuario;
    }

    ///Setters

    function set_idMensaje($_idMensaje){
        $this->_idMensaje = $_idMensaje;
    }

    function set_mensaje($_mensaje){
        $this->_mensaje = $_mensaje;
    }

    function set_fechaM($_fechaM){
        $this->_fechaM = $_fechaM;
    }

    function set_respuestaM($_respuestaM){
        $this->_respuestaM = $_respuestaM;
    }

    function set_nombreU($_nombreU){
        $this->_nombreU = $_nombreU;
    }

    function set_apellidoU($_apellidoU){
        $this->_apellidoU = $_apellidoU;
    }

    function set_telefonoU($_telefonoU){
        $this->_telefonoU = $_telefonoU;
    }

    function set_correoU($_correoU){
        $this->_correoU = $_correoU;
    }

    function set_idUsuario($_idUsuario){
        $this->_idUsuario = $_idUsuario;
    }

    function set_Usuario_idUsuario($_Usuario_idUsuario){
        $this->_Usuario_idUsuario = $_Usuario_idUsuario;
    }

    

    /*INICIO DE LAS FUNCIONES EN INTRO*/ 
    public function PublicarM(){
        $this->db->select('*');
        $this->db->from('Mensaje M');
        $this->db->join('Usuario U', 'M.Usuario_idUsuario = U.idUsuario');
        $mensaje = $this->db->get();
        return $mensaje->result();
    }

    public function guardarM(){
        $data = array(
            'mensaje' => $this->_mensaje,
            'Usuario_idUsuario' => $this->_Usuario_idUsuario,
            "fechaM" => date('Y-m-d')
        );
        $this->db->insert('Mensaje', $data);
    }

    /*public function listarM(){
        if($this->_idMensaje != null){
            $this->db->where('idMensaje', $this->_idMensaje);
        }
        $mensaje = $this->db->get('Mensaje');
        return $mensaje->result();
    }*/

}