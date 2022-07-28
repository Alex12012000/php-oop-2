<?php 

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/PetFood.php";
require_once __DIR__ . "/PetToy.php";
require_once __DIR__ . "/PetGadget.php";

$crocchette = new PetFood('Friskas', 2);
$osso = new petToy('osso di gomma', 5);
$cuccia = new PetGadget('cuccia', 5);

var_dump($crocchette->getData());
var_dump($osso->getData());
var_dump($cuccia->getData());


?>