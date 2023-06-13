<?php
session_start();
require_once 'config.php';

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    die();
}

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=mysql-dpmusic.alwaysdata.net;dbname=dpmusic_db;charset=utf8", "dpmusic", "InesM2002");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les chansons sélectionnées
        $chansons = $_POST['chansons'];

        // Récupérer l'ID de l'utilisateur connecté
        $utilisateurId = $_SESSION['user'];

        // Effectuer le traitement des chansons sélectionnées
        foreach ($chansons as $chansonId) {
            // Ajouter la chanson en favoris pour l'utilisateur
            $query = "INSERT INTO favoris (id_utilisateur, id_chanson) VALUES (?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$utilisateurId, $chansonId]);
        }

        // Rediriger vers une page de confirmation ou une autre page appropriée après l'ajout des favoris
        header('Location: mesFavoris.php');
        die();
    }

    // Requête pour récupérer toutes les chansons
    $query = "SELECT * FROM songs";
    $stmt = $pdo->query($query);

    // Vérifier si la requête a réussi
    if ($stmt->rowCount() > 0) {
        echo '<h4>Sélectionnez les chansons à ajouter en favoris :</h4>';
        echo '<form method="POST" action="ajouter_favoris.php">';

        echo '<ul class="song-list">';

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<li>';
            echo '<input type="checkbox" name="chansons[]" value="' . $row['id_songs'] . '">';
            echo $row['title'];
            echo '</li>';
            echo '<br>';
        }
        echo '</ul>';

        echo '<button type="submit">Ajouter en favoris</button>';
        echo '<button type="submit"><a href:"landing.php">Retour<a></button>';
        echo '</form>';
    }
} catch (PDOException $e) {
    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
}
?>

<style>

    body{
    width: 800px;
    justify-content : center;
    
    }
   
    /* Styles pour le conteneur principal */
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

/* Styles pour le titre */
h4 {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
  font-family: Verdana;
  justify-content:center;
}

/* Styles pour les cases à cocher */
ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 0;
        margin: 0;
        list-style: none;
        width: 100%;
    }

    li {
        width: 33%; /* Vous pouvez ajuster cette valeur selon vos besoins */
        padding: 10px;
        box-sizing: border-box;
    }

    /* Facultatif : Style pour les cases à cocher */
    input[type="checkbox"] {
    }

/* Styles pour le bouton */
button {
  display: block;
  margin-top: 10px;
  padding: 10px 20px;
  background-color: #337ab7;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #286090;
}

button:focus {
  outline: none;
}

/* Styles pour les messages d'erreur */
.error-message {
  color: red;
  margin-top: 10px;
}


</style>
