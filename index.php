<?php

require_once('class.php');

$NomPerso = 'Sorcier';
$perso1 = new Perso("$NomPerso",'250','650','550','650');

$PersoName = $perso1->getPersoName();
$perso1->annonce();

echo '<br>';



$NomPerso = 'Gobelin';
$perso1 = new Perso("$NomPerso",'50','200','950','800');

$PersoName = $perso1->getPersoName();
$perso1->annonce();

echo '<br>';






?>

<!--
$perso2 = new Perso('Gobelin','50','150','1250','900');
$perso2->annonce();--!>