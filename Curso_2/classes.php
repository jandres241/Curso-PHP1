<?php

declare(strict_types=1);

class Superhero
{
  //Propiedades y metodos

  public function __construct(readonly public string $name, public array $powers, public string $locate) //Promote properties
  {
  }

  public function attack()
  {
    return "!$this->name ataca con sus poderes!";
  }

  public function show_all()
  {
    return get_object_vars($this);
  }

  public function description()
  {
    $powers = implode(", ", $this->powers);

    return "$this->name es un superhéroe que viene de $this->locate y tiene los superpoderes de: $powers";
  }

  public static function random()
  {
    $names = ["Thor", "Hulk", "Spiderman", "Ironman"];
    $powers = [
      ["Superfuerza", "Volar", "Rayos laser"], ["Regeneracion", "Telarañas", "Super agilidad"], ["Manipula truenos", "Gran fuerza", "Entre otros"]
    ];
    $locates = ["Asgard", "Tierra", "Planeta Hulk"];

    $name = $names[array_rand(($names))];
    $power = $powers[array_rand(($powers))];
    $locate = $locates[array_rand(($locates))];

    echo "El super heroe elegido es $name, que tiene los poderes de " . implode(", ", $power) . " y viene de $locate";
  }
};

$hero = new Superhero("Superman", ["superfuerza", "volar", "visión de calor"], "Kriptón");

echo $hero->description();

var_dump($hero->show_all());

Superhero::random();
