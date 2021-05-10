<?php

require_once("model.php");

class ModelReservation extends Model{
    private $id = NULL;
    private $name;
    private $tel;
    private $email;
    private $date;
    private $heure;
    private $drone;
    private $nbrp;
    private $nbrt;
    private $type;





    protected static $table = 'reservation';
    protected static $primary = 'id';


    public function __construct( $name = NULL, $tel = NULL , $email = NULL 
    , $date = NULL, $heure = NULL , $drone = NULL , $nbrp = NULL , $nbrt = NULL , $type = NULL)
    {
       
        if (!is_null($name) && !is_null($tel) && !is_null($email) 
         && !is_null($date) 
        && !is_null($heure)  && !is_null($drone)  && !is_null($nbrp) && !is_null($nbrt) && !is_null($type)) 
        {

            $this->name = $name;
            $this->tel = $tel;
            $this->email = $email;
           
            $this->date = $date;
            
            $this->heure = $heure;
            $this->drone = $drone;

            $this->nbrp = $nbrp;
            $this->nbrt = $nbrt;
            $this->type = $type;

         

        }
    }

    
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getTel(){
        return $this->tel;
    }
    public function getEmail(){
        return $this->email;
    }

    public function getDate(){
        return $this->date;
    }

    public function getHeure(){
        return $this->heure;
    }
    public function getDrone(){
        return $this->drone;
    }
    public function getNbrp(){
        return $this->nbrp;
    }

    public function getNbrt(){
        return $this->nbrt;
    }

    public function getType(){
        return $this->type;
    }

}


?>