<?php

namespace Object_poo\Personne\Enfant;
use Object_poo\Personne\Adult\Adult;


class Enfant extends Adult{

    private $pere;
    private $mere;

    public function __construct($nom, $prenom, $age)
    {
        parent:: __construct($nom, $prenom, $age);

        Enfant::info();
        
    }



    /**
     * Get the value of pere
     */ 
    public function getPere()
    {
        return $this->pere;
    }

    /**
     * Set the value of pere
     *
     * @return  self
     */ 
    public function setPere($pere)
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * Get the value of mere
     */ 
    public function getMere()
    {
        return $this->mere;
    }

    /**
     * Set the value of mere
     *
     * @return  self
     */ 
    public function setMere($mere)
    {
        $this->mere = $mere;

        return $this;
    }

     public function Afficher()
    {
        # code...
        echo " Il est le fils de ".$this->getPere()." et sa  mere est ".$this->getMere();

        parent::info();
    }
}



?>