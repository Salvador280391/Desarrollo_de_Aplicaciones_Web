<?php
/**
    Salvador Toral Naranjo
    Lunes 08 de julio del 2019
    Se creo el modelo "index_model"
**/
class Index_model extends CI_Model{

    ///Cometarios
    private $_idNoticia;
    private $_titulo;
    private $_noticia;
    private $_imagenN;
    private $_Usuario_idUsuario;

    function __construct(){
	}

    ///Getters

    function get_idNoticia(){
        return $this->_idNoticia;
    }

    function get_titulo(){
        return $this->_titulo;
    }

    function get_noticia(){
        return $this->_noticia;
    }

    function get_imagenN(){
        return $this->_imagenN;
    }

    function get_Usuario_idUsuario(){
        return $this->_Usuario_idUsuario;
    }

    ///Setters
    function set_idNoticia($_idNoticia){
        $this->_idNoticia = $_idNoticia;
    }

    function set_titulo($_titulo){
        $this->_titulo = $_titulo;
    }

    function set_noticia($_noticia){
        $this->_noticia = $_noticia;
    }

    function set_imagenN($_imagenN){
        $this->_imagenN = $_imagenN;
    }

    function set_Usuario_idUsuario($_Usuario_idUsuario){
        $this->_Usuario_idUsuario = $_Usuario_idUsuario;
    }

    /*INICIO DE LAS FUNCIONES*/ 

    public function listarN(){
        if($this->_idNoticia != null){
            $this->db->where('idNoticia', $this->_idNoticia);
        }
        $noticia = $this->db->get('Noticia');
        return $noticia->result();
    }

}