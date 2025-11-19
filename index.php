<?php
// index.php - Page principale du site ICPM Conference
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/img/logo.png">

  <title>ICPM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<style>
  body, h1, h2, h3, h4, h5, h6, p, a, button, input, textarea {
    font-family: 'Poppins', sans-serif;
}


body, p, li, span,  {
    text-align: justify;
}

#speakers {
  display: ;
}

</style>

<body>

<!-- Header -->
<style>@media (max-width: 768px) {
  .navbar-brand {
    margin-left: -55px !important;
    padding-left: 0 !important;
    justify-content: flex-start !important;
    text-align: left !important;
  }
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand ms-0 ms-lg-3" href="#">
      <img src="assets/img/logo.png" alt="ICPM Logo" height="40">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Basculer la navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#hero">ACCUEIL</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">A PROPOS</a></li>
        <li class="nav-item"><a class="nav-link" href="#speakers">INTERVENANTS</a></li>
        <li class="nav-item"><a class="nav-link" href="#program">PROGRAMME</a></li>
        <li class="nav-item"><a class="nav-link" href="#partners">PARTENAIRES</a></li>
        <li class="nav-item"><a class="nav-link" href="#pricing">TARIFS</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- Hero -->
<section id="hero" class="d-flex align-items-center text-center bg-light">
  <div class="container">
    <h1 class="display-4 fw-bold">ICPM CONFERENCE</h1>
    <h3 class="lead fw-bold">INTERNATIONAL CONFERENCE ON PROJECT MANAGEMENT (ICPM)</h3>  <br>
    <button class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#reservationModal" data-place="VIP">
              Réservez votre place
            </button>
  </div>
</section>

<!-- About -->
<section id="about" class="py-5" style="background-color:#f8f9fa;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Texte principal -->
      <div class="col-lg-6 mb-4 mb-lg-0">
      <!--  <h2 style="color:#fac605; font-weight:bold;">ICPM : Innover pour le développement</h2>
        <p style="color:#103c7b; text-align:justify;">
  <strong>La conférence ICPM</strong> est un rendez-vous annuel dédié à l’univers de la gestion de projet. 
  Elle réunit professionnels, experts, étudiants et passionnés autour de thématiques innovantes,
  d’ateliers pratiques et de partages d’expériences enrichissants.
</p> -->

        <h3 style="color:#fac605; font-weight:bold;">RENDEZ-VOUS UNIQUE</h3> <br>
        <p style="color:#103c7b; text-align:justify;"><strong>L'International Conference on Project Management (ICPM)</strong> est un événement clé qui renforce les capacités des entreprises et des organisations publiques en Afrique. Ce rendez-vous rassemble experts et décideurs pour partager des 
          expériences et explorer de nouvelles approches en gestion de projet. L'ICPM vise à positionner le Bénin comme un centre de référence en Afrique pour la conception et le pilotage d'initiatives stratégiques, en intégrant les nouvelles technologies pour optimiser la prise de décision et assurer la croissance et la durabilité des organisations.</p>

        

        <!-- Cartes avec icônes dans cercles -->
        <div class="row mt-4 g-4">
          <div class="col-md-6">
            <div class="icon-card rounded p-3 d-flex align-items-start hover-card">
              <div class="icon-circle me-3">
                <i class="fas fa-lightbulb fa-2x"></i>
              </div>
              <div>
                <h5 style="color:#103c7b;">THEME</h5>
                <p style="color:#103c7b;">“LA PLANIFICATION STRATÉGIQUE AU CŒUR DE L’ENTREPRISE.”</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="icon-card rounded p-3 d-flex align-items-start hover-card">
              <div class="icon-circle me-3">
                <i class="fas fa-map-marker-alt fa-2x"></i>
              </div>
              <div>
                <h5 style="color:#103c7b;">LIEU ET DATE</h5>
                <p style="color:#103c7b;">PALAIS DES CONGRES DE COTONOU, LE 13 NOVEMBRE 2025.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="col-lg-6">
        <img src="assets/img/propos1.jpg" class="img-fluid rounded shadow" alt="About ICPM">
      </div>
    </div>
  </div>
</section>

<!-- Styles CSS -->
<style>
  /* Cartes hover */
  .hover-card {
    background-color: #fff;
    transition: transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    padding: 1rem;
  }
  .hover-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
  }

  /* Cercle pour icônes */
  .icon-circle {
    width: 60px;
    height: 60px;
    background-color: #fac605;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: transform 0.3s, background-color 0.3s;
  }
  .hover-card:hover .icon-circle {
    transform: scale(1.2);
    background-color: #ffd93b;
  }

  /* Icones */
  .icon-circle i {
    color: #103c7b;
  }
