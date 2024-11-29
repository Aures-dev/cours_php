## Exercice 1: FirstUpperCase
Difficulté: Easy

Créez une fonction `firstUpperCase($string)` en PHP. Cette fonction prend une phrase en argument et retourne chaque mot avec la première lettre en majuscule.

```php
firstUpperCase("bonjour tout le monde") // devrait retourner "Bonjour Tout Le Monde"
firstUpperCase("bonjour") // devrait retourner "Bonjour"
```
#

## Exercice 2: LongestWord
Difficulté: Easy

Créez une fonction `longestWord($string)` en PHP. Cette fonction prend une chaîne de caractères et retourne la longueur du plus long mot.

```php
longestWord("bonjour à tous") // devrait retourner 7
longestWord("les chaussettes de l'archiduchesse") // devrait retourner 15
```
#

## Exercice 3: LargestNumber
Difficulté: Easy

Créez une fonction `largestNumber($arr)` en PHP. Cette fonction doit retourner le plus grand nombre dans une liste passée en argument.


```php
largestNumber([20, 32, 97]) // devrait retourner 97
largestNumber([156, 851, 138]) // devrait retourner 851
```

#

## Exercice 4: ConfirmEnd
Difficulté: Easy

Créez une fonction `confirmEnd($string, $end)` en PHP. Cette fonction vérifie que la chaîne passée en argument se termine bien par le caractère `$end`.


```php
confirmEnd("bonjour", "n") // devrait retourner false
confirmEnd("bonjour", "r") // devrait retourner true
```

#

## Exercice 5: Tracage
Difficulté: Easy

Créez une fonction `truncate($str, $num)` en PHP. Cette fonction tronque la chaîne si elle dépasse la longueur spécifiée par `$num` et ajoute "..." à la fin.

```php
truncate("bonjour à tous", 5) // devrait retourner "bonjo..."
truncate("salut", 8) // devrait retourner "salut"

```

## Exercice 6:  Les détectives
Difficulté: Easy

Créez une fonction `findElement($arr, $func)` en PHP. Cette fonction retourne le premier élément d'un tableau qui passe un test de vérité `$func`. Si aucun élément ne passe le test, retournez `null`.

```php
findElement([1, 3, 5, 8, 9, 10], function($num) { return $num % 2 === 0; }) // devrait retourner 8
findElement([1, 3, 5, 9], function($num) { return $num % 2 === 0; }) // devrait retourner null
```

#

## Exercice 7: Les perroquets
Difficulté: Easy

Créez une fonction `repeat($string, $num)` en PHP. Cette fonction répète le mot `$string` le nombre de fois spécifié par `$num`.


```php
repeat("abc", 3) // devrait retourner "abcabcabc"
repeat("*", 3) // devrait retourner "***"
```

#

## Exercice 8: Factorisation
Difficulté: Médium

Créez une fonction `factorialize($number)` en PHP qui retourne le factoriel d'un entier.


#

## Exercice 9: .Téléportation et Fusion
Difficulté: Medium

Créez une fonction `frankenSplice($arr1, $arr2, $index)` en PHP. Copiez les éléments de `$arr1` dans `$arr2` à l'index `$index` et renvoyez le nouveau tableau.

```php
frankenSplice([1, 2, 3], [4, 5], 1); // devrait retourner [4, 1, 2, 3, 5]
frankenSplice([1, 2], ["a", "b"], 1); // devrait retourner ["a", 1, 2, "b"]
frankenSplice(["claw", "tentacle"], ["head", "shoulders", "knees", "toes"], 2); // devrait retourner ["head", "shoulders", "claw", "tentacle", "knees", "toes"]
```

#

## Exercice 10: Filtrage
Difficulté: Moyen

Créez une fonction `bouncer($arr)` en PHP pour supprimer toutes les valeurs fausses (null, 0, "", undefined, NaN) d'un tableau. La fonction doit retourner un nouveau tableau.

```php
print_r(bouncer([7, "ate", "", false, 9])); // devrait retourner [7, "ate", 9]
print_r(bouncer(["a", "b", "c"])); // devrait retourner ["a", "b", "c"]
print_r(bouncer([false, null, 0, NaN, undefined, ""])); // devrait retourner []
```
#

## Exercice 11: Insérer au Bon Endroit
Difficulté: Moyenne

Créez une fonction `getIndexToIns($arr, $toInsert)` en PHP qui retourne l'indice auquel une valeur $toInsert doit être insérée dans un tableau trié.

```php
getIndexToIns([10, 20, 30, 40, 50], 35) . "\n"; // devrait retourner 3
getIndexToIns([10, 20, 30, 40, 50], 30) . "\n"; // devrait retourner 2
getIndexToIns([40, 60], 50) . "\n"; // devrait retourner 1
getIndexToIns([3, 10, 5], 3) . "\n"; // devrait retourner 0

```
#

## Exercice 12: Vérification de Contenu
Difficulté: Moyenne

Créez une fonction `mutation($arr)` en PHP pour vérifier si le premier élément du tableau contient toutes les lettres du deuxième élément.

```php
mutation(["hello", "hey"]) ? 'true' : 'false'; // devrait retourner false
"\n";
mutation(["hello", "Hello"]) ? 'true' : 'false'; // devrait retourner true
"\n";
mutation(["Alien", "line"]) ? 'true' : 'false'; // devrait retourner true
"\n";
```
#

## Exercice 13: Division en Groupes
Difficulté: Moyenne

Créez une fonction `chunkArrayInGroups($arr, $size)` en PHP pour diviser un tableau en sous-tableaux de taille $size.

```php
chunkArrayInGroups(["a", "b", "c", "d"], 2); // devrait retourner [["a", "b"], ["c", "d"]]
chunkArrayInGroups([0, 1, 2, 3, 4, 5], 3); // devrait retourner [[0, 1, 2], [3, 4, 5]]
chunkArrayInGroups([0, 1, 2, 3, 4, 5, 6], 3); // devrait retourner [[0, 1, 2], [3, 4, 5], [6]]

```

#

## Exercice 14: Encodage Pig Latin
Difficulté: Difficile

Créez une fonction `latinPing($string)` en PHP. Pour chaque mot, déplacez le premier caractère à la fin et ajoutez `"ay"`.

NB: la ponctuation, n'est pas prise en compte (! ? .)

```php
latinPing("hello!") . "\n"; // devrait retourner "ellohay!"
latinPing("bonjour à tous!") . "\n"; // devrait retourner "onjourbay àay tousay !"
```
