# PHP POO

## 1. Héritage
L’héritage en PHP permet à une classe (appelée classe enfant ou sous-classe) de réutiliser et d’étendre les fonctionnalités d’une autre classe (appelée classe parente). C’est un concept central dans la programmation orientée objet.

```php
class Person {
    private $firstname;
    private $lastname;
    private $age;

    public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    public function getFirstname() {
        return $this->firstname;
    }
}

```
- `Person` est la classe parente. Elle définit des propriétés et méthodes de base.
- `Dev` hérite de `Person`.

```php
class Dev extends Person {
    private $languages;

    public function __construct($firstname, $lastname, $age, $languages) {
        parent::__construct($firstname, $lastname, $age);
        $this->languages = $languages;
    }

    public function getLanguages() {
        return $this->languages;
    }
}
```

- `Dev` réutilise le constructeur de `Person` à l'aide de `parent::__construct()`.
- Elle ajoute une nouvelle propriété `$languages` et des méthodes associées.

## 2. Modificateurs d'accès

Les modificateurs d’accès contrôlent la visibilité des propriétés et méthodes d’une classe :

|--------------|-----------------------|---------------------------|--------------|   
Modificateur	Accès dans la classe	Accès dans la sous-classe	Accès en dehors
|--------------|-----------------------|---------------------------|--------------|   
|public        |	✅                |	          ✅             |	✅        |   
|protected     |	✅                |	          ✅             |	❌        |   
|private       |	✅                |	          ❌             |	❌        |   
|--------------|---------------------- |---------------------------|--------------|   

Dans l’exemple :

- `private` :

- Les propriétés `$firstname`, `$lastname`, et `$age` dans la classe `Person` sont privées.
- Elles ne sont accessibles que depuis la classe `Person`. Pour y accéder dans la sous-classe, on utilise des getters (comme `getFirstname()`).
- Exemple :  
```php
public function getFirstname() {
    return $this->firstname;
}
```

- protected :

- Si une propriété/méthode était déclarée `protected`, elle serait accessible dans la classe et ses sous-classes, mais pas en dehors.

- public :

- Les méthodes comme `getFirstname()` sont publiques. Elles sont accessibles partout, y compris à partir d’objets externes.
