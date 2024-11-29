<?php
session_start();
$_SESSION['Tasks'] ? $_SESSION['Tasks'] : $_SESSION['Tasks'] = [];
$_SESSION['showTasks'] = false;
function checkUserEntry ($el){
    return htmlspecialchars(trim($_POST[$el]));
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = checkUserEntry("titre");
    $description = checkUserEntry("description");
    $date_limite = checkUserEntry("date_limite");

    if (empty($titre)) {
        $errTitre = "veuillez saisir un titre !";
    }
    if (empty($description)) {
        $errDescription = "veuillez saisir une description !";
    }
    if (empty($date_limite)) {
        $errDate = "veuillez entrer une date limite !";
    }
    if (!empty($titre) && !empty($description) && !empty($date_limite)) {
        $_SESSION['showTasks'] = true;
        $newTask = ["Titre" => $titre, "Description" => $description, "Limite" => $date_limite];
        array_push($_SESSION['Tasks'],$newTask);
    }
}
//session_unset();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee&family=Homemade+Apple&display=swap"
        rel="stylesheet" />
    <title>PHP todolist</title>
</head>

<body>
    <div class="w-full  flex flex-col h-full justify-center items-center">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-5xl dark:text-white">PHP To-Do List</h1>
        <form action="" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-4/12">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Titre
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="titre" name="titre" placeholder="Ecrivez un titre...">
                <?php
                if (isset($errTitre)) {
                    echo $errTitre;
                }
                ?>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Description
                </label>
                <textarea class="shadow appearance-none border border-blue-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" name="description" placeholder="Décrivez votre tâche"></textarea>
                <?php
                if (isset($errDescription)) {
                    echo $errDescription;
                }
                ?>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Date limite
                </label>
                <input class="shadow appearance-none border border-blue-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    type="date_limite" id="date_naissance" name="date_limite">
                <?php
                if (isset($errDate)) {
                    echo $errDate;
                }
                ?>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Ajouter
                </button>
            </div>
        </form>
    </div>
    <?php include 'tasks.php'; ?>
</body>

</html>