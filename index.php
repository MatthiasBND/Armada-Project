<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Armada Projet';

if(!empty($_POST)){

    $user_nom =  $_POST["user_nom"];
    $user_prenom =  $_POST["user_prenom"];
    $usernombateau =  $_POST["user_nombateau"];


}
// Connexion à la base de données
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}
echo "Connexion réussie";

// Fermer la connexion
mysqli_close($conn);


?>