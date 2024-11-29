## Les Classes Abstraites en PHP

Une `classe abstraite` est une classe qui ne peut pas être instanciée directement.
Elle est utilisée comme base pour d'autres classes. Elle sert à définir une
structure commune tout en laissant certaines implémentations spécifiques aux classes
enfants.

### Pourquoi utiliser une classe abstraite ?
1. **Empêcher l'instancitation directe**: Une classe abstraite est destinée à être un modèle ou une base.
2. **Fournir une structure commune**: Elle impose une certaine organisation pour ses classes enfants.
3. **Faciliter l'extension et la maintenance**: Les classes enfants héritent des fonctionnalités communes.

## Caractéristiques principales:
1. Une classe abstraite peut contenir des **méthodes abstraites** (méthodes sans corps) que les classes enfants doivent implémenter.
2. Une classe abstraite peut contenir des **méthodes concrètes** (méthodes avec une implémentation).

```php
// class abstraite
abstract class Shape {
    protected sring $color;

    public function __constructor(string $color) {
        $this->color = $color;
    }

    // Méthode abstraite
    abstract public function area(): float;
    
    // Méthode concrète
    public function getColor(): string {
        return $this->color;
    }
}

// Classe enfant: Rectangle
class Rectangle extends Shape {
    private float $width;
    private float $height;

    public function __construct(string $color, float $width, float $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float {
        return $this->width * $this->height;
    }
}

// Class enfant: Circle
class Circle extends Shape {
    private float $radius;

    public function __constructor($color, float $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function area(): float {
        return pi() * $this->radius ** 2;
    }
}

// Utilisation
$rect = new Rectangle("Rouge", 5, 10);
echo "Rectangle (" . $rect->getColor() . ") : Aire = " . $rect->area() . PHP_EOL;

$circle = new Circle("Bleu", 3);
echo "Cercle(" . $circle->getColor() .") : Aire = " . $circle->area() . PHP_EOL;
```