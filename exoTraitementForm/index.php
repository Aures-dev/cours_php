<?php
session_start();
$nom =  htmlspecialchars(trim($_POST["nom"]));
$email =  htmlspecialchars(trim($_POST["email"]));
$message =  htmlspecialchars(trim($_POST["message"]));
$showUserInfo = false;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($nom)) {
        $errNom = "veuillez saisir votre nom !";
    }
    if (empty($email)) {
        $errEmail = "veuillez saisir votre email !";
    }else{
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errEmail = "L'email entré est invalide!";
        }
    }
    if (empty($message)) {
        $errMessage = "veuillez saisir votre message !";
    }
    if ( !empty($nom) && !empty($email) && !empty($message) ) {
        if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            $showUserInfo = true;
            $_SESSION['username'] = $nom;
            header('Location: http://localhost/traitement.php');
        }
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="tel"], input[type="date"], textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Exercice : Formulaire de Contact avec Validation et Sécurisation</h2>
    <form action="" method="POST">
        
        <div class="form-group">
            <label for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez le nom complet">
            <?php 
            if (isset($errNom)) {
                echo $errNom;
            }
            ?>
        </div>
        
        <div class="form-group">
            <label for="email">Adresse email</label>
            <input type="text" id="email" name="email" placeholder="Entrez une adresse email">
            <?php 
            if (isset($errEmail)) {
                echo $errEmail;
            }
            ?>
        </div>
        
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Entrez votre message"></textarea>
            <?php 
            if (isset($errMessage)) {
                echo $errMessage;
            }
            ?>
        </div>
        
        <div class="form-footer">
            <button type="submit">Ajouter l'utilisateur</button>
        </div>
    </form>
</div>

<div>
    <?php
    if ($showUserInfo == true) {
        echo "<h2>Vos informations :</h2><br>" ;
        echo "<h3>Votre nom : $nom </h3><br>" ;
        echo "<h3>Votre email : $email </h3><br>" ;
        echo "<h3>Votre message : $message </h3><br>" ;
    }
    ?>
</div>

</body>
</html>
