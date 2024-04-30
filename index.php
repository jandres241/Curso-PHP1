<?php

const API_URL = "https://www.whenisthenextmcufilm.com/api";

#Inicializar sesion de CURL; ch = Curl Handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir resultado de la peticion sin mostrar en pantalla

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar peticion y guardar resultado */

$result = curl_exec($ch);


//Alternativa a curl
//$result = file_get_content(API_URL); //Si solo se desea hacer un get a una API
$data = json_decode($result, true);
curl_close($ch);

?>

<head>
  <title>Proxima pelicula de marvel</title>
  <html lang="es">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/pico.classless.min.css" />
</head>

<main>
  <section>
    <img src="<?= $data["poster_url"]; ?>" width="350" alt="Poster de pelicula" style="border-radius: 10%; align-item: center;">
  </section>
  <hgroup>
    <h3>
      <?= $data["title"]; ?> se entrena en <?= $data["days_until"] ?>

    </h3>
    <p>Fecha de estreno: <?= $data["release_date"]; ?> dias.</p>
    <p>La siguiente pelicula es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;

  }

  img {
    margin: 0 auto;
  }
</style>