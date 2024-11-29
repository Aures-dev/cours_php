<?php
echo "<pre>";
print_r($_REQUEST) ;
echo "</pre>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = trim($_POST["nom"]);
    if (empty($_POST["nom"])) {
        echo "Le nom est requis<br>";
    }
}
?>