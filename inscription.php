<?php
include('config.php'); // Inclusion de la connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage du mot de passe

    // Vérifier si l'email existe déjà
    $sql = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);

    if ($stmt->rowCount() > 0) {
        echo "Cet email est déjà utilisé.";
    } else {
        // Insérer les données dans la base de données
        $sql = "INSERT INTO utilisateurs (prenom, nom, email, password) 
                VALUES (:prenom, :nom, :email, :password)";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute([':prenom' => $prenom, ':nom' => $nom, ':email' => $email, ':password' => $password])) {
            echo "Inscription réussie !";
        } else {
            echo "Erreur lors de l'inscription.";
        }
    }
}
?>
