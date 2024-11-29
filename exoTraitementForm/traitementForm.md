# Guide des Fonctions PHP Utiles

## 1. `htmlspecialchars`

### Description
La fonction `htmlspecialchars` convertit les caractères spéciaux en entités HTML. Cela permet de prévenir les attaques XSS (Cross-Site Scripting) en échappant les caractères qui ont une signification spéciale en HTML.

---

## 2. `htmlentities`

### Description
La fonction `htmlentities` convertit tous les caractères applicables en entités HTML. Contrairement à `htmlspecialchars`, elle convertit également les caractères qui ne nécessitent pas forcément d'être échappés.

---

## 3. `trim`

### Description
La fonction `trim` supprime les espaces blancs (ou d'autres caractères) au début et à la fin d'une chaîne. Cela est souvent utilisé pour nettoyer les entrées utilisateur.

---

## 4. `stripslashes`

### Description
La fonction `stripslashes` supprime les antislashs ajoutés par la fonction `addslashes`. Cela est souvent utilisé pour nettoyer les données extraites d'une base de données ou lors de l'initialisation d'une chaîne provenant d'une source non fiable.

---

# Affichage et Débogage des Variables : `var_dump`, `echo`, et `print_r`

En PHP, les fonctions `var_dump()`, `echo`, et `print_r()` sont fréquemment utilisées pour afficher des informations sur les variables. Voici une explication de leurs usages et différences.

## 1. `echo`

### Description
`echo` est une instruction utilisée pour afficher une ou plusieurs chaînes de caractères.

#### Exemple :
```php
$variable = "Hello, World!";
echo $variable; // Affiche : Hello, World!
```

### Caractéristiques :
- Affiche une ou plusieurs chaînes de caractères.
- Simple et rapide.
- Ne convient pas pour des structures de données complexes.

---

## 2. `print_r()`

### Description
`print_r()` est une fonction qui affiche des informations lisibles par l'homme sur une variable, notamment des tableaux ou objets.

#### Exemple :
```php
$array = array("foo" => "bar", "baz" => "qux");
print_r($array);
```

#### Sortie :
```
Array
(
    [foo] => bar
    [baz] => qux
)
```

### Caractéristiques :
- Lisible et structuré pour tableaux et objets.
- Moins détaillé que `var_dump`.
- Peut retourner la sortie si le second paramètre est `true`.

---

## 3. `var_dump()`

### Description
`var_dump()` affiche des informations détaillées sur une ou plusieurs variables, incluant leur type et leur valeur.

#### Exemple :
```php
$array = array("foo" => "bar", "baz" => "qux");
var_dump($array);
```

#### Sortie :
```
array(2) {
  ["foo"]=>
  string(3) "bar"
  ["baz"]=>
  string(3) "qux"
}
```

### Caractéristiques :
- Affiche des informations précises sur les types et valeurs.
- Idéal pour un débogage détaillé.

---

## Comparaison des Usages

| Fonction      | Usage Principal                                  | Points Forts                                 |
|---------------|--------------------------------------------------|---------------------------------------------|
| **`echo`**    | Affichage de chaînes simples                     | Simple et rapide.                           |
| **`print_r`** | Inspection rapide des tableaux ou objets         | Lisible par l'humain, structuré.            |
| **`var_dump`**| Débogage approfondi de toutes les structures     | Détails sur types et valeurs, très complet. |

### Exemple Comparatif
```php
// Variable simple
$variable = "Hello, World!";
echo $variable;          // Hello, World!
print_r($variable);      // Hello, World!
var_dump($variable);     // string(13) "Hello, World!"

// Tableau
$array = array("foo" => "bar", "baz" => "qux");
echo $array;             // Array
print_r($array);         // Affiche le contenu lisiblement
var_dump($array);        // Affiche le contenu et les types

// Objet
$object = new stdClass();
$object->property = "value";
echo $object;            // Object
print_r($object);        // Contenu lisible
var_dump($object);       // Détails complets
```

---

# Exercice : Formulaire de Contact avec Validation et Sécurisation

### Objectif
Créer un formulaire de contact permettant à un utilisateur d'envoyer son nom, son email, et un message. Les données doivent être validées et sécurisées côté serveur.

### Étapes :

1. **Créer le formulaire en HTML** :
   - Champs : Nom, Email, Message.

2. **Valider les données côté serveur** :
   - Vérifier que les champs "Nom" et "Message" ne sont pas vides.
   - Valider que "Email" contient une adresse email valide.

3. **Gérer les erreurs** :
   - Afficher un message d'erreur sous les champs invalides.

4. **Sécuriser les données** :
   - Utiliser `htmlspecialchars()` pour échapper les entrées utilisateur.
   - Utiliser `filter_var()` pour valider l'email.

---

### Exemple PHP pour Validation
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    $errors = [];
    if (empty($name)) $errors['name'] = "Le champ Nom est obligatoire.";
    if (!$email) $errors['email'] = "Veuillez entrer une adresse email valide.";
    if (empty($message)) $errors['message'] = "Le champ Message est obligatoire.";

    if (empty($errors)) {
        echo "Données envoyées :";
        echo "Nom : $name, Email : $email, Message : $message";
    } else {
        foreach ($errors as $field => $error) {
            echo "<p>$field : $error</p>";
        }
    }
}
```
```html
<form method="POST">
    <label>Nom : <input type="text" name="name"></label><br>
    <label>Email : <input type="email" name="email"></label><br>
    <label>Message : <textarea name="message"></textarea></label><br>
    <button type="submit">Envoyer</button>
</form>
```
```