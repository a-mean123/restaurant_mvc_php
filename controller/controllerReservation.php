<?php

    
$controller = 'reservation';
      
 //   require("{$ROOT}{$DS}view{$DS}view.php");


 require_once ("{$ROOT}{$DS}model{$DS}modelReservation.php"); // chargement du modèle

 if(isset($_REQUEST['action']))	
 /* recupère l'action passée dans l'URL*/
     $action = $_REQUEST['action'];
 /* NB: On a ajouté un comportement par défaut avec action=readAll.*/
     else $action="creat";	
     
 switch ($action) {
     case "creat":
         $pagetitle = "reservationez nous";
         $view = "reservation";
         require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
         break;
 
  
         
     case "delete":
         if(isset($_REQUEST['id'])){
             $id = $_REQUEST['id'];
             $del = Modelreservation::select($id);
             if($del!=null){
             $del->delete($id);
             header('Location: index.php?controller=admin&action=reservation');
             }
         }
         break;
         

         
     case "created":
         if(isset($_REQUEST['name']) && isset($_REQUEST['tel']) 
         && isset($_REQUEST['email'])  && isset($_REQUEST['date'])  
         && isset($_REQUEST['heure']) && isset($_REQUEST['drone']) && isset($_REQUEST['nbrp'])
          && isset($_REQUEST['nbrt']) && isset($_REQUEST['type'])
         ){

             $name = $_REQUEST["name"];
             $tel = $_REQUEST["tel"];
             $email = $_REQUEST["email"];
            
             $date = $_REQUEST["date"];
            
             $heure = $_REQUEST["heure"];
             $drone = $_REQUEST["drone"];
             $nbrp = $_REQUEST["nbrp"];
             $nbrt = $_REQUEST["nbrt"];
             $type = $_REQUEST["type"];


            $id = NULL;
             
             
            
                 $u = new ModelReservation($name, $tel, $email , $date, $heure , $drone , $nbrp , $nbrt, $type);	
                 $tab = array(
                 "id" => $id,    
                 "name" => $name,
                 "tel" => $tel,
                 "email" => $email,
              
                 "date" => $date,
                 
                 "heure" => $heure,
                 "drone" => $drone,
                 "nbrp" => $nbrp,
                 "nbrt" => $nbrt,
                 "type" => $type,




                 );		
                 
                 $u->insert($tab);
                 $pagetitle = "reservation Enregistré";
                 $view = "reservation";
                 require ("{$ROOT}{$DS}view{$DS}view.php");
             
         }
         break;
     
     case "update":
         if(isset($_REQUEST['ncin'])){
             $ncin = $_REQUEST['ncin'];
             $up = Modelreservation::select($ncin);
             if($up!=null){
                 $pagetitle = "Modifier l'utilisateur";
                 $view = "update";
                 require ("{$ROOT}{$DS}view{$DS}view.php");			
             }
             
         }
         break;
         
     case "updated":
         if(isset($_REQUEST['ncin']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])){
             $oldncin = $_REQUEST['ncin'];
             $tab = array(
                 "ncin" => $_REQUEST["ncin"],
                 "nom" => $_REQUEST["n"],
                 "prenom" => $_REQUEST["p"]
                 );
             $o = Modelreservation::select($oldncin);
             if($o!=null){
                 $u = $o->update($tab, $oldncin);		
                 $pagetitle = "Utilisateur modifié";
                 $view = "updated";
                 require ("{$ROOT}{$DS}view{$DS}view.php");
             }
         }	
         break;
 }






?>