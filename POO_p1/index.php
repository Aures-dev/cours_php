<?php

class Fruit
{
    //propriétés
    private $name;
    private $color;

    //méthodes
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_color()
    {
        return $this->color;
    }
    public function __destruct()
    {
        echo "Destructeur enclenché pour {$this->name}";
    }
}
$apple = new Fruit('Apple🍏', 'Verte');
$banana = new Fruit('Banana🍌', 'jaune');

echo $apple->get_name();
echo '<br>';
echo $banana->get_name() . '<br>';

echo $apple->get_color();
echo '<br>';
echo $banana->get_color() . '<br>';

var_dump($apple instanceof Fruit);


class Person
{
    // proprétés
    public $firstname;
    public $lastname;
    public $age;

    //méthodes :
    public function __construct($firstname, $lastname, $age)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getAge()
    {
        return $this->age;
    }
}


class Dev extends Person
{
    //propriétés
    private $languages;
    //méthodes
    public function __construct($firstname, $lastname, $age, $languages)
    {
        parent::__construct($firstname, $lastname, $age);
        $this->languages = $languages;
    }
    public function getLanguages()
    {
        return $this->languages;
    }
}

$dev1 = new Dev('John', 'Doe', 21, ['JS', 'VueJS', 'NodeJS']);
echo "{$dev1->getFirstname()} {$dev1->getLastname()} {$dev1->getAge()} ans ";
print_r($dev1->getLanguages());

?>