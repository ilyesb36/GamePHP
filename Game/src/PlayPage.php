<?php

require 'PDOFactory.php';
require 'BaseManager.php';
require 'PersonnageManager.php';

$id = $_POST['id'];

$manager = new PersonnageManager(PDOFactory::getMySqlConnection());
$allPersosExceptYours = $manager->getAllPersonnagesExceptYours($id);

if ($allPersosExceptYours->rowCount()==0) {
    echo "Pas encore de persos";
}
else {
    while($data = $allPersosExceptYours->fetch()){
        echo ("ID : " . $data['id'] ." NOM : " . $data['name'] . " CLASSE : " . $data['classe'] . " PDV : ". $data['health']);
        echo '<a href="AttaquePage.php?current=' . $data['id'] . '">ATTAQUER</a>';
        echo "<br>";
    }
}