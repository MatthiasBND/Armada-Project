<?php
// Paramètres de connexion à la base de données
$host = '172.18.214.59';
$username = 'ArmadaAdmin';
$password = 'btssnir';
$dbname = 'armada_projet';

if (!empty($_POST)) {
    /*Teste si le tableau $_POST contient des données soumises 
    par le formulaire. */


    $user_nom = $_POST["user_nom"];
    $user_prenom = $_POST["user_prenom"];
    $user_datenaissance = $_POST["user_datenaissance"];
    $user_adressemail = $_POST["user_adressemail"];
    /*Récupération des données soumises par le formulaire 
    dans des variables */
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*Création d'un objet PDO pour 
        la connexion à la base de données.*/

        $sql = "INSERT INTO utilisateur (nom, prenom, dateDeNaissance, adresseMail) VALUES (:value1, :value2, :value3, :value4)";

        $statement = $pdo->prepare($sql);
        $statement->bindParam(":value1", $user_nom);
        $statement->bindParam(":value2", $user_prenom);
        $statement->bindParam(":value3", $user_datenaissance);
        $statement->bindParam(":value4", $user_adressemail);
        $statement->execute();
        /*Préparation de la requête d'insertion SQL avec des paramètres nommés et liaison des valeurs des variables récupérées à ces paramètres.
         Exécution de la requête avec la méthode execute().*/

        echo "Données insérées avec succès.";


    } 
    
    catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    /*Capture d'une exception PDO en cas d'erreur de connexion à la base de données ou d'erreur d'exécution de la requête SQL
     et affichage d'un message d'erreur correspondant.*/
    
}
?>



