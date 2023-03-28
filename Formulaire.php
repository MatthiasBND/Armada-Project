<?php
// Paramètres de connexion à la base de données
$host = 'localhost';
$username = 'ArmadaAdmin';
$password = 'btssnir';
$dbname = 'armada_projet';

// Connexion à la base de données
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . mysqli_connect_error());
}
echo "Connexion réussie";

$user_nom = $_POST["user_nom"];
$user_prenom = $_POST["user_prenom"];
$user_datenaissance = $_POST["user_datenaissance"];
$user_adressemail = $_POST["user_adressemail"];

$reqUti = "INSERT INTO utilisateur (nom, prenom, dateDeNaissance, adresseMail) VALUES ('$user_nom', '$user_prenom', '$user_datenaissance', '$user_adressemail')";
$reqRes = "INSERT INTO reservation (nom, prenom, dateDeNaissance, adresseMail) VALUES ('$user_nom', '$user_prenom', '$user_datenaissance', '$user_adressemail')";

if ($conn->query($reqUti) === TRUE && $conn->query($reqRes) === TRUE) {
    echo "Votre message a été envoyé avec succès.";
} else {
    echo "Erreur : " . $conn->error;
}

$conn->close();
?>

