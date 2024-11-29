<?php
//-------------## Exercice 1: FirstUpperCase
echo "Exercice 1: FirstUpperCase"."<br><br>";
function firstUpperCase($string){
    $final = ucwords($string);
    echo $final."<br>";
}
firstUpperCase("bonjour tout le monde");
echo "------------------end-------------------"."<br>";

//-------------## Exercice 2: LongestWord
echo "Exercice 2: LongestWord"."<br><br>";
function longestWord($string){
    echo max(array_map(function($string){ 
       return strlen($string);
    },explode(" ",$string)))."<br>";
}
longestWord("bonjour à tous");
longestWord("les chaussettes de l'archiduchesse");
echo "------------------end-------------------"."<br>";

//-------------## Exercice 3: LargestNumber
echo "Exercice 3: LargestNumber"."<br><br>";
function largestNumber($arr){
    echo max($arr)."<br>";
}
largestNumber([20, 32, 97]);
largestNumber([156, 851, 138]);
echo "------------------end-------------------"."<br>";

//-------------## Exercice 4: ConfirmEnd
echo "Exercice 4: ConfirmEnd"."<br><br>";
function confirmEnd($string, $end){
    $test = strlen($string);
    if (substr($string,$test-1,1) == $end) {
        echo 'true'."<br>";
    }else{
        echo 'false'."<br>";
    }
}
confirmEnd("bonjour", "n");
confirmEnd("bonjour", "r");
echo "------------------end-------------------"."<br>";

//-------------## Exercice 5: Tracage
echo "Exercice 5: Tracage"."<br><br>";
function truncate($str, $num) {
   echo strlen($str)>$num ? substr($str,0,$num)."..."."<br>" :  $str."<br>";
}
truncate("bonjour à tous", 5);
truncate("salut", 8);
echo "------------------end-------------------"."<br>";

//-------------## Exercice 6:  Les détectives
echo "Exercice 6:  Les détectives"."<br><br>";
function findElement($arr, $func) {
    foreach ($arr as $key => $value) {
        if($func($value)){
            echo $value."<br>";
            return $value;
        }
    }
    echo "null"."<br>";
    return null;
}
findElement([1, 3, 5, 8, 9, 10], function($num) { return $num % 2 === 0; }) ;
findElement([1, 3, 5, 9], function($num) { return $num % 2 === 0; }) ;

echo "------------------end-------------------"."<br>";


//-------------## Exercice 11: Insérer au Bon Endroit
echo "Exercice 11: Insérer au Bon Endroit"."<br><br>";
function getIndexToIns($arr, $toInsert) {
 array_push($arr,$toInsert);
 sort($arr);
 echo array_keys($arr,$toInsert)[0]."<br>";
}

getIndexToIns([10, 20, 30, 40, 50], 35) . "\n"; // devrait retourner 3
getIndexToIns([10, 20, 30, 40, 50], 30) . "\n"; // devrait retourner 2
getIndexToIns([40, 60], 50) . "\n"; // devrait retourner 1
getIndexToIns([3, 10, 5], 3) . "\n"; // devrait retourner 0

echo "------------------end-------------------"."<br>";
?>