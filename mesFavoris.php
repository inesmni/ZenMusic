<?php
session_start();
require_once 'config.php'; // Inclure le fichier de configuration de la base de données

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

// Récupérer l'identifiant de l'utilisateur connecté
$id_utilisateur = $_SESSION['user'];

// Requête pour récupérer les chansons en favoris de l'utilisateur
$query = "SELECT songs.title, songs.path FROM songs
          INNER JOIN favoris ON songs.id_songs = favoris.song_id
          WHERE favoris.utilisateur_id = :id_utilisateur";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id_utilisateur', $id_utilisateur);
$stmt->execute();

// Vérifier si des chansons en favoris ont été trouvées
if ($stmt->rowCount() > 0) {
    echo '<h2>Mes Favoris</h2>';
    echo '<ul>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<li><a href="' . $row['path'] . '">' . $row['title'] . '</a></li>';
    }
    echo '</ul>';
} else {
    echo '<p>Aucune chanson en favoris pour le moment.</p>';
}
?>
