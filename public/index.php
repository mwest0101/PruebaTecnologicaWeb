<?php
session_start();
define("PATH_COMP",realpath(dirname(__FILE__)).'/../Components/');
include(realpath(dirname(__FILE__))."/../inc/includes.inc.php");
include(realpath(dirname(__FILE__))."/../Smarty/libs/Smarty.class.php");

use Smarty\Smarty;
$smarty = new Smarty();

$smarty->setTemplateDir(realpath(dirname(__FILE__)).'/../templates');

$titulo="Smarty y consulta a base de datos";

$showMain=true;
$headerMessage="";

if(isset($_SESSION["usuario"]) and $_SESSION["usuario"]!=""){
    $usuarioLoged=$_SESSION["usuario"];
}else{
    $usuarioLoged="";
}

$db=new Mysql_inc();
// $result=$db->users->getAll();


// $smarty = new Smarty();
// $smarty->debugging=true;
$smarty->assign('titulo',NOMBRE_SITIO);
$smarty->assign('headerMessage',$headerMessage);
// $smarty->assign('res',$result);
$smarty->assign("usuarioLoged",$usuarioLoged);
$smarty->display('header.tpl');

if(isset($_GET["action"])){
    
    
    if($_GET["action"]=="register"){       
        $showMain=false;     
        include(PATH_COMP."register.php");
    }elseif($_GET["action"]=="login"){            
            $showMain=false;     
            include(PATH_COMP."login.php");
    }elseif($usuarioLoged!="" && $_GET["action"]=="salir"){   
        session_destroy();         
        $smarty->assign("usuarioLoged","");
        
        
    }elseif($usuarioLoged!="" && $_GET["action"]=="modify"){            
        $showMain=false;     
        include(PATH_COMP."modify.php");
    }elseif($usuarioLoged!="" && $_GET["action"]=="borrar"){            
        $showMain=false;     
        include(PATH_COMP."borrar.php");
    }

}

$result=$db->users->getAll();
$smarty->assign("result",$result);

if(!isset($_GET["action"]) || $showMain){
    
    $smarty->display('menu.tpl');

    
    
    $smarty->display('main.tpl');
    $showMain=false;
}

$smarty->display('footer.tpl');


