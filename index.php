<?php

include("Chat.php");
include("Chien.php");
include("Animalerie.php");

$chat1 = new Chat("Mimi");
$chien1 = new Chien("Sammy");
$chat2 = new Chat("Coquine");
$chat3 = new Chat("Kitty");
$chien2 = new Chien("Kris");


$animalerie1 = new Animalerie("Geopets");

$animalerie1->ajoutAnimal($chat1);
$animalerie1->ajoutAnimal($chien1);
$animalerie1->ajoutAnimal($chat2);
$animalerie1->ajoutAnimal($chat3);
$animalerie1->ajoutAnimal($chien2);

$animalerie1->compterAnimaux();
echo "<br>";

$animalerie1->afficherTousAnimaux();