<?php

    

$pagetitle = 'Admin';
$view = 'admin';
$controller = 'admin';
  

require("{$ROOT}{$DS}view{$DS}admin.php");

require_once("./model/modelContact.php");
require_once("./model/modelPlat.php");
require_once("./model/modelReservation.php");





if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="plat";	
	
switch ($action) {
    case "plat":
        $pagetitle = "Admin panel";
        $view = "Plat";
       
        $tab_p = modelPlat::getAll();
        require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
        break;


    case "contact":
        $pagetitle = "Admin panel";
        $view = "Contact";
        $tab_c = modelContact::getAll();
       //	$tab_c = modelContact::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
        break;

      
            
            
    
        case "reservation":
            $pagetitle = "Admin panel";
            $view = "reservation";
            $tab_r = modelReservation::getAll();
           //	$tab_c = modelContact::getAll();//appel au modèle pour gerer la BD
            require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
            break;
       


                    case "createplat":
                        
                        $pagetitle = "Admin panel";
                        $view = "ajoutPlat";
                       require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                        break;   


                 

                            case "createReservation":
                              
                                $pagetitle = "Admin panel";
                                $view = "ajoutReservation";
                               require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                                break;   


                                case "read":	
                                    if(isset($_REQUEST['id'])){
                                        $id = $_REQUEST['id'];
                                        $u = ModelReservation::select($id);
                                            if($u!=null){
                                                $pagetitle = "Details de Reservation";
                                                $view = "updateReservation";
                                                require ("{$ROOT}{$DS}admin.php");
                                            }
                                        }	
                                    break;


                                    case "readplat":	
                                        if(isset($_REQUEST['id'])){
                                            $id = $_REQUEST['id'];
                                            $u = ModelPlat::select($id);
                                                if($u!=null){
                                                    $pagetitle = "Details de Plat";
                                                    $view = "updatePlat";
                                                    require ("{$ROOT}{$DS}admin.php");
                                                }
                                            }	
                                        break;
}



 
?>
