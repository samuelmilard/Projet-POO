<?php

require_once('class.php');

$NomPerso = 'Sorcier';
$perso1 = new Perso('$NomPerso','250','450','750','600');
$perso1->annonce();

$perso2 = new Perso('Gobelin','50','150','1250','900');
$perso2->annonce();

$perso3 = new Perso('Demi-Dieu','850','650','250','300');
$perso3->annonce();

$perso4 = new Perso('Chevalier','450','350','350','200');
$perso4->annonce();

$perso5 = new Perso('Dragon','1250','850','100','50');
$perso5->annonce();






?>