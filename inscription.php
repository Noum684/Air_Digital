<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'travel');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$name = $_POST['prenom'];
$name = $_POST['nom'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Insérer les données dans la base de données
$sql = "INSERT INTO users (prenom,nom, email, password) VALUES (''$prenom',$nom', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie!";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
