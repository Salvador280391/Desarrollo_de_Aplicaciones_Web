<?php

/**
 * @category   Models
 * @package    Comentario_model.php
 * @author     Salvador Toral Naranjo
 * @version    1.0
 * @link       git@github.com:Salvador280391/Desarrollo_de_Aplicaciones_Web.git
 * Viernes 02 de Agosto del 2019
 * 
 * Se actualizo la cabecera de código
 */

?>
<?php

class Comentario_model extends CI_Model{

    private $_idComentario;
    private $_comentario;
    private $_fechaC;
    private $_statusC;
    private $_nombreU;
    private $_apellidoU;
    private $_telefonoU;
    private $_correoU;
    private $_idUsuario;
    private $_Usuario_idUsuario;

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
    public function Publicar(){
        $this->db->select('*');
        $this->db->from('Comentario C');
        $this->db->join('Usuario U', 'C.Usuario_idUsuario = U.idUsuario');
        $comPubl = $this->db->get();
        return $comPubl->result();
    }

    public function guardarC(){
        
        $data = array(
            'comentario' => $this->_comentario,
            'Usuario_idUsuario' => $this->_Usuario_idUsuario,
            "fechaC" => date('Y-m-d')
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