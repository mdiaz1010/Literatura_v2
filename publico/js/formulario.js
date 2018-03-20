$("#btnEnviar").click(function(){
    var nombre=$("#name").val();
    var correo=$("#email").val();
    var mensaje=$("#men").val();
    var telefono=$("#telefono").val();

    if(nombre!=='' || correo!=='' || mensaje!=='' || telefono!==''){
    $.ajax({
        type : "POST",
        url : "enviarFormulario",
        data: $("#enviarFormulario").serialize(),
        success : function(){             
            $("#envio").html("<font color ='green'>ENVIO CORRECTO EN BREVE LE RESPONDEREMOS</font>");
            $("#enviarFormulario")[0].reset();
            $('#result_error').html("");
            return false;
            
        }
    }); 
    }else{
            $("#envio").html("<font color ='red'>ENVIO INCORRECTO COMPLETAR TODOS LOS CAMPOS</font>");
    }
});