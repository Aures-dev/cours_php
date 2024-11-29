1. htmlspecialchars
Description :
La fonction htmlspecialchars convertit les caractères spéciaux en entités HTML. Cela permet de prévenir les attaques XSS (Cross-Site Scripting) en échappant les caractères qui ont une signification spéciale en HTML.

2. htmlentities
Description :
La fonction htmlentities convertit tous les caractères applicables en entités HTML. Contrairement à htmlspecialchars, elle convertit également les caractères qui ne sont pas nécessaires à échapper.

trim
Description :
La fonction trim supprime les espaces blancs (ou d'autres caractères) au début et à la fin d'une chaîne. Cela est souvent utilisé pour nettoyer les entrées utilisateur.

4. stripslashes
Description :
La fonction stripslashes supprime les antislashs ajoutés par la fonction addslashes. Cela est souvent utilisé pour nettoyer les données extraites d'une base de données ou lors de l'initialisation d'une chaîne provenant d'une source non fiable.

## var_dump, echo, print_r

En PHP, var_dump(), echo, et print_r() sont trois fonctions couramment utilisées pour afficher des informations sur les variables, mais elles ont des usages et des comportements différents. Voici une explication de chacune d'elles et leurs différences :

1. echo
Description :
echo est une instruction utilisée pour afficher une ou plusieurs chaînes de caractères. Elle ne peut pas afficher des structures de données complexes comme des tableaux ou des objets sous forme lisible, mais elle est très rapide et simple à utiliser.
$variable = "Hello, World!";
echo $variable;  // Affiche : Hello, World!

Caractéristiques :

Affiche une ou plusieurs chaînes de caractères.
Plus rapide et plus simple que print.
Ne peut pas afficher des informations détaillées sur les tableaux ou objets.

2. print_r()
Description :
print_r() est une fonction qui affiche des informations lisibles par l'homme sur une variable. Elle est particulièrement utile pour afficher les valeurs des tableaux et des objets de manière structurée.
$array = array("foo" => "bar", "baz" => "qux");
print_r($array);

Sortie :
Array
(
    [foo] => bar
    [baz] => qux
)
Caractéristiques :

Affiche des informations sur les tableaux et les objets.
Lisible par l'homme, mais moins détaillé que var_dump.
Peut être utilisé avec le paramètre optionnel true pour retourner la sortie plutôt que de l'afficher.

3. var_dump()
Description :
var_dump() affiche des informations détaillées sur une ou plusieurs variables, y compris leur type et leur valeur. C'est la méthode la plus complète pour examiner une variable, surtout pour le débogage.
$array = array("foo" => "bar", "baz" => "qux");
var_dump($array);
Sortie :
array(2) {
  ["foo"]=>
  string(3) "bar"
  ["baz"]=>
  string(3) "qux"
}

Caractéristiques :

Affiche des informations détaillées sur les types et les valeurs des variables.
Plus verbeux que print_r.
Utile pour le débogage en profondeur.


## Comparaison des usages
Quand utiliser echo :

Lorsque vous avez besoin d'afficher des chaînes de caractères simples.
Pour une sortie rapide et efficace de texte.
Quand utiliser print_r() :

Lorsque vous avez besoin d'afficher des tableaux ou des objets de manière lisible.
Pour obtenir une vue d'ensemble structurée des données.
Quand utiliser var_dump() :

Lorsque vous avez besoin d'informations détaillées sur les types et les valeurs des variables.
Pour le débogage approfondi et l'inspection complète des structures de données complexes.


// Variable simple
$variable = "Hello, World!";
echo $variable;          // Affiche : Hello, World!
print_r($variable);      // Affiche : Hello, World!
var_dump($variable);     // Affiche : string(13) "Hello, World!"

// Tableau
$array = array("foo" => "bar", "baz" => "qux");
echo $array;             // Affiche : Array (ce qui n'est pas utile)
print_r($array);         // Affiche le contenu de manière lisible par l'homme
var_dump($array);        // Affiche le contenu avec des informations détaillées sur les types et les valeurs

// Objet
$object = new stdClass();
$object->property = "value";
echo $object;            // Affiche : Object (ce qui n'est pas utile)
print_r($object);        // Affiche le contenu de l'objet de manière lisible par l'homme
var_dump($object);       // Affiche le contenu de l'objet avec des informations détaillées sur les types et les valeurs


### Exercice Formulaire

Formulaire de Contact avec Validation et Sécurisation

Objectif : Créer un formulaire de contact qui permet à un utilisateur d'envoyer son nom, son email, et un message. Vous devez valider les données côté serveur, les sécuriser et afficher des erreurs si nécessaire.

Instructions :
Crée un formulaire en HTML qui demande les informations suivantes :

Nom
Email
Message

Lors de la soumission du formulaire :
-- Valide que les champs Nom et Message ne sont pas vides.
-- Valide que le champ Email contient une adresse email valide.
-- Si des erreurs sont détectées, affiche un message d'erreur sous les champs correspondants.
Si toutes les validations passent :

Affiche les données envoyées par l'utilisateur sous une forme sécurisée (pour empêcher l'injection de code).
Utilise filter_var() pour valider l'email