<!DOCTYPE html>
<?php

?>


<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>SnapX Photography Categories</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <?php include 'parts/header_cat.php'; ?>
    

    <!-- Owl Carousel CSS -->
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 576 SnapX Photography

https://templatemo.com/tm-576-snapx-photography

-->
  </head>


  

  <?php require_once 'index\VehicleRepository.php';
$vehicleRepo = new VehicleRepository();
$vehicles = $vehicleRepo->getAllVehicles();
?>



<?php
require_once 'Auth/AuthModal.php'; 
AuthModal::render();              
?>

 


  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2>Objavte lokalizácie našej firmy  <em>Rentail</em></h2>
          <p>Naša sieť pokrýva kľúčové mestá a regióny po celom Slovensku, aby sme vám priniesli rýchle a spoľahlivé riešenia pre vaše prepravné potreby. Či už ste v centre mesta alebo v menej obývaných oblastiach, máme pre vás pripravené odpovedajúce vozidlá a profesionálny servis.</p>
          <p> Naše hlavné miesta:</p>
        </div>
      </div>
    </div>
  </div>

  <div class="top-categories">
    <div class="container">
      <div class="row">
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/Br.jpg" alt="">
            </div>
            <h4>Bratislava</h4>
            <span>Dostupné vozidlá</span>
            <span class="counter">28</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/Pres.jpg" alt="">
            </div>
            <h4>Prešov</h4>
            <span>Dostupné vozidlá</span>
            <span class="counter">24</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/Nitra.jpg" alt="">
            </div>
            <h4>Nitra</h4>
            <span>Dostupné vozidlá</span>
            <span class="counter">8</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/ZM.jpg" alt="">
            </div>
            <h4>Zlaté Moravce</h4>
            <span>Dostupné vozidlá</span>
            <span class="counter">17</span>
          </div>
        </div>
        <div class="col-lg col-sm-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/Obyce.jpg" alt="">
            </div>
            <h4>Obyce</h4>
            <span>Dostupné vozidlá</span>
            <span class="counter">10</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="featured-contests">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Featured Contests</h6>
            <h4>Ako si <em> Vybrať </em> Správnu <em>Lokalizáciu</em></h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/mb.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Priemerná cena servisu</span>
                    <span class="price">60€</span>
                  </div>
                  <h4>Panónska cesta 3578/31 851 04 Bratislava</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>60<br>Zamestnancov</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>844<br>Uspešných servisov</span>
                  </div>
                  <div class="border-button">
                    <a href="contest-details.html">Browse Nature Contests</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/100_g.png" alt="">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Priemerná cena servisu</span>
                    <span class="price">55€</span>
                  </div>
                  <h4>Budovatelska 11628 080 01 Presov</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>48<br>Zamestnancov</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>597<br>Uspešných servisov</span>
                  </div>
                  <div class="border-button">
                    <a href="contest-details.html">Browse Nature Contests</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/N.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Priemerná cena servisu</span>
                    <span class="price">55€</span>
                  </div>
                  <h4>Cabajská 27/10 949 01 Nitra</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>45<br>Zamestnancov</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>453<br>Uspešných servisov</span>
                  </div>
                  <div class="border-button">
                    <a href="contest-details.html">Browse Nature Contests</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/zl.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Priemerná cena servisu</span>
                    <span class="price">40€</span>
                  </div>
                  <h4>Zelená 3605 953 01 Zlaté Moravce</h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>30<br>Zamestnancov</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>230<br>Uspešných servisov</span>
                  </div>
                  <div class="border-button">
                    <a href="contest-details.html">Browse Nature Contests</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="thumb">
              <img src="assets/images/gajdos.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <div class="top-content">
                    <span class="award">Priemerná cena servisu</span>
                    <span class="price">30€</span>
                  </div>
                  <h4>Hlavná ulica 60/75 95 195 Obyce </h4>
                  <div class="info">
                    <span class="participants"><img src="assets//images/icon-03.png" alt=""><br>25<br>Zamestnancov</span>
                    <span class="submittions"><img src="assets//images/icon-01.png" alt=""><br>160<br>Uspešných servisov</span>
                  </div>
                  <div class="border-button">
                    <a href="contest-details.html">Browse Nature Contests</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center">
          <h6>What Clients Say</h6>
          <h4>What <em>Website</em> Users Are Saying <em>Topics</em></h4>
        </div>
      </div>
      <div class="col-lg-8 offset-lg-2">
      
        </div>
      </div>
    </div>
  </div>
</section>

<section id="comments-section" style="max-width:700px; margin: 30px auto;">
    <h2>Komentáre používateľov</h2>

    <?php if (count($comments) > 0): ?>
        <?php foreach ($comments as $comment): ?>
            <div style="border:1px solid #ccc; margin-bottom:10px; padding:10px; border-radius:5px;">
                <strong><?= htmlspecialchars($comment['user']) ?></strong>
                <em>(<?= htmlspecialchars($comment['created_at']) ?>)</em><br>
                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Zatiaľ nie sú žiadne komentáre.</p>
    <?php endif; ?>
  </section>


        <div class="col-lg-12">
          <div class="clients">
            <div class="row">
              <div class="col-lg-2 col-4">
                <img src="assets/images/contest-01.jpg" alt="">
              </div>
              <div class="col-lg-2 col-4">
                <img src="assets/images/contest-02.jpg" alt="">
              </div>
              <div class="col-lg-2 col-4">
                <img src="assets/images/contest-01.jpg" alt="">
              </div>
              <div class="col-lg-2 col-4">
                <img src="assets/images/contest-02.jpg" alt="">
              </div>
              <div class="col-lg-2 col-4">
                <img src="assets/images/contest-01.jpg" alt="">
              </div>
              <div class="col-lg-2 col-4">
                <img src="assets/images/contest-02.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'parts/footer.php'; ?>


  


  </body>
</html>