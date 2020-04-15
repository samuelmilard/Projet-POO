<?php

class Perso
{
//declaration de var

private $_PersoName;
private $_HP;
private $_Strong;
private $_Agility;
private $_Speed;


//Initialisation de notre classe
public function __construct($PersoName, $HP, $Strong, $Agility, $Speed) {

    echo 'Nouveau personnage...  <br><br>';

$this->_PersoName = $PersoName;
$this->_HP = $HP;
$this->_Strong = $Strong;
$this->_Agility = $Agility;
$this->_Speed = $Speed;
}


public function getPersoName(){

    return $this->_PersoName;
}

public function getHP(){

    return $this->_HP;
}

public function getStrong(){

    return $this->_Strong;
}

public function getAgility(){

    return $this->_Agility;
}

public function getSpeed(){

    return $this->_Speed;
}

public function setPersoName( $PersoName ){
    if(is_string($PersoName)){
        $this->_PersoName = $PersoName;
    }
    }


public function annonce() {
    echo "Nouveau personnage correctement enregistré ! <br><br>";
    echo "Le Nom du Personnage est : ";
    echo $this->_PersoName;
    echo'<br>';
    echo "Les PV du Personnage sont de : ";
    echo $this->_HP;
    echo "%";
    echo'<br>';
    echo "La Force du Personnage est de : ";
    echo $this->_Strong;
    echo "%";
    echo'<br>';
    echo "L'Agilité du Personnage est de : ";
    echo $this->_Agility;
    echo "%";
    echo'<br>';
    echo "La Vitesse du Personnage est de : ";
    echo $this->_Speed;
    echo "%";
    echo'<br>';

  }

}

?>