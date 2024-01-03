<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body>
<?php
    require('../config.php');

    if (isset($_REQUEST['username'], $_REQUEST['phone'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
        // récupérer le nom d'utilisateur 
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);

        // récupérer le mot de passe  
        $email = stripslashes($_REQUEST['phone']);
        $email = mysqli_real_escape_string($conn, $phone);
        
        // récupérer l'email 
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);

        // récupérer le mot de passe 
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        // récupérer le type (user | admin)
        $type = stripslashes($_REQUEST['type']);
        $type = mysqli_real_escape_string($conn, $type);

        //Insertion de données
        $query = "INSERT into `users` (username, phone, email, type, password)
        VALUES ('$username', '$phone', '$email', '$type', '".hash('sha256', $password)."')";
        $res = mysqli_query($conn, $query);

        if ($res) {
            echo "<div class='success'>
                <h1>L'utilisateur a été créée avec succès.</h1>
                <p>Cliquer <a href=home.php>ici</a> pour retourner à la page d'accueil</p>
            </div>";
        } 
    }else {
    ?>
    <form class="box" action="" method="post">
        <h1 class="box-logo box-title">
            <a href="https://waytolearnx.com/">WayToLearnX.com</a>
        </h1>
        <h1 class="box-title">Add user</h1>
        <input type="text" class="box-input" name="username" 
        placeholder="Nom d'utilisateur" required />

        <input type="text" class="box-input" name="phone" 
        placeholder="Téléphone" required />

        <input type="text" class="box-input" name="email" 
        placeholder="Email" required />
        
        <div>
                <select class="box-input" name="type" id="type" >
                    <option value="" disabled selected>Type</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
        </div>
        
        <input type="password" class="box-input" name="password" 
        placeholder="Mot de passe" required />
        
        <input type="submit" name="submit" value="+ Add" class="box-button" />
    </form>
    <?php } ?>
</body>
</html>