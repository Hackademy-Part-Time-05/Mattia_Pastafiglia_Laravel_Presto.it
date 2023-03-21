<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auto.it</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
  </head>
  <body>
 <!-- NAVBAR -->
 <nav id="mainNavbar" class="navbar navbar-expand-lg border-bottom p-0 ">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 fw-bold" href="#"><i class="fa-solid fa-car me-2"></i>Auto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-house"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Chi siamo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Annunci
          </a>
          <ul class="dropdown-menu rounded-0 m-0">
            <li><a class="dropdown-item" href="#">Sconto Auto</a></li>
            <li><a class="dropdown-item" href="#">Sconto Auto</a></li>
            <li><a class="dropdown-item" href="#">Sconto Auto</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contatti</a>
        </li>
        <li class="nav-item">
          <div class="d-flex">
            <a href="#" class="nav-link nav-link-icon-presto ms-lg-0 ms-2"><i class="fa-solid fa-magnifying-glass"></i></a>
            <button class="btn btn-presto ms-lg-2 ms-4">Annunci salienti</button>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Header-->
<header id="masthead">
  <div class="container-fluid">
    <div class="row">
      <div class="col p-0">
        <div id="carouselPresto" class="carousel slide  carousel-fade">
          <div class="carousel-inner">
            <div class="carousel-item active overlay">
              <div class="position-absolute top-50 start-50 translate-middle z-1 d-flex justify-content-center flex-column align-items-center">
               <span class="fs-4 text-white">Scegli</span>
               <span class="display-1 fw-bolder text-white text-center">La tua Auto</span>
               <div class="d-flex justify-content-around w-100">
                <button class="btn btn-big-presto ">Iscriviti</button> 
                <button class="btn btn-big-white-presto ">Contattaci</button>
               </div>
              </div>
              <img src="./img/wdadwd.avif" class="d-block w-100" alt="Garage_auto">
            </div>
            <div class="carousel-item overlay">
              <div class="position-absolute top-50 start-50 translate-middle z-1 d-flex justify-content-center flex-column align-items-center">
                <span class="fs-4 text-white">Fai click</span>
                <span class="display-1 fw-bolder text-white text-center">Ed è subito tua</span>
                <div class="d-flex justify-content-around w-100">
                  <button class="btn btn-big-presto ">Iscriviti</button> 
                  <button class="btn btn-big-white-presto ">Contattaci</button>
                 </div>
               </div>
              <img src="./img/photo-1614679608107-938a8d4984a9.avif" class="d-block w-100" alt="Garage_auto2">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselPresto" data-bs-slide="prev">
            <i class="fa-solid fa-angles-left fs-1"></i>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselPresto" data-bs-slide="next">
            <i class="fa-solid fa-angles-right fs-1"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>
<!--MainInfo-->
<section id="mainInfo" class="container">
  <div class="row info_presto py-lg-0 py-5 z-2">
    <div class="col-lg-4 col-12 px-5 py-3 bg-presto shadow-lg d-flex justify-content-center align-items-center">
      <div class="px-3 py-2 bg-white text-presto shadow me-3">
        <i class="fa-solid fa-dollar-sign"></i>
      </div>
      <div class="d-flex flex-column text-white">
        <span class="h6 fw-bolder ">Auto Vendute</span>
        <span class="display-5 fw-bolder">200000</span>
      </div>
    </div>
    <div class="col-lg-4 col-12 px-5 py-3 bg-white shadow-lg d-flex justify-content-center align-items-center">
      <div class="px-3 py-2 bg-presto text-white shadow me-3">
        <i class="fa-solid fa-car-battery"></i>
      </div>
      <div class="d-flex flex-column text-presto">
        <span class="h6 fw-bolder">Auto Riparate</span>
        <span class="display-5 fw-bolder">300000</span>
      </div>
    </div>
    <div class="col-lg-4 col-12 px-5 py-3 bg-presto shadow-lg d-flex justify-content-center align-items-center">
      <div class=" px-3 py-2 bg-white text-presto shadow me-3">
        <i class="fa-solid fa-user-group"></i>
      </div>
      <div class="d-flex flex-column text-white">
        <span class="h6 fw-bolder">Clienti Soddisfatti</span>
        <span class="display-5 fw-bolder">500000</span>
      </div>
    </div>
  </div>
