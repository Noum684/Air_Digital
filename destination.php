<?php
include 'database.php'; // Inclusion de la connexion à la base de données

$sql = "SELECT * FROM destinations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="destination-card">';
        echo '<img src="images/' . $row['image_url'] . '" alt="' . $row['nom'] . '">';
        echo '<h2>' . $row['nom'] . '</h2>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<a href="reservation.php?destination=' . strtolower($row['nom']) . '" class="btn">Réserver</a>';
        echo '</div>';
    }
} else {
    echo "Aucune destination disponible.";
}

$conn->close();
?>
