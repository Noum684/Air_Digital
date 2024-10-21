<?php
// Connexion à la base de données
include('database.php');

// Si le formulaire de réservation est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $destination = $_POST['destination'];
    $datedeb = $_POST['datedeb'];
    $datefn = $_POST['datefn'];
    $passengers = $_POST['passengers'];

    // Préparer l'insertion dans la base de données
    $sql = "INSERT INTO reservations (prenom, nom, email, destination, datedeb, datefn, passengers) 
            VALUES (:prenom, :nom, :email, :destination, :datedeb, :datefn, :passengers)";

    $stmt = $pdo->prepare($sql);

    // Exécuter la requête avec les données du formulaire
    $stmt->execute([
        ':prenom' => $prenom,
        ':nom' => $nom,
        ':email' => $email,
        ':destination' => $destination,
        ':datedeb' => $datedeb,
        ':datefn' => $datefn,
        ':passengers' => $passengers
    ]);

    echo "Réservation effectuée avec succès!";
}
?>
