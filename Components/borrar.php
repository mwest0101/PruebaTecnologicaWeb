<?php

$usuario="";
$password="";
$rPassword="";

$messages["usuario"]="";
$messages["password"]="";

$allOk=false;
$smarty->assign('messageError',"");
if ($_SESSION["id"]!=""){

    if(isset($_POST["password"])){
        $allOk=true;

        $result=verifyParams("password");
        $result["valid"] ? $password=$result["value"]:$messages["password"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false;

        $result=verifyParams("rPassword");
        $result["valid"] ? $rPassword=$result["value"]:$messages["rPassword"]=cartelError($result["value"]);
        $result["valid"] ? :$allOk=false; 
        
        if ($password!=$rPassword and ($password!="" and $rPassword!="")){      
            $allOk=false;
            $smarty->assign('messageError',cartelError("Los password no coinciden"));       
        }    
    }
    
}

if ($allOk){
    $resultSQL=$db->users->login($_SESSION["usuario"],$password);    
    if ($db->db->numRows()>0){
        // echo "correcto logeado";
        // $_SESSION["id"]=$resultSQL["id"];
        // $_SESSION["usuario"]=$resultSQL["usuario"];        
        
        // $smarty->assign("usuarioLoged",$_SESSION["usuario"]);
        if(isset($_GET["id"]) && $_GET["id"]){
            $user=$db->users->getById($_GET["id"]);
            // // echo "User=".$user["id"];
            // var_dump($user);

            if($user!=null){
                $smarty->assign('headerMessage',cartelHide("Se elimino el usuario ".$user["usuario"]));                
                $db->users->deleteById($_GET["id"]);
               
            }
            $_GET["action"]="";
        }else{
            $db->users->enableOrdissableById($_SESSION["id"],0);
            $smarty->assign('headerMessage',cartelHide("Se elimino el usuario ".$_SESSION["usuario"]));
            session_destroy();         
            $smarty->assign("usuarioLoged","");
            
        }
        $showMain=true;          
    }else{        
        // echo "incorrecto logeado";
        $smarty->assign('messageError',cartelError("El usuario o contraseña no coinciden"));                
        $smarty->display("borrar.tpl");
    }
    
    
}else{
    
    $smarty->display("borrar.tpl");
}






?>