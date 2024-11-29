## L'Héritage en PHP

L'héritage est un principe clé de la programmation orientée objet qui permet à une classe (classe enfant)
de réutiliser les propriétés et méthodes d'une autre classe (classe parent). Cela permet de structurer le
code et d'éviter les duplications:

## Caractéristiques principales
1. **Réutilisation de code**: Une classe enfant hérite automatiquement des propriétés et méthodes publiques et protégées de la classe parent.
2. **Personnalisation**: Une classe enfant peut **surcharger** (redéfinir) les méthodes de la classe parent.
3. **Encapsulation**: Les propriétés/méthodes privées ne sont pas accessibles par les classes enfants.

```php
// Classe parent
class Animal {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function speak(): string {
        return "Je suis un animal.";
    }
}

// Classe enfant
class Dog extends Animal {
    public function speak(): string {
        return $this->name . " dit : Woof!";
    }
}

// Utilisation
$dog = new Dog("Rex");
echo $dog->speak(); // Rex dit : Woof!

```

### NB:
- Une classe enfant peut ajouter ses propres propriétés et méthodes
- Si une méthode ou propriété est définie comme `private` dans la classe parent, elle n'est pas accessible dans la classe enfant.