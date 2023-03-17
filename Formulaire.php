<?php
// Paramètres de connexion à la base de données

$host = 'localhost';
$username = 'ArmadaAdmin';
$password = 'btssnir';
$dbname = 'armada_projet';


// Connexion à la base de données
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn->connect_error) {
    die("Connexion échouée: " . mysqli_connect_error());
}
echo "Connexion réussie";



    $user_nom =  $_POST["user_nom"];
    $user_prenom =  $_POST["user_prenom"];
    $usernombateau =  $_POST["user_nombateau"];
    $usernombateau =  $_POST["user_datenaissance"];
    $usernombateau =  $_POST["user_adressemail"];

    $reqUti = "INSERT INTO utilisateur (nom, prenom, dateDeNaissance,adresseMail) VALUES ('$user_nom', '$user_prenom', '$user_datenaissance','$user_adressemail')";
    $reqRes = "INSERT INTO reservation (nom, prenom, dateDeNaissance,adresseMail) VALUES ('$user_nom', '$user_prenom', '$user_datenaissance','$user_adressemail')";

    $sql = "INSERT INTO reservation select from utilisateur id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Votre message a été envoyé avec succès.";
    } 
    
    else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>