</style>



<!-- Speakers -->
<section id="speakers" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-2" style="color:#fac605; font-weight:bold;">INTERVENANTS</h2>
    <p class="text-center mb-5" style="color:#103c7b; font-size:1.1rem;">
      Découvrez les experts, professionnels et chefs d'entreprises  qui partageront leurs connaissances et expériences lors de l’ICPM.
    </p>

    <div class="row g-4">
      <!-- Speaker 1 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speakers1.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 1">
        </div>
      </div>

      <!-- Speaker 2 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker2.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>

      <!-- Speaker 3 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker3.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 3">
        </div>
      </div>

      <!-- Speaker 4 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker4.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 4">
        </div>
      </div>

      <!-- Speaker 5 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker5.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 4">
        </div>
      </div>
      

      <!-- Speaker 6 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker6.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 6">
        </div>
      </div>

      <!-- Speaker 7 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker7.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 7">
        </div>
      </div>
      
      
      <!-- Speaker 10 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker10.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      
      <!-- Speaker 11 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker11.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      
      <!-- Speaker 12 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker12.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      
      <!-- Speaker 13 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker13.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      

      <!-- Speaker 8 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker8.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 4">
        </div>
      </div>
      

      <!-- Speaker 9 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker9.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 4">
        </div>
      </div>
      
      
      <!-- Speaker 14 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker14.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      
      <!-- Speaker 15 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker15.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      <!-- Speaker 16 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker16.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      <!-- Speaker 17 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker17.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      <!-- Speaker 21 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker21.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 7">
        </div>
      </div>
      
       <!-- Speaker 18 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker18.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
       <!-- Speaker 19 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker19.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
       <!-- Speaker 20 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker20.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 2">
        </div>
      </div>
      
      
       <!-- Speaker 22 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker22.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 22">
        </div>
      </div>
      
      
      <!-- Speaker 22 -->
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center speaker-card">
          <img src="assets/img/speaker23.jpeg" class="card-img-top rounded shadow-sm" alt="Speaker 23">
        </div>
      </div>

      <!-- Speaker 10 -->
      

    </div>
  </div>
</section>

<!-- CSS à mettre dans <style> ou fichier CSS -->
<style>
.speaker-card {
  border: 2px solid transparent;
  transition: transform 0.3s, border 0.3s, box-shadow 0.3s;
  cursor: pointer;
  overflow: hidden;
}

.speaker-card img {
  transition: transform 0.3s, filter 0.3s;
}

