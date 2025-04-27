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
<!--

TemplateMo 576 SnapX Photography

https://templatemo.com/tm-576-snapx-photography

-->
<body>
  <?php include 'parts/header.php'; ?>
  



  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="" method="post">
                <label>Email / Username</label>
                <input name="username" type="text" id="username" />
              <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
              <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form action="" method="post">
                <label>Username</label>
                <input name="username" type="text" id="username" />
                <br />

                <label>Email Address</label>
                <input name="email" type="email" id="email" />
                <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                </div>
            </form>
        </div>
        
    </section>
  </div>

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


  <section class="featured-items" id="featured-items">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/Master.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Renault master <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Cena:</span> 60€/deň</li>
                      <li><span>Majiteľ:</span> Maduda s.r.o</li>
                      <li><span>Rok výroby:</span> 2007</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/vclass.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Mercedes-Benz V class <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Cena:</span> 80€/deň</li>
                      <li><span>Majiteľ:</span> Hedin Atomotive</li>
                      <li><span>Rok výroby</span> 2020</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/trans.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Volkswagen Transport<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Cena</span> 75€/deň</li>
                      <li><span>Majiteľ:</span> </li>
                      <li><span>Rok výroby:</span> 2013</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/transit.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Ford Transit <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Cena:</span> 80€/deň</li>
                      <li><span>Majiteľ:</span>Tim Radobický</li>
                      <li><span>Rok výroby:</span> 2021</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/pegot.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Peugeot Boxer<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Cena:</span> 70€/deň</li>
                      <li><span>Majiteľ:</span> Alex"Smažák"Pláštiak</li>
                      <li><span>Rok výroby:</span>2015</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/doblo.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Fiat Doblo <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Cena:</span> 60€/deň</li>
                      <li><span>Majiteľ:</span> Maduda s.r.o.</li>
                      <li><span>Rok výroby:</span> 2010</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/malibu.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Fiat Doblo Malibu <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Cena:</span> 55€/deň</li>
                      <li><span>Majiteľ:</span> Maduda s.r.o.</li>
                      <li><span>Rok výroby:</span> 2010</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/hbyy.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Hobby Van <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Cena:</span> 80€/deň</li>
                      <li><span>Majiteľ:</span> HaBByBy</li>
                      <li><span>Rok výroby:</span> 2012</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/featured-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4>Fly In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Contest Winner:</span> Vincent Adam</li>
                      <li><span>Contest Author:</span> Anthony Soft</li>
                      <li><span>Awards:</span> $1,200 + Canon EOS R10</li>
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
            <h6>Our Pricing</h6>
            <h4>Photography <em>Contest Plans</em> and Price <em>Awards</em></h4>
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

  </body>
</html>