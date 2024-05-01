<?php

//Variables normales
$name = "Miguel";
$isDev = true;
$age = 44;
$isOld = $age > 40;


//Declaracion de variables globales, se declaran solo una vez
define('Variable', 'Ubicacion de la variable');

//Constantes
const PI = 3.14;

//Estructura posible de sentencias con variables
$output = "Hola $name. Usted tiene una edad de $age años";
$output2 = "Hola " . $name . " Usted tiene una edad de " . $age . ".";


//Estructura de ternarias, condicionales simplificadas
$outputage = $isOld ? 'Viejo, perdon' : 'Joven, felicidades';

//Estructura de match, mas rapido que switch
$outputage = match (true) {
  $age < 2    => "Eres un bebe, $name",
  $age < 10   => "Eres un niño, $name",
  $age < 18   => "Eres un adolescente, $name",
  $age === 18 => "Eres mayor de edad, $name",
  $age < 40   => "Eres un adulto joven, $name",
  $age >= 40  => "Eres un adulto viejo, $name",
  default     => "?, $name",
};


//Declaracion de arreglos
$bestlanguajes = ["PHP", "Javascript", "Python"];
$bestlanguajes[3] = "Java";
$bestlanguajes[0] = "Typescript";


//Declaracion de diccionario
$person = [
  "name" => "Miguel",
  "age" => 78,
  "isDev" => true,
  "languages" => ["PHP", "Javascript"],
];

$person["name"] = "Astroboy";
?>
<p> <?= $person["name"] ?></p>


<ul>
  <?php //Estructura manejo de arreglo
  ?>
  <?php foreach ($bestlanguajes as $languaje) : ?>
    <li><?= $languaje ?></li>
  <?php endforeach; ?>
</ul>



<?php //Estructura de ternarias 
?>
<?php if ($isOld) : ?>
  <h2>Eres viejo, perdon</h2>
<?php elseif ($isDev) : ?>
  <h2>No eres viejo, pero si eres dev, lamentable</h2>
<?php else : ?>
  <h2>Eres joven, enhorabuena!</h2>
<?php endif; ?>



<h2><?= $outputage ?></h2>


<h1>
  <?= $output ?>
  <br>
  <?= $output2 ?>
</h1>

<style>
  :root {
    color-scheme: blue;
  }

  h1 {
    text-align: center;
  }
</style>