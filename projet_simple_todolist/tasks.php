<?php
    if ($_SESSION['showTasks']==true) {
        $allTasks =  $_SESSION['Tasks'];
    }
?>
<ul class="flex flex-wrap p-1 bg-gray-100">
    <?php
    if ($_SESSION['showTasks']==true) {
        foreach ($allTasks as $key => $value) {
            echo '<li class="w-64 sm:w-1/2 lg:w-1/6 bg-white shadow rounded p-4">'
            .'<span class="font-bold dark:text-white">Titre : </span>'.$value["Titre"]. '<br>'
            .'<span class="font-bold dark:text-white">Description : </span>'. $value["Description"]. '<br>'
            .'<span class="font-bold dark:text-white">Date Limite : </span>'. $value["Limite"]. '<br>'
            .'</li>';
        }
    }
    ?>
</ul>
<?php
//------------------------------footer
echo "<p class='text-center text-gray-500 text-xs'>
&copy;2024 Aurès-dev. All rights reserved.
</p>";