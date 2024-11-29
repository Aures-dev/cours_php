<?php 
// $myUser = ["nom"=>"CallMeAures","age"=>21,"favMatiere"=>"maths"];
// foreach ($myUser as $key => $value) {
//     echo "$key : $value <br> ";
// }

// function salutation ($nom,$age) {
//     echo "Bonjour $nom, vous avez $age ans !";
// };
// salutation("Alice",30);

//Exercice 1 : Calculatrice avec validation d'opérateurs
function calculValidation ($numb1,$numb2,$operator){
    if ($operator == '+' || $operator == '-' || $operator == '/' || $operator == '*') {
        if ($operator == '/' && $numb2 == 0) {
            echo "Vous ne pouvez pas diviser par 0 <br>";
        }else{
            switch ($operator) {
                case '+':
                    echo $numb1+$numb2."<br>";
                    break;
                case '-':
                    echo $numb1-$numb2."<br>";
                    break;
                case '/':
                    echo $numb1/$numb2."<br>";
                    break;
                case '*':
                    echo $numb1*$numb2."<br>";
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }else{
        echo "l'opérateur est invalide <br>";
    }
};
calculValidation(10,0,'/');

//Exercice 2 : Calcul de la somme des multiples
function sommeMultiple (){
    $result = 0;
   for ($i=0; $i < 1000; $i++) { 
    if ($i%3 == 0 || $i%5 ==0) {
        $result+=$i;
    }
   }
   echo $result."<br>";
};
sommeMultiple();

//Exercice 3 : Vérification de nombre parfait
function verifParfait($numb){
    $verif=0;
    for ($i=1; $i < $numb; $i++) { 
        if ($numb%$i==0) {
           $verif+=$i;
        }
    };
    if ($verif == $numb) {
        echo "$numb est parfait <br>";
    }else{
        echo "$numb n'est pas parfait <br>";
    }
}
verifParfait(28);

//Exercice 4 : Validation d’une adresse e-mail
function checkMail ($mail){
    $test = str_split($mail);
    $at = false;
    $dot = false;
   foreach ($test as $key => $value) {
    if ($value == '@' ) {
        $at = true;
    }elseif($value == '.'){
        $dot = true;
    }
   }
   if ($at == true && $dot == true) {
    echo "Votre email : $mail est correct <br>";
   }else{
    echo "Votre email : $mail est incorrect <br>";
   }
}
checkMail('aures@gmail.com');

//Exercice 5 : Somme des nombres pairs jusqu’à N
function sommePairs ($numb){
    $result = 0;
    for ($i=0; $i <= $numb; $i++) { 
        if ($i%2==0) {
            $result+=$i;
        }
    }
    echo "La somme fait : $result <br>";
}
sommePairs (100);

//Exercice 7 : Vérification de nombre narcissique
function verifNarcissique ($numb) {
    $digits = str_split($numb);  // Convertit chaque chiffre en élément d'un tableau
    $power = 0; 
    //pour connaître la puissance à laquell élever chaque chiffre
    foreach ($digits as $digit) {
        ++$power;
    }
    //fait la somme des chiffres élevés à la puissance du nombre de chiffres qu'il contient
    $result=0;
    array_map(function($digit) use ($power,&$result) {
        $temp = pow($digit,$power);
        $result += $temp ;
    }, $digits);
    //affichage du résultat
    if ($result == $numb) {
        echo "$numb est narcissique" ;
    } else {
        echo "$numb n'es pas narcissique";
    }
    
}
verifNarcissique(153);
?>