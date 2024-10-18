<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'travel');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier si l'utilisateur existe
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Connexion réussie!";
    } else {
        echo "Mot de passe incorrect.";
    }
} else {
    echo "Aucun utilisateur trouvé avec cet email.";
}

$conn->close();
?>
