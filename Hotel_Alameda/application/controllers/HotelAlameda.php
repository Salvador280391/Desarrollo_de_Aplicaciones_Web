<?php

/**
 * @category   Controllers
 * @package    HotelAlameda.php
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
    class HotelAlameda extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('cart');
            $this->load->model('Index_model');
            $this->load->model('Habitacion_model');
            $this->load->model('Comentario_model');
            $this->load->model('Mensaje_model');
            $this->load->library('form_validation');
            $this->load->helper('form');
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
                            'field' => 'comentario',
                            'label' => 'Comentario',
                            'rules' => 'required',
                    ),
                );     
            
            $this->form_validation->set_rules($config);
           
            if ($this->form_validation->run() == false){
                redirect('HotelAlameda/comentarios');
                
            }else{
                $this->Comentario_model->set_comentario($this->input->post('comentario'));
                $this->Comentario_model->set_Usuario_idUsuario($this->input->post('Usuario_idUsuario'));
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
                $this->Mensaje_model->set_Usuario_idUsuario($this->input->post('Usuario_idUsuario'));
                $this->Mensaje_model->guardarM();
            }

                redirect('HotelAlameda/contacto');
            }

            function reservacion(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/reservacion');
            }

            function reporte(){
                $data['titulo'] = 'Hotel Alameda';
                $this->load->view('HotelAlameda/pdf');
            }

            public function descargar(){

                $data = [];
        
                $hoy = date("dmyhis");
        
                /*load the view and saved it into $html variable
                $html = 
                "<style>@page {
                        margin-top: 0.5cm;
                        margin-bottom: 0.5cm;
                        margin-left: 0.5cm;
                        margin-right: 0.5cm;
                    }
                    </style>".
                "<body>
                    <div style='color:#006699;'><b>".$this->input->post('txtPDF')."<b></div>".
                        "<div style='width:50px; height:50px; background-color:red;'>asdf</div>
        
                </body>";*/
        
            $html = $this->load->view('HotelAlameda/pdf',$date,true);
                 
                 //$html="asdf";
                //this the the PDF filename that user will get to download
                $pdfFilePath = "cipdf_".$hoy.".pdf";
         
                //load mPDF library
                $this->load->library('M_pdf');
                $mpdf = new mPDF('c', 'A4-L'); 
                //$mpdf->WriteHTML($html);
                //$mpdf->Output($pdfFilePath, "D");
               // //generate the PDF from the given html
               $this->m_pdf->pdf->WriteHTML($html);
         
               //  //download it.
               $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
            }

        }