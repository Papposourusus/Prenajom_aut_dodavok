<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>SnapX Photography by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<?php include 'parts/header.php'; ?>

<style>
.vehicle-carousel-section {
  padding: 60px 0;
  background-color: #f9f9f9;
}
.vehicle-carousel .card {
  background: white;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s;
}
.vehicle-carousel .card:hover {
  transform: translateY(-5px);
}

  </style>

<?php
// Načítaj triedu
require_once 'classes/PageRenderer.php';

// Vytvor inštanciu triedy
$page = new PageRenderer();

// Zavolaj vykreslenie pohľadu "home" (views/home.php)
$page->render('home');


  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="header-text">
            <h2>Vaše cesty začínajú u <em>NÁS</em> Objavte slobodu jazdy ešte <em>DNES</em></h2>
            <p>Pre každú cestu máme riešenie – spoľahlivé dodávky a autá, ktoré vás bezpečne dovedú k cieľu. Prenájom bez komplikácií, s dôrazom na pohodlie a kvalitu.</p>
            <div class="buttons">
              <div class="big-border-button">
                <a href="categories.php">Čekni naše fára</a>
              </div>
              <div class="icon-button">
                <a href="https://www.youtube.com/watch?v=ALhAQyaYGwk&ab_channel=VSromio" target="_blank"><i class="fa fa-play"></i> Z 0 na 100 jak sa patrý <---</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

<?php
$mysqli = new mysqli("localhost", "root", "", "auta"); 

if ($mysqli->connect_errno) {
    echo "Failed to connect: " . $mysqli->connect_error;
    exit();
}

$query = "SELECT * FROM auta";
$result = $mysqli->query($query);
?>



