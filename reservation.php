<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "air_digital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Si le formulaire de réservation est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $ville = $_POST['ville'];
    $date_depart = $_POST['datedep'];
    $date_retour = $_POST['datefn'];
    $passengers = $_POST['passengers'];

    $sql = "INSERT INTO reservations (prenom,nom, email, ville, datedb, datefn,passengers)
            VALUES ('$prenom','$nom', '$email', '$ville', '$date_depart', '$date_retour','$passengers')";

    if ($conn->query($sql) === TRUE) {
        echo "Réservation effectuée avec succès.";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
