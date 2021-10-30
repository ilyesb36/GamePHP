<?php
require 'PDOFactory.php';
require 'BaseManager.php';
require 'PersonnageManager.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Example</title>
</head>
<body>
<p>CREEZ VOS PERSOS !!</p>

<form action="AddPerso.php" method="post">
    <p>Votre nom : <input type="text" name="nom"/></p>
    <p>Choisi une classe:</p>
    <select name="classe" id="classe">
        <option value="Mage">Mage</option>
        <option value="Guerrier">Guerrier</option>
    </select>
    <p><input type="submit" value="OK"></p>
</form>


<p>VOICI VOS PERSOS !!</p>

<?php
$manager = new PersonnageManager(PDOFactory::getMySqlConnection());
$allPersos = $manager->getAllPersonnages();

if ($allPersos->rowCount()==0) {
    echo "Pas encore de persos";
}
else {
    while($data = $allPersos->fetch()){
        echo ("ID : " . $data['id'] ." NOM : " . $data['name'] . " CLASSE : " . $data['classe'] . " PDV : ". $data['health']);
        echo '<a href="PlayPage.php?current=' . $data['id'] . '">PLAY</a>';
        echo "<br>";
    }
}
?>
</body>
</html>