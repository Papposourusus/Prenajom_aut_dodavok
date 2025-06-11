<!DOCTYPE html>
<html lang="en">


?>


  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="comment-form.css">

    <title>SnapX Photographer Page</title>

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


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



  




<body>

 <?php include 'parts/header_user.php'; ?>


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
          <h2>O Nás a  <em> Naších úspechoch</em></h2>
          <p><em> Rentail </em> – Naša cesta od malej rodinnej garáže k lídrovi v prenájme dodávok V roku 2003, keď náš zakladateľ v malej garáži v srdci mesta začal snívať o tom, ako sprístupniť kvalitné a spoľahlivé mobilitné riešenia pre každého, sa rodila značka Rentail. Postupne sme vyrástli zo skromných začiatkov, spájajúc tradičné hodnoty rodinného podniku s inovatívnym prístupom a najmodernejšími technológiami. Každá naša dodávka nesie príbeh odhodlania, vášho úspechu a našej neustálej túžby prekračovať očakávania. Dnes, ako dôveryhodný partner na vašej ceste, pre vás vytvárame riešenia, ktoré zjednodušujú každodenný život a inšpirujú k novým dobrodružstvám.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="user-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="avatar">
            <img src="assets/images/Mike.jpg" alt="">
            <h4>Mark Zimmemars</h4>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="info">
            <h6>Rank</h6>
            <h4>#121</h4>
            <span>of 993</span>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="info">
            <h6>Hodnotenie</h6>
            <h4>4.22</h4>
            <span>of 5.00 Stars</span>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="info">
            <h6>Najlepšie hodnotený</h6>
            <h4>Renault Master</h4>
            <span>Kategórie Dodávky</span>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="info">
            <h6>Nášteva stránky</h6>
            <h4>3,788</h4>
            <span>Monthly</span>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="info">
            <h6>Vyhraných súťaží</h6>
            <h4>11</h4>
            <span>z 39</span>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="info">
            <h6>Priemerný prevrat </h6>
            <h4>$68,000</h4>
            <span>Mesačne</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="thumb">
            <img src="assets/images/coworkers.jpg" alt="">
            <div class="hover-effect">
              <div class="content">
              <h4>Úspešné založenie firmy</h4>
                <span>Dátum:<em> 19.03.2003</em></span>
            
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="thumb">
            <img src="assets/images/1dod.jpg" alt="">
            <div class="hover-effect">
              <div class="content">
                <h4>Naša prvá úspešne prenajatá dodávka</h4>
                <span>Dátum: <em>23.03.2003</em></span>
                
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="thumb">
            <img src="assets/images/newvans.jpg" alt="">
            <div class="hover-effect">
              <div class="content">
                <h4>Nové prírastky do rodiny</h4>
                <span>Dátum: <em> 17.04.2003</em></span>
              
                <ul>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="thumb">
            <img src="assets/images/servis.jpg" alt="">
            <div class="hover-effect">
              <div class="content">
                <h4>Naše nové miesto</h4>
                <span>Dátum: <em>04.10.2003</em></span>
              
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="thumb">
            <img src="assets/images/xmas.jpg" alt="">
            <div class="hover-effect">
              <div class="content">
                <h4>Prvá Vianočná párty</h4>
                <span>Dátum: <em>24.12.2003</em></span>
                
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="thumb">
            <img src="assets/images/contract.jpg" alt="">
            <div class="hover-effect">
              <div class="content">
                <h4>Veľa nových spluprác</h4>
                <span>Dátum: <em>2003-2024</em></span>
                
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="thumb">
            <img src="assets/images/boss.jpg" alt="">
            <div class="hover-effect">
              <div class="content">
                <h4>Zakladateľ Mark Lamonth sa rozhodol ísť do dôchotku a tak nastal čas nového veku</h4>
                <span>Dátum: <em>23.06.2023</em></span>
              
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="thumb">
            <img src="assets/images/worlds.png" alt="">
            <div class="hover-effect">
              <div class="content">
                <h4>Staly sme sa hlavnímy sponzormy medzinárodných turnajov</h4>
                <span>Dátum:<em> 29.10.2024</em></span>
                
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="thumb">
            <img src="assets/images/stonks.png" alt="">
            <div class="hover-effect">
              <div class="content">
                <h4>Veľa sme si už prežily ale naša cesta je len na začiatku a stále len rastie</h4>
                <span>Dátum: <em>28.04.2025</em></span>
                
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-eye"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h6>Contact This User</h6>
            <h4>Don't Be Shy <em></em> to contact the <em>Photographer Now</em></h4>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Phone Numbers</h4>
            <span><a href="#">010-020-0340</a><br><a href="#">090-080-0760</a></span>
          </div>  
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Email Addresses</h4>
            <span><a href="#">info@company.com</a><br><a href="#">SnapX@company.com</a></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-map-marked"></i>
            <h4>Office Location</h4>
            <span><a href="#">155 Michigan Ave, Chicago,<br>IL 60601, United States</a></span>
          </div>
        </div>
        
        <section class="contact-us">
          
        <form id="comment-form" action="submit_comment.php" method="post">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center">
          <h6>Leave a Comment</h6>
          <h4>Your <em>Feedback</em> is Welcome</h4>
        </div>
      </div>
      <div class="col-lg-12">
        <form id="comment-form" action="submit_comment.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <input type="text" name="name" id="name" placeholder="Your Name..." required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="email" name="email" id="email" placeholder="Your E-mail..." required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="Your Comment..." rows="6" required></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" class="orange-button">Submit Comment</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



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

  </body>
</html>