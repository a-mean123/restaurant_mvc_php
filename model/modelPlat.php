<?php

require_once("model.php");

class ModelPlat extends Model{
    private $id= NULL;
    private $titre;
    private $description;
    private $image;
    private $prix;
   
    protected static $table = 'plat';
    protected static $primary = 'id';


    public function __construct( $titre = NULL, $description = NULL , $image = NULL , $prix = NULL)
    {
        if (!is_null($titre) && !is_null($description) && !is_null($image) && !is_null($prix)) {
            $this->titre = $titre;
            $this->description = $description;
            $this->image = $image;
            $this->prix = $prix;

           }
        
    }

    public function getId(){
        return $this->id;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getDescription(){

        return $this->description;
    }
    public function getImage(){
        return $this->image;
    }
    public function getprix(){
        return $this->prix;
    }


}


?>