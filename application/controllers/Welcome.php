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

    public function nosotros_borrador_de_papa_correctores()
    {
        $this->htmlData['body']                           = "Welcome/nosotros";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);
    }

    public function contactenos_borrador_de_papa_correctores(){
        $this->htmlData['body']                           = "Welcome/contactenos";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }
     public function servicios_borrador_de_papa_correctores(){
        $this->htmlData['body']                           = "Welcome/servicios";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function trabaja_borrador_de_papa_correctores(){
        $this->htmlData['body']                           = "Welcome/trabaja";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t01_jose_paolillo_torres(){
        $this->htmlData['body']                           = "Welcome/t01";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t02_pierre_chan_pinedo(){
        $this->htmlData['body']                           = "Welcome/t02";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t03_alonso_belaunde_degregori(){
        $this->htmlData['body']                           = "Welcome/t03";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t04_piero_gomez_carbonel(){
        $this->htmlData['body']                           = "Welcome/t04";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }

    public function t05_jose_dammert_bello(){
        $this->htmlData['body']                           = "Welcome/t05";
        $this->load->view('plantillas_base/standar/body',$this->htmlData);

    }
    public function cotizacion_virtual()
    {
        $this->htmlData['body']                           = "Welcome/cotizacion_virtual";
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
            $list= array('marcodiazzavala@gmail.com,jmpaolillotorres@gmail.com,p.chan@pucp.pe,jpaolillo@papacorrectores.com,pchan@papacorrectores.com,info@papacorrectores.com');
            $this->email->to("info@papacorrectores.com");
            $this->email->cc($list);
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
