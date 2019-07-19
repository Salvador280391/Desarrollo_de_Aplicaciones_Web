<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class HotelAlameda extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('cart');
            $this->load->model('Index_model');
            $this->load->model('Habitacion_model');
            $this->load->model('Comentario_model');
            $this->load->model('Mensaje_model');
            $this->load->library(array('form_validation'));
        }

            function index(){
                $data['noticia'] = $this->Index_model->listarN();
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/index',$data);
            }

            function habitaciones(){
                $data['habitacion'] = $this->Habitacion_model->get_all();
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/habitaciones',$data);
            }

            function add()
                {
                    $insert_data = array(
                    'id' => $this->input->post('id'),
                    'name' => $this->input->post('name'),
                    'price' => $this->input->post('price'),
                    'qty' => 1
                    );

                    $this->cart->insert($insert_data);

                    redirect('HotelAlameda/reservacion');
                }


            function remove($rowid) 
                {
                    if ($rowid==="all"){
                    $this->cart->destroy();
                    }else{
                    $data = array(
                    'rowid' => $rowid,
                    'qty' => 0
                    );
                    $this->cart->update($data);
                    }

                    redirect('HotelAlameda/reservacion');
                }

            function update_cart()
                {

                    $cart_info = $_POST['cart'];
                    foreach( $cart_info as $id => $cart)
                    {
                        $rowid = $cart['rowid'];
                        $price = $cart['price'];
                        $amount = $price * $cart['qty'];
                        $qty = $cart['qty'];

                        $data = array(
                        'rowid' => $rowid,
                        'price' => $price,
                        'amount' => $amount,
                        'qty' => $qty
                        );

                        $this->cart->update($data);
                    }
                    redirect('HotelAlameda/reservacion');
                }

            function nosotros(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/nosotros');
            }

            function comentarios(){
                $data['titulo'] = 'Hotel Alameda';
                $data['comPubl'] = $this->Comentario_model->Publicar();
                $this->load->view('HotelAlameda/comentarios',$data);
            }

            public function guardarC(){
                $config = array(
                    array(

                        array(
                            'field' => 'nombreCl',
                            'label' => 'Nombre',
                            'rules' => 'required',
                    ),

                    array(
                        'field' => 'apellidoCl',
                        'label' => 'Apellidos',
                        'rules' => 'required',
                    ),

                    array(
                        'field' => 'telefonoCl',
                        'label' => 'Telefono',
                        'rules' => 'required',
                    ),

                            'field' => 'correoCl',
                            'label' => 'Correo',
                            'rules' => 'required|valid_emails',
                            'errors' => array(
                                'required' => 'El %s es invalido.',
                        ),
                    ),
                    array(
                            'field' => 'comentario',
                            'label' => 'Comentario',
                            'rules' => 'required',
                    ),
                );
            
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == FALSE){
                redirect('HotelAlameda/comentarios');
                
            }else{
                $this->Comentario_model->set_comentario($this->input->post('comentario'));
                $this->Comentario_model->set_nombreCl($this->input->post('nombreCl'));
                $this->Comentario_model->set_apellidoCl($this->input->post('apellidoCl'));
                $this->Comentario_model->set_telefonoCl($this->input->post('telefonoCl'));
                $this->Comentario_model->set_correoCl($this->input->post('correoCl'));
                $this->Comentario_model->guardarC();
            }

                redirect('HotelAlameda/comentarios');
            }

            function contacto(){
                $data['titulo'] = 'Hotel Alameda';
                $data['mensaje'] = $this->Mensaje_model->PublicarM();
                $this->load->view('HotelAlameda/contacto',$data);
            }

            public function guardarM(){
                $config = array(
                    array(

                        array(
                            'field' => 'nombreCl',
                            'label' => 'Nombre',
                            'rules' => 'required',
                    ),

                    array(
                        'field' => 'apellidoCl',
                        'label' => 'Apellidos',
                        'rules' => 'required',
                    ),

                    array(
                        'field' => 'telefonoCl',
                        'label' => 'Telefono',
                        'rules' => 'required',
                    ),

                            'field' => 'correoCl',
                            'label' => 'Correo',
                            'rules' => 'required|valid_emails',
                            'errors' => array(
                                'required' => 'El %s es invalido.',
                        ),
                    ),
                    array(
                            'field' => 'mensaje',
                            'label' => 'Mensaje',
                            'rules' => 'required',
                    ),
                );
            
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == FALSE){
                redirect('HotelAlameda/contacto');
                
            }else{
                $this->Mensaje_model->set_mensaje($this->input->post('mensaje'));
                $this->Mensaje_model->set_nombreCl($this->input->post('nombreCl'));
                $this->Mensaje_model->set_apellidoCl($this->input->post('apellidoCl'));
                $this->Mensaje_model->set_telefonoCl($this->input->post('telefonoCl'));
                $this->Mensaje_model->set_correoCl($this->input->post('correoCl'));
                $this->Mensaje_model->guardarM();
            }

                redirect('HotelAlameda/contacto');
            }

            function reservacion(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/reservacion');
            }

        }