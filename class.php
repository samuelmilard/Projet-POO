<?php

class Perso
{
//declaration de var

private $_PersoName;
private $_HP;
private $_Strong;
private $_Agility;
private $_Speed;
private $_NombreDeJoueur;

//Initialisation de notre classe
public function __construct($PersoName, $HP) {

    echo 'Le perso a bien été créé ! <br>';

$this->_PersoName = $PersoName;
$this->_HP = $HP;
$this->_Strong = $Strong;
$this->_Agility = $Agility;
$this->_Speed = $Speed;
$this->_NombreDeJoueur = 0;
}



public function annonce() {
    echo "Nouveau personnage correctement enregistré <br>";
    echo "Le Nom du Personnage est :";
    echo $this->_PersoName;
    echo'<br>';
    echo "Les PV du Personnage sont de :";
    echo $this->_HP;
    echo "%";
    echo'<br>';
    echo "La Force du Personnage est de:";
    echo $this->_Strong;
    echo "%";
    echo'<br>';
    echo "L'Agilité du Personnage est de :";
    echo $this->_Agility;
    echo "%";
    echo'<br>';
    echo "La Vitesse du Personnage est de :";
    echo $this->_Speed;
    echo "%";
    echo'<br>';
    echo "Le Nombre de joueur ayant utilisé ce personnage est :";
    echo $this->_NombreDeJoueur;
    echo'<br>';

  }

public function incrementSpectateur() {
    $this->_NombreDeJoueur = $this->_NombreDeJoueur +1;
    echo 'Le Nombre de joueur ayant utilisé ce personnage est maintenant de : '
    echo $this->_NombreDeJoueur;
    echo'<br>';


}
}

?>