.speaker-card:hover {
  transform: scale(1.03);
  border: 2px solid #fac605;
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.speaker-card:hover img {
  transform: scale(1.1);
  filter: brightness(1.1);
}
</style>






<!-- Program -->





<!-- Program -->
<section id="program" class="py-5" style="background-color:#f9f9f9;">
  <div class="container">
    <h2 class="text-center mb-2" style="color:#fac605; font-weight:bold;">PROGRAMME</h2>
    <p class="text-center mb-5" style="color:#103c7b; font-size:1.1rem;">
      Découvrez le programme complet de l’ICPM 2025 avec tous les panels, keynotes et activités prévues pour enrichir vos compétences.
    </p>

    <div class="row g-4">
        
        <!-- Jour 0 -->
    <!--  <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">ARRIVEE & INSTALLATION</h4>
            <h6 class="mb-3">08H:00 - 09H:00</h6>
            <p class="card-text">Accueil des participants, remise des kits et installation dans une ambiance conviviale avant l’ouverture de la conférencce.</p>
          </div>
        </div>
      </div>  -->
        
        
      
      <!-- Jour 1 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">LANCEMENT OFFICIEL</h4>
            <h6 class="mb-3">09H:00 - 10H:00</h6>
            <p class="card-text">Céremonie d'ouverture + Remise de prix ICPM CHALLENGE + Photo de famille</p>
          </div>
        </div>
      </div>

      <!-- Jour 2 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">KEYNOTE 1</h4>
            <h6 class="mb-3">10H:00 - 10H:15</h6>
            <p class="card-text">De la vision Alafia 2025 à la vision Bénin 2060 : Leçons apprises et dynamiques de projections stratégiques des PME.</p>
          </div>
        </div>
      </div>

      <!-- Jour 3 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">KEYNOTE 2</h4>
            <h6 class="mb-3">10H:15 - 10H:30</h6>
            <p class="card-text">Anticiper l'imprévu : le rôle stratégique des assurances dans la planification et la pérennité des entreprises au Bénin.</p>
          </div>
        </div>
      </div>

      <!-- Jour 4 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">PANEL 1</h4>
            <h6 class="mb-3">10H:30 - 11H:10</h6>
            <p class="card-text">Entreprendre dans l’incertitude : Quels outils de planification pour des choix stratégiques gagnants ?</p>
          </div>
        </div>
      </div>

      <!-- Jour 5 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">ICPM CHALLENGE</h4>
            <h6 class="mb-3">11H:10 - 11H:30</h6>
            <p class="card-text">Un défi stimulant conçu pour mettre à l’épreuve vos compétences en gestion de projet à travers des cas pratiques.</p>
          </div>
        </div>
      </div>

      <!-- Jour 6 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">PANEL 2</h4>
            <h6 class="mb-3">11H:30 - 12H:10</h6>
            <p class="card-text"> Planifier à l’ère du Bigdata : comment les entreprises s’appuient sur les données pour anticiper les futurs possibles ?   </p>
          </div>
        </div>
      </div>

      <!-- Jour 7 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">KEYNOTE 3</h4>
            <h6 class="mb-3">12H:15 - 12H:30</h6>
            <p class="card-text">Penser le futur, agir maintenant : quand la théorie du changement guide la stratégie des entreprises béninoises.  </p>
          </div>
        </div>
      </div>
      
      
            <!-- Pause -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">KEYNOTE 4</h4>
            <h6 class="mb-3">12H:30 - 12H:45</h6>
            <p class="card-text">Les PMO à l’épreuve de la stratégie : orchestrer les portefeuilles projets pour maximiser la valeur.</p>
            
          </div>
        </div>
      </div>
      
      
         <!-- PANEL 3 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">PAUSE DEJEUNER & RESEAUTAGE</h4>
            <h6 class="mb-3">12H:45 - 14H:00</h6>
            <p class="card-text">Moment convivial pour partager un cocktail, échanger et développer son réseau professionnel.</p>
          </div>
        </div>
      </div>
      
      

      <!-- Jour 8 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">PANEL 3</h4>
            <h6 class="mb-3">14H:00 - 15H:00</h6>
            <p class="card-text"> Financement vert ; ESG et fiscalité durable : quels leviers stratégiques pour transformer les modèles économiques au Bénin ?  </p>
          </div>
        </div>
      </div>
      
      
      
            <!-- Jour 9 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">KEYNOTE 5</h4>
            <h6 class="mb-3">15H:00 - 15H:30</h6>
            <p class="card-text">L’IA comme outil de planification stratégique: promesses et limites.
                </p>
          </div>
        </div>
      </div>
      
      

      <!-- Jour 10 -->
      <div class="col-md-4">
        <div class="card h-100 text-center program-card">
          <div class="card-body">
            <h4 class="card-title">CEREMONIE DE CLÔTURE</h4>
            <h6 class="mb-3">15H:30 - 16H:00 </h6>
            <p class="card-text">Un moment solennel pour exprimer les gratitudes et remerciements.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS à ajouter dans <style> ou fichier CSS -->
<style>
.program-card {
  border: 2px solid transparent;
  transition: transform 0.3s, border 0.3s, box-shadow 0.3s;
  cursor: pointer;
  overflow: hidden;
}

.program-card:hover {
  transform: scale(1.03);
  border: 2px solid #fac605;
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}
</style>


<style>
/* Styles communs pour toutes les cartes */
.program-card {
  border: 2px solid #103c7b;
  border-radius: 15px;
  transition: all 0.3s ease-in-out;
}

.program-card .card-title {
  color: #103c7b;
  font-weight: bold;
}

.program-card h6 {
  color: #fac605;
  font-weight: bold;
}

.program-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
  border-color: #fac605;
}

