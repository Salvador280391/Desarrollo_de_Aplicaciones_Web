<?php
/**
    Salvador Toral Naranjo
    Lunes 15 de julio del 2019
    Se creo el modelo "Habitacion_model"
**/
class Habitacion_model extends CI_Model{

    ///Cometarios
    private $_numHabitacion;
    private $_descripcionH;
    private $_cantPersonas;
    private $_precio;
    private $_imagenH;
    private $_statusH;

    function __construct(){
	}

    ///Getters

    function get_numHabitacion(){
        return $this->_numHabitacion;
    }

    function get_descripcionH(){
        return $this->_descripcionH;
    }

    function get_cantPersonas(){
        return $this->_cantPersonas;
    }

    function get_precio(){
        return $this->_precio;
    }

    function get_imagenH(){
        return $this->_imagenH;
    }

    function get_statusH(){
        return $this->_statusH;
    }

    ///Setters
    function set_numHabitacion($_numHabitacion){
        $this->_numHabitacion = $_numHabitacion;
    }

    function set_descripcionH($_descripcionH){
        $this->_descripcionH = $_descripcionH;
    }

    function set_cantPersonas($_cantPersonas){
        $this->_cantPersonas = $_cantPersonas;
    }

    function set_precio($_precio){
        $this->_precio = $_precio;
    }

    function set_imagenH($_imagenH){
        $this->_imagenH = $_imagenH;
    }

    function set_statusH($_statusH){
        $this->_statusH = $_statusH;
    }

    /*INICIO DE LAS FUNCIONES*/ 

    public function listarH(){
        if($this->_numHabitacion != null){
            $this->db->where('numHabitacion', $this->_numHabitacion);
        }
        $habitacion = $this->db->get('Habitacion');
        return $habitacion->result();
    }

    public function get_all()
    {
        $query = $this->db->get('Habitacion');
        return $query->result_array();
    }

}