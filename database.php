<?php
$host = 'localhost';  // Hôte de la base de données
$db = 'travel';  // Nom de la base de données
$user = 'root';       // Nom d'utilisateur de la base de données
$pass = '';           // Mot de passe de la base de données

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Mode d'erreur PDO pour afficher les exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>