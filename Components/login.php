<?php

$usuario="";
$password="";

$messages["usuario"]="";
$messages["password"]="";

$allOk=false;
$smarty->assign('messageError',"");
if(isset($_POST["usuario"])){
    $allOk=true;

    $result=verifyParams("usuario");
    $result["valid"] ? $usuario=$result["value"]:$messages["usuario"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;

    $result=verifyParams("password");
    $result["valid"] ? $password=$result["value"]:$messages["password"]=cartelError($result["value"]);
    $result["valid"] ? :$allOk=false;    
}
if ($allOk){
    $resultSQL=$db->users->login($usuario,$password);
    

    if ($db->db->numRows()>0){
        // echo "correcto logeado";
        $_SESSION["id"]=$resultSQL["id"];
        $_SESSION["usuario"]=$resultSQL["usuario"];        
        
        $smarty->assign("usuarioLoged",$_SESSION["usuario"]);

        $smarty->assign('headerMessage',cartelHide("Bienvenido ".$resultSQL['nombre']." ".$resultSQL['apellido']));
        $showMain=true;
    }else{        
        // echo "incorrecto logeado";
        $smarty->assign('messageError',cartelHide("El usuario o contraseña no coinciden"));                
        $smarty->display("login.tpl");
    }
    
    
}else{
    $smarty->display("login.tpl");
}






?>