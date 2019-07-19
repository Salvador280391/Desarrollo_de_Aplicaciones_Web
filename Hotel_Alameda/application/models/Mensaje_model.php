<?php
/**
    Salvador Toral Naranjo
    Jueves 18 de julio del 2019
    Se creo el modelo "Habitacion_model"
**/
class Mensaje_model extends CI_Model{

    private $_idMensaje;
    private $_mensaje;
    private $_fechaM;
    private $_respuestaM;
    private $_nombreCl;
    private $_apellidoCl;
    private $_telefonoCl;
    private $_correoCl;
    private $_idCliente;
    private $_Cliente_idCliente;

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

    function get_nombreCl(){
        return $this->_nombreCl;
    }

    function get_apellidoCl(){
        return $this->_apellidoCl;
    }

    function get_telefonoCl(){
        return $this->_telefonoCl;
    }

    function get_correoCl(){
        return $this->_correoCl;
    }

    function get_idCliente(){
        return $this->_idCliente;
    }

    function get_Cliente_idCliente(){
        return $this->_Cliente_idCliente;
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

    function set_nombreCl($_nombreCl){
        $this->_nombreCl = $_nombreCl;
    }

    function set_apellidoCl($_apellidoCl){
        $this->_apellidoCl = $_apellidoCl;
    }

    function set_telefonoCl($_telefonoCl){
        $this->_telefonoCl = $_telefonoCl;
    }

    function set_correoCl($_correoCl){
        $this->_correoCl = $_correoCl;
    }

    function set_idCliente($_idCliente){
        $this->_idCliente = $_idCliente;
    }

    function set_Cliente_idCliente($_Cliente_idCliente){
        $this->_Cliente_idCliente = $_Cliente_idCliente;
    }

    

    /*INICIO DE LAS FUNCIONES EN INTRO*/ 
    public function PublicarM(){
        $this->db->select('*');
        $this->db->from('Mensaje M');
        $this->db->join('Cliente L', 'M.Cliente_idCliente = L.idCliente');
        $mensaje = $this->db->get();
        return $mensaje->result();
    }

    public function guardarM(){
        $data = array(
            'mensaje' => $this->_mensaje
        );
        $data1 = array(
            'nombreCl' => $this->_nombreCl,
            'apellidoCl' => $this->_apellidoCl,
            'telefonoCl' => $this->_telefonoCl,
            'correoCl' => $this->_correoCl
        );
        $this->db->insert('Mensaje', $data);
        $this->db->insert('Cliente', $data1);

    }

    /*public function listarM(){
        if($this->_idMensaje != null){
            $this->db->where('idMensaje', $this->_idMensaje);
        }
        $mensaje = $this->db->get('Mensaje');
        return $mensaje->result();
    }*/

}
