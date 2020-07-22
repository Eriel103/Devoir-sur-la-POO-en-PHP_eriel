<?php

namespace Object_poo\Personne\Adult;

Class Adult{

    public $nom, $prenom, $age, $genre;

    const info=" \n les informations ici present sont correctes";

    public function __construct($nom, $prenom, $age, $genre)
{

    $this->nom= $nom;
    $this->prenom= $prenom;
    $this->age=$age;
    $this->genre=$genre;


}

// public function __destruct(){

// }

public static function welcome(){

    echo"ibintu vyakomeye";
 }

public function afficher(){

    echo " Le nom est ".$this->nom." son prenom est ".$this->prenom." et il  est age de ".$this->age."est du genre".$this->genre;

    echo Adult::Forme;
}

}



?>