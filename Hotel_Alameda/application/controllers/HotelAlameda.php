<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class HotelAlameda extends CI_Controller{
        function __construct(){
            parent::__construct();
            ///$this->load->model('HotelAlameda_model');

        }

            function index(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/index');
            }

            function habitaciones(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/habitaciones');
            }

            function nosotros(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/nosotros');
            }

            function comentarios(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/comentarios');
            }

            function contacto(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/contacto');
            }
        }