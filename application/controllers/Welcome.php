<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public $htmlData = array(); 
    public function __construct() {
        parent::__construct();               
        $this->htmlData = array(
            "body"=> get_class($this) 
            ,"bodyData"=> (object) array()
            ,"headData"=> (object) array("titulo"=>"Crear Cliente")
            ,"footerData"=> (object) array());               
    }    
	
	public function index()
	{
        $this->htmlData['body']                           = "Welcome/principal";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);
    }

    public function nosotros()
    {
        $this->htmlData['body']                           = "Welcome/nosotros";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);
    }

    public function contactenos(){
        $this->htmlData['body']                           = "Welcome/contactenos";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }
     public function servicios(){
        $this->htmlData['body']                           = "Welcome/servicios";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function trabaja(){
        $this->htmlData['body']                           = "Welcome/trabaja";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t01(){
        $this->htmlData['body']                           = "Welcome/t01";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t02(){
        $this->htmlData['body']                           = "Welcome/t02";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t03(){
        $this->htmlData['body']                           = "Welcome/t03";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }
    public function t04(){
        $this->htmlData['body']                           = "Welcome/t04";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t05(){
        $this->htmlData['body']                           = "Welcome/t05";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }
    public function enviarFormulario(){
            $correo=$this->input->post('email');
            $nombre=$this->input->post('name');
            $mensaje=$this->input->post('men');
            $telefono=$this->input->post('telefono');
            $this->load->library('email');       
            $asunto= "El Sr. ".$nombre.' con '.'teléfono :  '.$telefono.' manifiesta que:'.$mensaje;        
            $this->email->from($correo,$nombre);
            $this->email->to("info@papacorrectores.com");
            $this->email->cc('marcodiazzavala@gmail.com');
            $this->email->subject('Desde la pagina web');
            $this->email->message($asunto);
                     
            if($this->email->send()){
             
                ?>
                <script>
                    alert("Mensaje enviado con satisfacción, en breve nos comunicaremos con usted.");
                </script>
                <?php
                }else{
                ?>
                <script>
                    alert("Sucedió algun error por favor vuelva a intentar.");
                </script>                
                
                <?php
                }
            //con esto podemos ver el resultado
            
    }
}