<section class="vehicle-carousel-section">
  <div class="container">
    <h2 class="text-center">Our Vehicles</h2>
    <div class="owl-carousel vehicle-carousel">
      <?php while($row = $result->fetch_assoc()): ?>
        <div class="item text-center">
          <div class="card p-3" style="border: 1px solid #eee; border-radius: 10px;">
            <img src="assets/images/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
            <h4><?= htmlspecialchars($row['title']) ?></h4>
            <p><strong>Owner:</strong> <?= htmlspecialchars($row['owner']) ?></p>
            <p><strong>Year:</strong> <?= htmlspecialchars($row['year']) ?></p>
            <p><strong>Price/Day:</strong> €<?= number_format($row['price_per_day'], 2) ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>




  <section class="popular-categories">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Popularita</h6>
            <h4>Pozrite si <em>Popularitu</em> Naších <em>Vozidiel</em></h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="categories.php">Pozrieť všetky kateórie</a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-01.png" alt="">
              </div>
              <div class="right">
                <h4>Peugeot Boxer</h4>
                <span><em>201</em> prenajatí</span>
              </div>
            </div>
            <div class="thumb">
              <img src="assets/images/pegot.jpg" alt="">
              <span class="category">Spokojný zákazníci</span>
              <span class="likes"><i class="fa fa-heart"></i> 198</span>
            </div>
            <div class="border-button">
              <a href="contest-details.html">Chcem si prenajať</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-02.png" alt="">
              </div>
              <div class="right">
                <h4>Mercedes-Benz V class</h4>
                <span><em>187</em> prenajatí</span>
              </div>
            </div>
            <div class="thumb">
              <img src="assets/images/vclass.jpg" alt="">
              <span class="category">Spokojný zákazníci</span>
              <span class="likes"><i class="fa fa-heart"></i> 184</span>
            </div>
            <div class="border-button">
              <a href="contest-details.html">Chcem si prenajať</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-03.png" alt="">
              </div>
              <div class="right">
                <h4>Fiat Doblo</h4>
                <span><em>169</em> prenajatí</span>
              </div>
            </div>
            <div class="thumb">
              <img src="assets/images/doblo.jpg" alt="">
              <span class="category">Spokojný zákazníci</span>
              <span class="likes"><i class="fa fa-heart"></i> 158</span>
            </div>
            <div class="border-button">
              <a href="contest-details.html">Chcem si prenajať</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-04.png" alt="">
              </div>
              <div class="right">
                <h4>Volkswagen Transport</h4>
                <span><em>133</em> prenajatí</span>
              </div>
            </div>
            <div class="thumb">
              <img src="assets/images/trans.jpg" alt="">
              <span class="category">Spokojný zákazníci</span>
              <span class="likes"><i class="fa fa-heart"></i> 129</span>
            </div>
            <div class="border-button">
              <a href="contest-details.html">Chcem si prenajať</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="closed-contests">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Osobné autá na prenájom</h6>
            <h4><em>Na výber od </em> MPV-čok <em> po </em> Kombička </em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/audi.jpg" alt="">
                  <span class="winner"><em>Majiteľ:</em> Daniel Fritz</span>
                  <span class="price"><em>Cena:</em> 120€/deň</span>
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>31 Požičaní <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">30 Zákazníkov spokojený <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/ix20.jpg" alt="">
                  <span class="winner"><em>Majiteľ:</em> J. Mášik</span>
                  <span class="price"><em>Cena:</em> 65€/deň</span>
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>44 Požičaní <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">44 Zákazníkov spokojený <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/dacia.jpg" alt="">
                  <span class="winner"><em>Majiteľ:</em> Š. Herda</span>
                  <span class="price"><em>Cena:</em> 70€/deň</span>
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>40 Požičaní <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics"> 40 Zákazníkov spokojený<br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="border-button text-center">
            <a href="contests.html">Browse Open Contests</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pricing-plans">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Naše Plány</h6>
            <h4>Cenové <em>Plány</em> Prenájmu  <em> Dodávok</em></h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item">
            <img src="assets/images/Den1.png" alt="">
            <h4>Jedno dňový Express</h4>
            <ul class="first-plan">
              <li>Prenájom dodávky na 1 deň</li>
              <li>Potrebujete dodávku len na jeden deň?</li>
              <li>Služba "Express" vám umožní získať spoľahlivé vozidlo na krátkodobé použitie</li>
            </ul>
            <span class="price">Rezervuj si ↓</span>
            <div class="border-button">
              <a href="#">Choose This Plan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item">
            <img src="assets/images/Den2.jpg" alt="">
            <h4>Päť dňový Konfort</h4>
            <ul class="second-plan">
              <li>Prenájom dodávky na 5 dní</li>
              <li>Ak máte projekt, ktorý si vyžaduje pár dní dodatočnej flexibility</li>
              <li>Prácu na viacerých miestach alebo väčší event</li>
              <li>Počas 5 dní si užijete výhody našich vozidiel za zvýhodnenú cenu.</li>
            
            </ul>
            <span class="price">Rezervuj si ↓</span>
            <div class="border-button">
              <a href="#">Choose This Plan</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item">
            <img src="assets/images/Den3.jpg" alt="">
            <h4>Desať dňový Flex</h4>
            <ul class="third-plan">
              <li>Prenájom dodávky na 10 dní</li>
              <li>Pre dlhodobé projekty, opakované potreby alebo intenzívne využitie je tu náš najvýhodnejší plán</li>
              <li>Počas 10 dní vám poskytneme maximálnu flexibilitu a spoľahlivosť za veľmi atraktívnu cenu</li>
              <li>Tento plán je ideálny pre tých, ktorí plánujú dlhé stěhovania,</li>
              <li>rozsiahle projektové výpravy alebo pravidelnú prepravu tovaru.</li>
            </ul>
            <span class="price">Rezervuj si ↓</span>
            <div class="border-button">
              <a href="#">Choose This Plan</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  
 
  <?php include 'parts/footer.php'; ?>
  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
  $(".vehicle-carousel").owlCarousel({
    items: 3,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 800
  });
});
</script>


  </body>
</html>