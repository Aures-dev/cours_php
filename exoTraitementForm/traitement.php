<?php
// echo "<pre>";
// print_r($_POST) ;
// echo "</pre>";

// if ($_SERVER["REQUEST_METHOD"]=='POST') {
//     $nom = htmlspecialchars(trim($_POST["nom"]));
//     $email = htmlspecialchars(trim($_POST["email"]));
//     $message = htmlspecialchars(trim($_POST["message"]));
//     if ($nom !=='' && $message !== '' && filter_var($email,FILTER_VALIDATE_EMAIL)) {
//         echo "Tout est correct je peux envoyer les infos";
//     }elseif($nom ==='') {
//         //echo "Une erreur s'est produite avec le nom";
//     }elseif($message === '') {
//         //echo "Une erreur s'est produite avec le message";
//     }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
//        // echo "Une erreur s'est produite avec l'email";
//     }
// }
session_start();
echo "Bienvenue " . $_SESSION['username'];

?>