.program-card:hover .card-title {
  color: #fac605;
}

.program-card:hover h6 {
  color: #103c7b;
}
</style>



<!-- Bloc de téléchargement du programme ICPM -->
<section style="padding:50px 20px;background:linear-gradient(135deg,#004aad,#0077b6);color:white;text-align:center;border-radius:12px;margin:40px auto;max-width:900px;box-shadow:0 10px 25px rgba(0,0,0,0.2);">
  
  <h2 style="font-size:1.5em;margin-bottom:10px;color:#ffcc00;">📘 Téléchargez le programme complet de l’ICPM 2025</h2>
  <p style="font-size:1.1em;max-width:700px;margin:0 auto 25px;">
    Découvrez le déroulé complet de la <strong>Conférence Internationale ICPM 2025</strong> : les Keynotes, les intervenants, les panels et les moments forts qui marqueront cet événement unique.
  </p>

  <a href="/assets/img/PROGRAMME_ICPM.pdf" download class="download-btn" 
     style="display:inline-block;background:#ffcc00;color:#003366;font-weight:600;padding:15px 30px;text-decoration:none;border-radius:50px;transition:all 0.3s ease-in-out;box-shadow:0 4px 10px rgba(0,0,0,0.3);">
    📄 Télécharger le programme (PDF)
  </a>

  <script>
    // Effet de survol dynamique
    const btn = document.querySelector('.download-btn');
    btn.addEventListener('mouseover', () => {
      btn.style.background = '#ffffff';
      btn.style.color = '#004aad';
      btn.style.transform = 'scale(1.05)';
    });
    btn.addEventListener('mouseout', () => {
      btn.style.background = '#ffcc00';
      btn.style.color = '#003366';
      btn.style.transform = 'scale(1)';
    });
  </script>
</section>




<!-- ===== PARTNERS ===== -->
<section id="partners" class="py-5" style="background-color:#f9f9f9;">
  <div class="container">
    <!-- Titre et sous-titre -->
    <h2 class="text-center mb-2" style="color:#fac605; font-weight:bold;">AVANTAGES ET PARTENAIRES</h2>
    <p class="text-center mb-5" style="color:#103c7b; font-size:1.1rem;">
      Découvrez les avantages de participer à l’ICPM et les partenaires qui nous soutiennent pour faire de cet événement un succès.
    </p>

    <!-- Avantages en 4 grilles avec icônes -->
    <div class="row g-4 mb-5">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center p-3">
          <div class="mb-2">
            <i class="bi bi-people-fill" style="font-size:2rem; color:#fac605;"></i>
          </div>
          <h5 class="card-title" style="color:#103c7b;">Networking</h5>
          <p class="card-text">Rencontrez des professionnels, experts et décideurs pour élargir votre réseau et créer des opportunités.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center p-3">
          <div class="mb-2">
            <i class="bi bi-journal-bookmark-fill" style="font-size:2rem; color:#fac605;"></i>
          </div>
          <h5 class="card-title" style="color:#103c7b;">Formation & Expertise</h5>
          <p class="card-text">Bénéficiez de sessions de discussion et keynote pour approfondir vos connaissances en gestion de projet.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center p-3">
          <div class="mb-2">
            <i class="bi bi-lightbulb-fill" style="font-size:2rem; color:#fac605;"></i>
          </div>
          <h5 class="card-title" style="color:#103c7b;">Innovation</h5>
          <p class="card-text">Découvrez de nouvelles approches et technologies pour optimiser vos projets et améliorer la performance de vos organisations.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 text-center p-3">
          <div class="mb-2">
            <i class="bi bi-megaphone-fill" style="font-size:2rem; color:#fac605;"></i>
          </div>
          <h5 class="card-title" style="color:#103c7b;">Insertion professionnelle</h5>
          <p class="card-text">Opportunité pour les jeunes de rencontrer des experts et préparer leur avenir en gestion de projet.</p>
        </div>
      </div>
    </div>

   <!-- qui organise icpm -->
    <div class="mb-5">
       <h5 class="card-title" style="color:#fac605; font-weight:bold;">Qui organise ICPM ? </h5> <br>
      <p style="color:#103c7b; font-size:1.05rem; text-align:justify;">
        <strong>L'ICPM</strong> est organisé par<strong> Team GMC SARL</strong> et ses partenaires. La Team GMC est une société spécialisée dans la gestion de projet, apportant une expertise pointue dans :   <br>

