<main>
  <section>
    <img src="<?= $poster_url; ?>" width="350" alt="Poster de pelicula">
  </section>
  <hgroup>
    <h3>
      <?= $title; ?> se entrena en <?= $days_until; ?> días.
    </h3>
    <p>Fecha de estreno: <?= $release_date; ?>.</p>
    <p>La siguiente película es: <?= $following_production["title"]; ?></p>
  </hgroup>
</main>