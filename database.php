<?php
$host = 'localhost';  // Hôte de la base de données
$db = 'travel';  // Nom de la base de données
$user = 'root';       // Nom d'utilisateur de la base de données
$pass = '';           // Mot de passe de la base de données

try {
    $bdd= new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8;','root','');
} 
catch (Exception $e) {
    die('Une erreur a été trouvée:'.$e->getMessage());
}
?>