- Le montage et la conception de projets innovants et durables.  <br>
- La planification stratégique  pour une gestion efficace et performante.  <br>
- La mise en place de mécanismes de suivi-évaluation, garantissant la pérennité et l’impact des initiatives.  <br>
- La gestion des risques, anticipant les défis et assurant la résilience des projets.  <br>
- Le renforcement des capacités en planification et gestion de projet, offrant des formations de haut niveau adaptées aux besoins actuels. <br>

À la tête de Team GMC SARL,<strong> Gérardo Marcos CODJO</strong>, Ingénieur Planificateur-Économiste & Gestionnaire de projets  pilote l’entreprise avec vision et rigueur, accompagnant les organisations dans leurs stratégies de développement et d’optimisation. <br>

<br>Contacts :<br>
📍 Adresse : Abomey-Calavi / Bénin <br>
📞 Téléphone : +229 019 512 9622 <br>
📧 Email : teamgmcsarl@gmail.com <br>
🌐 Site Web : team-gmc.com <br> <br>

Engagée pour l’excellence et l’innovation, <strong>Team GMC SARL</strong> est votre partenaire stratégique pour mener vos projets vers le succès. <br> 

<strong>Team GMC SARL - Manage with excellence, Plan with precision.</strong>
      </p>
    </div>

    <!-- Partenaires -->

<div class="row justify-content-center align-items-center gx-3 gy-3">
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
      <img src="assets/img/gmcf.png" alt="Partenaire 1" class="img-fluid partner-logo">
    </div>
  </div>
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
      <img src="assets/img/eneam.png" alt="Partenaire 2" class="img-fluid partner-logo">
    </div>
  </div>
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
      <img src="assets/img/inter.png" alt="Partenaire 3" class="img-fluid partner-logo">
    </div>
  </div>
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
      <img src="assets/img/atrix.png" alt="Partenaire 4" class="img-fluid partner-logo">
    </div>
  </div>
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/tre.png" alt="Partenaire 5" class="img-fluid partner-logo">
    </div>
  </div>
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/lenvol.jpeg" alt="Partenaire 6" class="img-fluid partner-logo">
    </div>
  </div>
  
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/tl.png" alt="Partenaire 6" class="img-fluid partner-logo">
    </div>
  </div>
  
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/wm.png" alt="Partenaire 6" class="img-fluid partner-logo">
    </div>
  </div>
  
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/nyumba.png" alt="Partenaire 7" class="img-fluid partner-logo">
    </div>
  </div>
  
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/DSA.png" alt="Partenaire 8" class="img-fluid partner-logo">
    </div>
  </div>
  
  
  
 <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/ga.png" alt="Partenaire 9" class="img-fluid partner-logo">
    </div>
  </div>
  
  
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/projet.jpg" alt="Partenaire 10" class="img-fluid partner-logo">
    </div>
  </div>
  
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/team.JPG" alt="Partenaire 13" class="img-fluid partner-logo">
    </div>
  </div>
  
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/sin.png" alt="Partenaire 14" class="img-fluid partner-logo">
    </div>
  </div>  
  
  
  <div class="col-6 col-md-3 text-center">
    <div class="partner-box">
    <img src="assets/img/atypix.jpg" alt="Partenaire 15" class="img-fluid partner-logo">
    </div>
  </div>
  

  <!-- Continue pour les 10 logos -->
</div>

