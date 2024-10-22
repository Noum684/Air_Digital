<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription - Air Digital</title>
</head>
<body>

    <section id="inscription">
        <h1 class="title">Inscription</h1>
        <form action="" method="post">
            <label for="name">Prénom</label>
            <input type="text" name="prenom" required>
            <label for="name">Nom </label>
            <input type="text" name="nom" required>

            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" required>

            <button type="submit" name="valider">S'inscrire</button>
        </form>
    </section>
    <script src="script.js"></script>

</body>
</html>





<?php
include('database.php'); // Inclusion de la connexion à la base de données

if (isset($_POST['valider'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage du mot de passe

    // Préparer la requête d'insertion

    $donne=$bdd->query("select * from users");
    $info=$donne->fetchAll();
    foreach($info as $col){
        echo $col['prenom'];
    }
    $requet=$bdd->exec("INSERT into users(prenom,nom,email,pass) values('$prenom','$nom','$email','$password')");
    if($requet==true){
        echo "Inscription réussie! Vous pouvez maintenant vous connecter.";
        header('Location:Connexion.html');
    }
    else{
        echo "insertion echoué";
        header('Location:index.html');
    }
   /* $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Inscription réussie! Vous pouvez maintenant vous connecter.";
        header("Location: connexion.php"); // Rediriger vers la page de connexion
        exit(); // Assurer la redirection
    } else {
        echo "Erreur: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();*/
}
?>
   
