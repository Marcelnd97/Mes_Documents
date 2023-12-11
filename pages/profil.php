<?php

    include("config.php");
    //initialiser la session
    session_start();    
    // vérifier si l'utilisateur est connecté, sinon redirigez le vers la page de donnection
    if(! isset($_SESSION['user_id'])) {
        header('location: login.php');
        exit();
    }
    try {
        // Récupérez les informations du profil de l'utilisateur à partir de la base de données
        $user_id = $_SESSION['user_id'];
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
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage du Profil avec PHP et MySQL</title>
</head>
<body>
    <div class='row m-3'>
            <div class='col-md-12 p-0'>
                <h1>Le profil de l'utilisateur</h1>
            </div>
            <div class='card col-md-4 text-center mr-3'>
                <div class='col'>
                    <div class='mb-3 mt-3'>
                        <img src='./images/client.png' class='rounded-circle' width='100px' height='100px'/>
                    </div>
                    <div class='mb-3'>
                        <h2><?= $user['username'] ?></h2>
                            <small class='form-text text-muted'><?= $user['type'] ?></small>
                    </div>
                    <div class='col mb-3 p-0'>
                        <a class='btn btn-primary mr-2' color='primary'>
                            <i class='fas fa-pencil-alt'></i>&nbsp;Modifie
                            profil</a>
                    </div>
                    <div class='col mb-3 p-0'>
                        <a class='btn btn-danger mr-2' href="login.php" color='primary'>
                            <i class='fas fa-pencil-alt'></i>&nbsp;Se déconnecter</a>
                    </div>
                </div>
            </div>
            <div class='card col-md-7'>
                <table class='table'>
                    <tbody>
                    <tr>
                        <th scope='row'>Prénom</th>
                        <td><?= $user['prenom'] ?></td>
                    </tr>
                    <tr>
                        <th scope='row'>Nom</th>
                        <td><?= $user['nom'] ?></td>
                    </tr>
                    <tr>
                        <th scope='row'>Adresse</th>
                        <td><?= $user['adresse'] ?></td>
                    </tr>
                    <tr>
                        <th scope='row'>Adresse mail</th>
                        <td><?= $user['mail'] ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
</body>
</html>