<!-- Styles CSS -->
<style>
  .partner-box {
    background-color: #e6f0fa; /* Bleu clair doux */
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    height: 160px;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .partner-box:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  }

  .partner-logo {
    max-height: 120px;
    object-fit: contain;
  }
</style>



</section>

<!-- Styles CSS -->
<style>
  /* Hover cards */
  .card {
    border: none;
    background-color: #fff;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
  }

  /* Partenaires */
  .partners-grid img {
    max-height: 60px;
    object-fit: contain;
    transition: transform 0.3s;
  }
  .partners-grid img:hover {
    transform: scale(1.1);
  }
</style>




<!-- Pricing -->
<!-- SECTION TARIFS -->
<section id="pricing" class="py-5" style="background-color:#103c7b;">
  <div class="container">
    <h2 class="text-center mb-2" style="color:#fac605; font-weight:bold;">TARIFS</h2>
    <p class="text-center mb-5" style="color:white; font-size:1.1rem;">
      Ne manquez pas l’ICPM ! Réservez vite, les places sont limitées.
    </p>

    <div class="row g-4 justify-content-center">
      <!-- Place Standard -->
      <div class="col-md-5">
        <div class="card text-center shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="card-title" style="color:#103c7b; font-weight:bold;">Place Standard</h5>
            <p class="card-text" style="font-size:1.5rem; font-weight:bold;">10.000 XOF</p>
            <button class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#reservationModal" data-place="Standard">
              Réservez votre place
            </button>
          </div>
        </div>
      </div>

      <!-- Place VIP -->
      <div class="col-md-5">
        <div class="card text-center shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="card-title" style="color:#103c7b; font-weight:bold;">Place VIP</h5>
            <p class="card-text" style="font-size:1.5rem; font-weight:bold;">25.000 XOF</p>
            <button class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#reservationModal" data-place="VIP">
              Réservez votre place
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MODAL FORMULAIRE -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content custom-modal">
      <form method="POST" action="reservation.php" id="reservationForm">
        <div class="modal-header border-0">
          <h5 class="modal-title text-white" id="reservationModalLabel">Demande d'achat</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
        </div>
        <div class="modal-body">
          <div id="formMessage"></div> <!-- message succès/erreur -->

          <div class="mb-3">
            <label class="form-label text-white">Nom complet</label>
            <input type="text" name="nom" class="form-control" required>
          </div>
          
          
           <div class="mb-3">
      <label class="form-label text-white">Adresse e-mail</label>
      <input type="email" name="email" class="form-control" required>
    </div>
          

          <div class="mb-3">
            <label class="form-label text-white">Numéro de téléphone</label>
            <input type="tel" name="telephone" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label text-white">Type de place</label>
            <div class="d-flex gap-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="place" id="standard" value="Standard" required>
                <label class="form-check-label text-white" for="standard">Standard</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="place" id="vip" value="VIP" required>
                <label class="form-check-label text-white" for="vip">VIP</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label text-white">Nombre de places</label>
            <input type="number" name="nombre" class="form-control" min="1" required>
          </div>

        </div>
        <div class="modal-footer border-0">
          <button type="submit" class="btn custom-btn">Demande d'achat</button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  /* Fond du modal */
.custom-modal {
  background-color: #103c7b; /* bleu ICPM */
  color: white;
  border-radius: 10px;
}

/* Bouton de fermeture en blanc */
.btn-close-white {
  filter: invert(1);
}

/* Boutons submit */
.custom-btn {
  background-color: #fac605;
  color: #103c7b;
  font-weight: bold;
  border: none;
}
.custom-btn:hover {
  background-color: #e0b304;
  color: white;
}

/* Labels des boutons radio */
.form-check-label {
  font-weight: bold;
}

</style>


<!-- Styles personnalisés -->
<style>
  .custom-btn {
    background-color: #fac605;
    color: #103c7b;
    font-weight: bold;
    border: none;
  }
  .custom-btn:hover {
    background-color: #e0b304; /* jaune foncé */
    color: white;
  }
</style>



