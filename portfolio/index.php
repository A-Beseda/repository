<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moje portfólio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--font awesome-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">    
  </head>

  <body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark row" aria-label="Fourth navbar example">
      <div class="container ms-3">
        <a class="navbar-brand"><strong>Adrian Beseda</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"          aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 ms-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Domov</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="portfolio.html">Portfólio</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="omne.html" aria-disabled="true">O mne</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakty.html" aria-disabled="true">Kontakt</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-md-0 me-4">
            <li class="nav-item">
              <a class="nav-link" href="login.html">Prihlásiť sa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="bg-dark flex-grow-1">
      
      <div class="text-background centered-div">
        <h1 class="text-main nadpis p-4 container-fluid">Čaute, ja som Adrian Beseda</h1>
        <p class="text-main container-fluid">Som ambiciózny študent s vášňou pre tvorbu inovatívnych riešení a neustálym učením sa nových technológií. Verím, že kombinácia kreativity a technických zručností je kľúčom k úspechu.</p>
      </div>

      <div id="myCarousel" class="carousel slide mb-6 top opica" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" id="obrazok" src="assets/imgs/IMG_20240404_125905 kopie.jpg">
            <div class="container">
              <div class="carousel-caption text-start">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="img-fluid" id="obrazok" src="assets/imgs/IMG_20240404_12 kopie.jpg">
            <div class="container">
              <div class="carousel-caption">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="img-fluid" id="obrazok" src="assets/imgs/IMG_20240404_125 kopie.jpg">
            <div class="container">
              <div class="carousel-caption text-end">
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
      </div>
    </main>

    <footer class="bg-dark text-white pt-1 text-center mt-auto">
      <a href="#top" id="scrollToTop" class="btn btn-primary bg-dark">Naspäť na začiatok</a>
      <div class="container">
          <div class="row">
              <div class="text-center mt-2" >
                  <h5>Sociálne siete</h5>
                  <a class="m-3 text-white fs-3" href="https://facebook.com" target="_blank" class="text-white mr-2"><i class="fa-brands fa-facebook"></i></a>
                  <a class="m-3 text-white fs-3" href="https://twitter.com" target="_blank" class="text-white mr-2"><i class="fa-brands fa-twitter"></i></a>
                  <a class="m-3 text-white fs-3" href="https://instagram.com" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
              </div>
          <div class="text-center mt-1">
              <p>&copy; 2024 Moja stránka. Všetky práva vyhradené.</p>
          </div>
      </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>