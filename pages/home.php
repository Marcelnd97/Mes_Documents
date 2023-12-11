<?php
    //include("config.php");
    //initialiser la session
    session_start();    
    // vérifier si l'utilisateur est connecté, sinon redirigez le vers la page de donnection
    if(! isset($_SESSION['id'])) {
        header('location: login.php');
        exit();
    }
    try {
        // Récupérez les informations du profil de l'utilisateur à partir de la base de données
        $user_id = $_SESSION['id'];
        $stmt = $pdo->prepare("SELECT * FROM carusers WHERE id = :user_id");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // Ajoutez d'autres champs du profil selon votre structure de base de données
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home admin</title>
</head>
<body>
    <h2>Voici le profil de <?= $user['username'] ."&nbsp;&nbsp;". $user['mail']; ?></h2>
    <div>Quelques informations sur vous : </div>
        <ul>
            <li>Votre id est : <?php echo $user['prenom'] ?></li>
            <li>Votre mail est : <?= $user['mail'] ?></li>
            <li>Votre compte a été crée le : <?= $user['date_creation'] ?></li>
        </ul>
</body>
</html>