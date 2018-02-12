<?php 
$Prenom= $_POST["prenom"];
$Nom= $_POST["nom"];
$Age= $_POST["age"];
$Nourriture= $_POST["Nourriture"];
$Genre= $_POST["genre"];
$Pays= $_POST["Pays"];


$con=mysqli_connect("localhost","root","root","thomas");
mysqli_query($con,"INSERT INTO users (Prenom,Nom,Age,Nourriture,Genre,Pays) VALUES ('".$Prenom."','".$Nom."',".$Age.",'".$Nourriture."','".$Genre."','".$Pays."')");

include("header.html");
?>
    <p>Prenom: <?php echo $Prenom ?></p>
    <p>Nom: <?php echo $Nom ?></p>
    <p>Age: <?php echo $Age ?></p>
    <p>Sexe: <?php echo $Genre ?></p>
    <p>Nourriture: <?php echo $Nourriture ?></p>
    <p>Pays: <?php echo $Pays ?></p>
<?php
include("footer.html");
?>