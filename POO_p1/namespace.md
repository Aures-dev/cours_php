# Les Namespace en PHP

## Qu'est-ce qu'un Namespace ?
Un `namespace` (espace de noms) est une fonctionnalité en PHP qui permet d'organiser le code et d'éviter les conflits entre les noms de classes, fonctions ou constantes. Cela est particulièrement utile dans les projets comportant beaucoup de fichiers ou lors de l'utilisation de bibliothèques tierces.

## Pourquoi utiliser un Namespace ?
- **Eviter les conflits de noms**: Deux classes ou fonctions avec le même nom dans des bibliothèques différentes peuvent coexister grâce aux namespaces.
- **Organisation**: Les namespaces permettent de sructurer le code de manière logique.
- **Interopérabilité**: Facilitent l'utilisation d'autoloaders comme celui de Composer.

## Syntaxe de base

Un namespace est défini en haut de fichier avec le mot-clé `namespace`.

```php
namespace MonEspaceDeNom;

class MaClasse {
    public function direBonjour() {
        return "Bonjour depuis MonEspaceDeNom !";
    }
}
```

## Accès à une classe avec Nampespace
Lorsque vous utilisez un namespace, vous devez spécifier son chemin complet, appelé **Fully Qualified Name (FQN)**.
```php
require "MonEspaceDeNom/MaClasse.php";

$objet = new \MonEspaceDeNom\MaClasse();
echo $objet->direBonjour();
```

## Utilisation de `use` pour simplifier
Pour éviter d'écrire le namespace complet à chaque fois, vous pouvez utiliser l'instruction `use`.
```php
use MonEspaceDeNom\MaClasse;

$objet = new MaClasse();
echo $objet->direBonjour();
```

## Exemples Pratiques
```php
// Fichier : App/Controllers/TodoController.php
namespace App\Controllers;

class TodoController {
    public function index() {
        echo "Liste des tâches";
    }
}
```

```php
// Fichier : App/Models/Todo.php
namespace App\Models;

class Todo {
    public $task;
    public $done;

    public function __construct($task, $done) {
        $this->task = $task;
        $this->done = $done;
    }
}

```

```php
// Fichier principal
require 'App/Controllers/TodoController.php';
require 'App/Models/Todo.php';

use App\Controllers\TodoController;
use App\Models\Todo;

$controller = new TodoController();
$controller->index();

$todo = new Todo("Apprendre les namespaces", false);
var_dump($todo);
```

## Namespace Global
Le **namespace global** est utilisé lorsqu'aucun namespace n'est défini. Si vous travaillez dans un namespace mais voulez accéder à une classe native de PHP (comme `PDO` ou `PDOException`), utilisez le backslash (`\`) pour indiquer le namespace global.

```php
namespace App;

class Exemple {
    public function maintenant() {
        return new \DateTime(); // Accès au namespace global
    }
}
```

## Autoloading avec Composer
Les namespaces s'intègrent parfaitement avec l'autoloader de **Composer**. Il suffit de configurer l'autoloader dans le fichier `composer.json`.

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

Puis, dans votre projet:

```bash
composer dump-autoload
```

Vous pouvez ensuite utiliser les classes sans avoir à les `require` manuellement.