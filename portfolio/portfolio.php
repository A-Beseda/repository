<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje portfólio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
        <!--font awesome-->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!--font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
    main {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark row" aria-label="Fourth navbar example">
        <div class="container ms-3">
          <a class="navbar-brand"><strong>Adrian Beseda</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0 ms-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Domov</a>
              </li>
              <li class="nav-item">
               <a class="nav-link active" href="portfolio.html">Portfólio</a>
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
    
    <main>
      <div class="container mt-5">
        <div class="gallery-grid">
            <div class="gallery-item row-2x">
                <img src="assets/imgs/IMG_20240404_114915.jpg" alt="Image 1">
                <div class="description">Umelecké fotenie</div>
            </div>
            <div class="gallery-item">
                <img src="assets/imgs/IMG_20240404_125905.jpg" alt="Image 2">
                <div class="description">Umelecké fotenie</div>
            </div>
            <div class="gallery-item">
                <img src="assets/imgs/úloha2.1-5.jpg" alt="Image 4">
                <div class="description">Umelecké fotenie</div>
            </div>
            <div class="gallery-item col-2x">
                <img src="assets/imgs/in_carton (1).jpg" alt="Image 5">
                <div class="description">Photoshop</div>
            </div>
            <div class="gallery-item">
              <img src="assets/imgs/úlohaX.jpg" alt="Image 5">
              <div class="description">Umelecké fotenie</div>
            </div>
            <div class="gallery-item"> 
              <img src="assets/imgs/bytovka1.jpg" alt="Image 5">
              <div class="description">Blender</div>
            </div>
            <div class="gallery-item">
              <img src="assets/imgs/prolog_1.0.jpg" alt="Image 5">
              <div class="description">Blender</div>
            </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>