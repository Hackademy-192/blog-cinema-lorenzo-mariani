<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">tutte le saghe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/saga1">saga 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/saga2">saga 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/saga3">saga 3</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide w-50 mx-auto mt-4">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/filmbeerus.jpg" class="d-block w-100 img-dms" alt="goku">
    </div>
    <div class="carousel-item">
      <img src="/img/filmsuper.jpg" class="d-block w-100 img-dms" alt="goku">
    </div>
    <div class="carousel-item">
      <img src="/img/filmz.jpg" class="d-block w-100 img-dms" alt="goku">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<header>
<h2>piccola sintesi di dragon ball</h2>
<p>dragon ball è un manga ambientato sulla terra, dove troviamo diverse categorie tra qui i saiyan,namecciani, freezer ecc.</p>
<p>all'interno della saga possiamo assistere a tanti scontri dove i saiyan spesso devono difendere la terra</p>
<p> dragon ball z è composto da un totale di 291 episodi mentre la saga super da 131, beerus invece è una saga uscita poco fa ed è composta solo da 20 episodi</p>
</header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>