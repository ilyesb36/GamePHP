<?php
require 'PDOFactory.php';
require 'BaseManager.php';
require 'PersonnageManager.php';
require 'Personnage.php';
require 'Mage.php';
require 'Guerrier.php';


$manager = new PersonnageManager(PDOFactory::getMySqlConnection());

$nom = $_POST['nom'];
$classe  = $_POST['classe'];


if ($nom == ""){ // Valeur du nom par défaut
    $nom="Shesh";
}

if ($classe == "Mage"){
    $manager->addPersonnage(new Mage($nom), $classe);
}
elseif ($classe == "Guerrier"){ //get_class à gérer
    $manager->addPersonnage(new Guerrier($nom), $classe);
}

header("Location: index.php");