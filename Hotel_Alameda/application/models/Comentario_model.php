<?php

class Comentario_model extends CI_Model{

    private $_idComentario;
    private $_comentario;
    private $_fechaC;
    private $_statusC;
    private $_nombreCl;
    private $_apellidoCl;
    private $_telefonoCl;
    private $_correoCl;
    private $_idCliente;
    private $_Cliente_idCliente;

    function __construct(){
	}

    ///Getters

    function get_idComentario(){
        return $this->_idComentario;
    }

    function get_comentario(){
        return $this->_comentario;
    }

    function get_fechaC(){
        return $this->_fechaC;
    }

    function get_statusC(){
        return $this->_statusC;
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

    function set_idComentario($_idComentario){
        $this->_idComentario = $_idComentario;
    }

    function set_comentario($_comentario){
        $this->_comentario = $_comentario;
    }

    function set_fechaC($_fechaC){
        $this->_fechaC = $_fechaC;
    }

    function set_statusC($_statusC){
        $this->_statusC = $_statusC;
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
    public function Publicar(){
        $this->db->select('*');
        $this->db->from('Comentario C');
        $this->db->join('Cliente L', 'C.Cliente_idCliente = L.idCliente');
        $comPubl = $this->db->get();
        return $comPubl->result();
    }

    public function guardarC(){
        $data1 = array(
            'nombreCl' => $this->_nombreCl,
            'apellidoCl' => $this->_apellidoCl,
            'telefonoCl' => $this->_telefonoCl,
            'correoCl' => $this->_correoCl
        );
        $this->db->insert('Cliente', $data1);
        
        $data = array(
            'comentario' => $this->_comentario,
        );
        $this->db->insert('Comentario', $data);
        

    }

    public function listarC(){
        if($this->_idComentario != null){
            $this->db->where('idComentario', $this->_idComentario);
        }
        $comentario = $this->db->get('Comentario');
        return $comentario->result();
    }

}