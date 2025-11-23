<?php
require_once __DIR__ . '/../config.php';
start_page('Entreprise: Bootstrap');
?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TechCorp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse gap-2" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex me-2" role="search">
        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search" />
        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
      </form>
      <a href="#" class="btn btn-primary"><i class="bi bi-person-circle  me-2"></i>Connexion</a>
    </div>
  </div>
</nav>


<!-- Section carousel -->

<div id="carouselExampleCaptions" class="w-100 carousel slide mt-4 position-relative" data-bs-ride="carousel">

  <div class="carousel-indicators top1">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner text-center w-100 ">
    <div class="carousel-item active bg-info text-white py-5">
      <h2 class="fw-bold">Innovation Digitale</h2>
      <p>Transformez vos idées en réalités</p>
      <a href="#" class="btn btn-light px-4">Découvrir</a>
    </div>
    <div class="carousel-item  bg-danger text-white py-5">
      <h2>Expertise Reconnue</h2>
      <p>Plus de 10 ans d'expérience</p>
      <a href="#" class="btn btn-light px-4">Contactez-nous</a>
    </div>
    <div class="carousel-item bg-success text-white py-5">
      <h2>Solutions Créatives</h2>
      <p>Des projets qui marquent les esprits</p>
      <a href="#" class="btn btn-light px-4">Nos Projets</a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<!-- section statistiques -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-md-3">
        <div class="stat-box h-100  border border-primary p-3 rounded-2">
          <i class="bi bi-people-fill text-primary me-2 fs-4"></i>
          <h2 class="fw-bold">500+</h2>
          <p>Clients Satisfaits</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-box h-100 border border-sucess p-3 rounded-2">
          <i class="bi bi-trophy-fill text-success fs-3"></i>
          <h2 class="fw-bold">150+</h2>
          <p>Projets Réalisés</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-box h-100 border border-warning p-3 rounded-2">
          <i class="bi bi-star-fill text-warning fs-4"></i>
          <h2 class="fw-bold">25+</h2>
          <p>Prix Remportés</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-box h-100 border border-danger p-3 rounded-2">
          <i class="bi bi-clock-fill text-danger fs-4"></i>
          <h2 class="fw-bold">10+</h2>
          <p>Années d’Expérience</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section CARD dans un grid -->
<section class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <h5 class="card-header bg-primary text-white fw-bold"><i class="bi bi-code-slash fs-3 me-2"></i>Développement Web</h5>
        <div class="card-body">
          <p class="card-text">Sites web modernes et apllications performantes avec les dernières technologies.</p>
          <span class="bg-primary text-white p-2 rounded-2 me-1">React</span>
          <span class="bg-primary text-white p-2 rounded-2 me-1">Vue.js</span>
          <span class="bg-primary text-white p-2 rounded-2 me-1">Node.js</span>
          <div class="progress mt-3" style="height: 35px;">
            <div class="progress-bar bg-primary fs-5 " role="progressbar"
              style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              90% Satisfaction
            </div>
          </div>
        </div>
        <div class="card-footer text-body-secondary">
          <a href="#" class="w-100 btn btn-primary text-white">En savoir plus</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <h5 class="card-header bg-success text-white fw-bold"><i class="bi bi-palette fs-3 me-2"></i>Design UX/UI</h5>
        <div class="card-body">
          <p class="card-text">Interfaces intuitives et expériences utilisateur exceptionnelles pour vos projets.</p>
          <span class="bg-success text-white p-2 rounded-2 me-1">Figma</span>
          <span class="bg-success text-white p-2 rounded-2 me-1">Adobe XD</span>
          <span class="bg-success text-white p-2 rounded-2 me-1">Sketch</span>
          <div class="progress mt-3" style="height: 35px;">
            <div class="progress-bar  progress-bar-striped bg-success fs-5 " role="progressbar"
              style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              85%
            </div>
          </div>
        </div>
        <div class="card-footer text-body-secondary">
          <a href="#" class="w-100 btn btn-success text-white">En savoir plus</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <h5 class="card-header bg-warning text-white fw-bold"><i class="bi bi-graph-up-arrow fs-3 me-2"></i>Marketing Digital</h5>
        <div class="card-body">
          <p class="card-text">Stratégies dggitales sur mesure pour booster votre visibilité en ligne.</p>
          <span class="bg-warning text-white p-2 rounded-2 me-1">SEO</span>
          <span class="bg-warning text-white p-2 rounded-2 me-1">Social Media</span>
          <span class="bg-warning text-white p-2 rounded-2 me-1">Analytics</span>
          <div class="progress mt-3" style="height: 35px;">
            <div class="progress-bar  progress-bar-striped bg-warning fs-5 " role="progressbar"
              style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
              95%
            </div>
          </div>
        </div>
        <div class="card-footer text-body-secondary">
          <a href="#" class="w-100 btn btn-warning text-white">En savoir plus</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->

<section>



</section>


<!-- Bootstrap JS : placer à la fin du body pour garantir que le DOM est chargé -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>