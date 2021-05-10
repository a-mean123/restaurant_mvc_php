<?php

$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;


$controleur_default = 'home';


if(!isset($_REQUEST['controller']))
    $controller = $controleur_default;

    else $controller = $_REQUEST['controller'];

    switch($controller){

      
        case 'home':
                require("{$ROOT}{$DS}controller{$DS}controllerHome.php");
                break;

                case 'admin':
                    require("{$ROOT}{$DS}controller{$DS}controllerAdmin.php");
                    break;

                    
                case 'contact':
                    require("{$ROOT}{$DS}controller{$DS}controllerContact.php");
                    break;
         
                    case 'maps':
                        require("{$ROOT}{$DS}controller{$DS}controllerMaps.php");
                        break;


                    case 'plat':
                        require("{$ROOT}{$DS}controller{$DS}controllerPlat.php");
                        break;
                        case 'recherche':
                            require("{$ROOT}{$DS}controller{$DS}controllerRecherche.php");
                            break;
    

                        case 'reservation':
                            session_start();

                            if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
                                {
	                        	header("location: index.php?controller=login");
                                }

                                if(($_SESSION['role']==1))
                                    {

                            require("{$ROOT}{$DS}controller{$DS}controllerReservation.php");

                        
                                    }
                                    else{
                            require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");

                                    }
                            break;
    

                        case 'login':
                            require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");
                           break;   
    }


?>