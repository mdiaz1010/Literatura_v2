<?php ?>
<!DOCTYPE html>
<html lang="es"> 
        <?=$this->load->view("plantillas_base/standar/head",(isset($head))? array('headData'=> &$head):'' ,true);?>
        <?=$this->load->view("plantillas_base/standar/header",(isset($header))? array('headerData'=> &$header):'' ,true);?>
        <?=$this->load->view("bodys/".$body ,(isset($bodyData))? array('bodyData'=> &$bodyData):'',true);?> 
        <?=$this->load->view("plantillas_base/standar/footer",(isset($footer))?array('footerData'=> &$footer):'',true);?>
</html>