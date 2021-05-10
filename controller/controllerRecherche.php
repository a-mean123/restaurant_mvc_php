
<?php

    
require_once("{$ROOT}{$DS}model{$DS}modelPlat.php");

$controller ='recherche';


if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
 
        if(isset($_REQUEST['titre'])){
			$titre = $_REQUEST['titre'];
			$tab_p = ModelPlat::recherche($titre);
            $pagetitle = "Resultat de recherche";
            $view = "recherche";
            require ("{$ROOT}{$DS}view{$DS}view.php");
			}	

        break;




	
	


}



 
?>