</section>
<section style="height:700px">
</section>
<section class="container py-5">
  <div class="row">
    <div class="col-lg-7 col-12">
      <h3>Registrati</h3>
      <h2 class="display-2 fw-semibold footer-effect">Vantaggi</h2>
      <div class="d-flex justify-content-between py-4 pe-5">
        <div class="d-flex pe-5">
          <i class="fa-2x fa-solid fa-gauge-high me-3 text-presto"></i>
          <span class="fs-3">Velocità</span>
        </div>
        <div class="d-flex pe-5">
          <i class="fa-2x fa-solid fa-user me-3 text-presto"></i>
          <span class="fs-3">Visibilità</span>
        </div>
      </div>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt harum alias assumenda unde asperiores magni laboriosam id molestias aliquid, quam, maiores eos laborum pariatur voluptate amet cupiditate ex eum quaerat?</p>
      <div class="d-flex pe-5 align-items-center pb-1">
        <i class="square fa-2x fa-solid fa-check-double me-3 square text-white "></i>
        <span class="fs-3">Controlla i tuoi nuovi annunci</span>
      </div>
    </div>
    <div class="col-lg-5 col-12 bg-presto p-4">
      <form action="">
        <input class="form-control input-presto my-3" type="text" placeholder="Nome">
        <input class="form-control input-presto my-3" type="text" placeholder="Cognome">
        <input class="form-control input-presto my-3" type="text" placeholder="Email">
        <select class="form-control input-presto my-3" type="text" placeholder="Default select example">
        <option selected>Sei un venditore o acquirente?</option>
        <option value="1">Venditore</option>
        <option value="2">Acquirente</option>
        </select>
        <button type="submit" class="btn btn-alternative-presto w-100">Registrati
        </button>
      </form>
    </div>
  </div>
</section>
<!--Footer-->
<footer id="mainFooter" class="bg-alternative-presto text-white">
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-12 bg-presto">
      <a class="navbar-brand fs-3 fw-bold d-block text-center m-3" href="#"><i class="fa-solid fa-car me-2"></i>Auto.it</a>
      <p class="m-3 d-block text-center">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint optio reprehenderit quam officia! Odio, nesciunt voluptatem. Modi maiores, provident delectus omnis voluptate doloremque enim debitis! Molestias inventore saepe vero vel!
      </p>
      <form action="">
        <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Inserisci Email" aria-label="Recipient's email" aria-describedby="button-input-2">
        <button class="btn btn-alternative-presto" type="submit">Invia</button>
      </div></form>
    </div>
    <div class="col-lg-9 col-md-6 col-12 p-5">
      <div class="row">
      <div class="col-lg-4 col-12">
        <h3 class="footer-effect">Titolo</h3>
        <div class="d-flex flex-column ">
          <span class="my-1">
            Via Monza123
        </span>
        <span class="my-1">
          Monza@auto.it
        </span>
        <span class="my-1">
          39240138274
        </span>
        <div class="d-flex my-3">
          <div class="px-3 py-2 social me-1">
           <a href="" class="nav-link-footer"><i class="fa-brands fa-twitter"></i></a>
          </div>      
          <div class="px-3 py-2 social me-1">
            <a href="" class="nav-link-footer"><i class="fa-brands fa-facebook-f"></i></a>
          </div>      
          <div class="px-3 py-2 social me-1">
            <a href="" class="nav-link-footer"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <div class="px-3 py-2 social me-1">
            <a href="" class="nav-link-footer"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-4 col-12">
        <h3 class="footer-effect">Titolo</h3>
        <ul class="nav flex-column footer-list">
          <li class="nav-item p-0">
            <a class="nav-link" href="#"><i class="fa-solid fa-angles-right me-3 text-white"></i><span class="text-white">Contatti</span></a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" href="#"><i class="fa-solid fa-angles-right me-3 text-white"></i><span class="text-white">Contatti</span></a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" href="#"><i class="fa-solid fa-angles-right me-3 text-white"></i><span class="text-white">Contatti</span></a>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-12">
        <h3 class="footer-effect">Titolo</h3>
        <ul class="nav flex-column footer-list">
          <li class="nav-item p-0">
            <a class="nav-link" href="#"><i class="fa-solid fa-angles-right me-3 text-white"></i><span class="text-white">Contatti</span></a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" href="#"><i class="fa-solid fa-angles-right me-3 text-white"></i><span class="text-white">Contatti</span></a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" href="#"><i class="fa-solid fa-angles-right me-3 text-white"></i><span class="text-white">Contatti</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>