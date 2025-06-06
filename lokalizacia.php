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


  
<style>
.auth-modal {
  position: fixed; top: 0; left: 0; width: 100%; height: 100%;
  background-color: rgba(0,0,0,0.6);
  display: flex; align-items: center; justify-content: center;
  z-index: 9999;
}
.auth-modal-content {
  background: #fff; padding: 30px; border-radius: 8px; width: 300px; position: relative;
}
.auth-modal-close {
  position: absolute; top: 10px; right: 15px; font-size: 20px; cursor: pointer;
}
.auth-tabs {
  text-align: center; margin-bottom: 20px;
}
.auth-tabs button {
  padding: 10px 20px; margin: 0 5px; border: none;
  background: #eee; cursor: pointer;
}
.auth-tabs .active {
  background: #00bdfe; color: #fff;
}
.auth-tab-content form input {
  width: 100%; padding: 10px; margin-bottom: 10px;
}
.auth-tab-content form button {
  width: 100%; padding: 10px; background: #00bdfe; color: #fff; border: none;
}
</style>

<body>

  <?php include 'parts/header_cat.php'; ?>
  

<script>
document.getElementById('modal_trigger').onclick = function(e) {
  e.preventDefault();
  document.getElementById('authModal').style.display = 'flex';
};

function closeAuthModal() {
  document.getElementById('authModal').style.display = 'none';
}

function showTab(tabId) {
  document.getElementById('loginTab').style.display = 'none';
  document.getElementById('registerTab').style.display = 'none';
  document.querySelectorAll('.auth-tabs button').forEach(btn => btn.classList.remove('active'));
  
  document.getElementById(tabId).style.display = 'block';
  event.target.classList.add('active');
}
</script>




  


      

  <div id="authModal" class="auth-modal" style="display: none;">
  <div class="auth-modal-content">
    <span class="auth-modal-close" onclick="closeAuthModal()">&times;</span>
    
    <div class="auth-tabs">
      <button onclick="showTab('loginTab')" class="active">Prihlásiť sa</button>
      <button onclick="showTab('registerTab')">Registrovať sa</button>
    </div>
    
    <div id="loginTab" class="auth-tab-content">
      <form action="login.php" method="post">
        <input type="text" name="login_username" placeholder="Meno alebo e-mail" required><br>
        <input type="password" name="login_password" placeholder="Heslo" required><br>
        <button type="submit">Prihlásiť sa</button>
      </form>
    </div>
    
    <div id="registerTab" class="auth-tab-content" style="display: none;">
      <form action="register.php" method="post">
        <input type="text" name="register_username" placeholder="Používateľské meno" required><br>
        <input type="email" name="register_email" placeholder="Email" required><br>
        <input type="password" name="register_password" placeholder="Heslo" required><br>
        <button type="submit">Registrovať sa</button>
      </form>
    </div>
  </div>
</div>



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
        <div class="owl-testimonials owl-carousel" id="comments-carousel">
          <!-- Komentáre sa tu načítajú dynamicky -->
        </div>
      </div>
    </div>
  </div>
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

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/owl-carousel.js"></script> <!-- ak používaš vlastný -->

<script>
async function loadComments() {
    const response = await fetch('get_comments.php');
    const comments = await response.json();

    const carousel = document.getElementById('comments-carousel');
    carousel.innerHTML = ''; // Vyčistíme carousel

    comments.forEach(comment => {
        const item = document.createElement('div');
        item.className = 'item';
        item.innerHTML = `
          <div class="content">
            <div class="left-content">
              <p>“${comment.comment}”</p>
              <h4>${comment.username}</h4>
              <span>User ${comment.user_id}</span>
            </div>
            <div class="image">
              <img src="${comment.image_url ? comment.image_url : 'assets/images/author.jpg'}" alt="">
            </div>
          </div>
        `;
        carousel.appendChild(item);
    });

    // Spustíme Owl Carousel
    $('.owl-testimonials').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 800
    });
}

// Zavoláme načítanie po načítaní celej stránky
document.addEventListener('DOMContentLoaded', loadComments);
</script>



  </body>
</html>