<!-- Contact -->
<section id="contact" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-2" style="color:#fac605; font-weight:bold;">CONTACTEZ-NOUS</h2>
    <p class="text-center mb-4" style="color:#103c7b; font-size:1.1rem;">
      Vous avez des questions ou souhaitez en savoir plus sur l’ICPM 2025 ? Notre équipe est là pour vous répondre.
    </p>

    <p class="text-center mb-5" style="color:#103c7b; font-size:1rem;">
      Pour toute information, vous pouvez nous contacter par email, téléphone ou via notre formulaire ci-dessous. 
      <br>
      <strong>Email :</strong> contact@icpm-conference.com  <strong>Téléphone :</strong>  +229 019 512 9622
      <br>
      <strong>Adresse :</strong> Palais des congrès, Cotonou, Bénin
    </p>

    <!-- Message succès/erreur -->
    <div id="contactMessage" class="mb-3 text-center"></div>

    <form id="contactForm" class="col-lg-8 mx-auto">
      <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn" style="background-color:#fac605; color:#103c7b; font-weight:bold;">
          Envoyer
        </button>
      </div>
    </form>
  </div>
</section>



<!-- Footer -->
<footer class="text-center py-4" style="background-color:#103c7b; color:white;">
  <div class="mb-3">
    <!-- Icônes réseaux sociaux -->
    <a href="https://www.linkedin.com/company/international-conference-on-project-management-icpm/" target="_blank" class="social-icon">
      <i class="bi bi-linkedin"></i>
    </a>
    <a href="https://www.facebook.com/profile.php?id=61573083375518" target="_blank" class="social-icon">
      <i class="bi bi-facebook"></i>
    </a>
    <a href="https://wa.me/2290195129622" target="_blank" class="social-icon">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>
  <p class="mb-0">&copy; 2025 ICPM. Tous droits réservés.</p>
</footer>

<!-- CSS -->
<style>
.social-icon {
  color: white;
  font-size: 1.5rem;
  margin: 0 10px;
  transition: transform 0.3s, color 0.3s;
}

.social-icon:hover {
  color: #fac605;  /* Jaune ICPM */
  transform: scale(1.2);
}
</style>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('reservationForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Empêche le rechargement de la page

    var form = this;
    var formData = new FormData(form);

    fetch('reservation.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        var messageDiv = document.getElementById('formMessage');

        if(data.trim() === "success") {
            messageDiv.innerHTML = '<div class="alert alert-success">Réservation envoyée avec succès !</div>';
            form.reset(); // reset du formulaire
        } else if(data.trim() === "invalid") {
            messageDiv.innerHTML = '<div class="alert alert-warning">Veuillez remplir correctement tous les champs.</div>';
        } else {
            messageDiv.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer plus tard.</div>';
        }
    })
    .catch(error => {
        document.getElementById('formMessage').innerHTML = '<div class="alert alert-danger">Erreur serveur. Veuillez réessayer.</div>';
        console.error('Erreur:', error);
    });
});
</script>



<script>
document.getElementById("contactForm").addEventListener("submit", function(e){
    e.preventDefault(); // Empêche le rechargement de page

    const formData = new FormData(this);
    const messageDiv = document.getElementById("contactMessage");
    messageDiv.innerHTML = "Envoi en cours...";

    fetch("sendmail.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status === "success"){
            messageDiv.innerHTML = '<div class="alert alert-success">Votre message a été envoyé avec succès !</div>';
            document.getElementById("contactForm").reset();
        } else if(data.status === "invalid"){
            messageDiv.innerHTML = '<div class="alert alert-warning">Veuillez remplir correctement tous les champs.</div>';
        } else {
            messageDiv.innerHTML = '<div class="alert alert-danger">Erreur serveur. Veuillez réessayer plus tard.</div>';
        }
    })
    .catch(error => {
        messageDiv.innerHTML = '<div class="alert alert-danger">Erreur réseau. Veuillez réessayer.</div>';
        console.error(error);
    });
});
</script>



<script>
window.addEventListener('DOMContentLoaded', () => {
  const section = document.querySelector('section');
  section.style.opacity = '0';
  section.style.transform = 'translateY(40px)';
  setTimeout(() => {
    section.style.transition = 'all 0.8s ease';
    section.style.opacity = '1';
    section.style.transform = 'translateY(0)';
  }, 200);
});
</script>



</body>
</html>
