<?php
session_start(); // Démarrer la session
include('config.php'); // Inclusion de la connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si l'utilisateur existe
    $sql = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Les identifiants sont corrects, on démarre une session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['nom'] = $user['nom'];

        echo "Connexion réussie ! Bienvenue " . $_SESSION['prenom'];
        // Rediriger vers une page protégée (ex: tableau de bord)
        header("Location: index.php");
        exit();
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}
?>
