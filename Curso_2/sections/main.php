<main>
  <section>
    <img src="<?= $data["poster_url"]; ?>" width="350" alt="Poster de pelicula">
  </section>
  <hgroup>
    <h3>
      <?= $data["title"]; ?> se entrena en <?= $data["days_until"] ?> días.
    </h3>
    <p>Fecha de estreno: <?= $data["release_date"]; ?>.</p>
    <p>La siguiente pelicula es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>