<?php
$data = [
  [1, "DOZEN CUPCAKES", 25000, "img/shop/product-1.jpg"],
  [2, "COOKIES AND CREAM", 30000, "img/shop/product-2.jpg"],
  [3, "GLUTEN FREE MINI DOZEN", 20000, "img/shop/product-3.jpg"],
  [4, "COOKIE DOUGH", 25000, "img/shop/product-4.jpg"],
  [5, "VANILLA SALTED CARAMEL", 15000, "img/shop/product-5.jpg"],
  [6, "GERMAN CHOCOLATE", 50000, "img/shop/product-6.jpg"],
  [7, "DULCE DE LECHE", 50000, "img/shop/product-7.jpg"],
  [8, "MISSISSIPPI MUD", 40000, "img/shop/product-8.jpg"],
];
function rupiah($angka)
{
  $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
  return $hasil_rupiah;
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Cake Template" />
  <meta name="keywords" content="Cake, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Cake | Template</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/flaticon.css" type="text/css" />
  <link rel="stylesheet" href="css/barfiller.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <script>
    const userEmail = localStorage.getItem('userEmail');

    if (!userEmail) {
      window.location.href = "../index.php";
    }
  </script>
</head>

<body>
  <!-- Page Preloder -->
  <!-- <div id="preloder">
    <div class="loader"></div>
  </div> -->
  <!-- Offcanvas Menu Begin -->
  <div class="offcanvas-menu-overlay"></div>

  <!-- Offcanvas Menu End -->

  <!-- Header Section Begin -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="header__menu mobile-menu">
            <ul>
              <li class="active"><a href="./index.html">Home</a></li>
              <li><a href="./#about">About</a></li>
              <li><a href="./#shop">Shop</a></li>
              <li><a href="./contact.html">Contact</a></li>
              <li><a onclick="logout()">Logout</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Section End -->

  <!-- Hero Section Begin -->
  <section class="hero">
    <div class="hero__slider owl-carousel">
      <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <div class="hero__text">
                <h2>Making your life sweeter one bite at a time!</h2>
                <a href="#" class="primary-btn">Our cakes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <div class="hero__text">
                <h2>Making your life sweeter one bite at a time!</h2>
                <a href="#" class="primary-btn">Our cakes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- About Section Begin -->
  <section class="about spad" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="about__text">
            <div class="section-title">
              <span>About Cake shop</span>
              <h2>Cakes and bakes from the house of Queens!</h2>
            </div>
            <p>
              The "Cake Shop" is a Jordanian Brand that started as a small
              family business. The owners are Dr. Iyad Sultan and Dr. Sereen
              Sharabati, supported by a staff of 80 employees.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="about__bar">
            <div class="about__bar__item">
              <p>Cake design</p>
              <div id="bar1" class="barfiller">
                <div class="tipWrap"><span class="tip"></span></div>
                <span class="fill" data-percentage="95"></span>
              </div>
            </div>
            <div class="about__bar__item">
              <p>Cake Class</p>
              <div id="bar2" class="barfiller">
                <div class="tipWrap"><span class="tip"></span></div>
                <span class="fill" data-percentage="80"></span>
              </div>
            </div>
            <div class="about__bar__item">
              <p>Cake Recipes</p>
              <div id="bar3" class="barfiller">
                <div class="tipWrap"><span class="tip"></span></div>
                <span class="fill" data-percentage="90"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Product Section Begin -->
  <section class="product spad" id="shop">
    <div class="container">
      <div class="row">
        <?php
        foreach ($data as $key => $value) {
        ?>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="product__item">
              <div class="product__item__pic set-bg" data-setbg="<?= $value[3] ?>"></div>
              <div class="product__item__text">
                <h6><a href="#"><?= $value[1] ?></a></h6>
                <div class="product__item__price"><?= rupiah($value[2]) ?></div>
                <div class="cart_add">
                  <a href="<?= '/src/payment.php?id=' . $key ?>">BUY</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- Product Section End -->

  <!-- Class Section Begin -->
  <section class="class spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="class__form">
            <div class="section-title">
              <span>Class cakes</span>
              <h2>Made from your <br />own hands</h2>
            </div>
            <form action="#">
              <input type="text" placeholder="Name" />
              <input type="text" placeholder="Phone" />
              <select>
                <option value="">Studying Class</option>
                <option value="">Writting Class</option>
                <option value="">Reading Class</option>
              </select>
              <input type="text" placeholder="Type your requirements" />
              <button type="submit" class="site-btn">registration</button>
            </form>
          </div>
        </div>
      </div>
      <div class="class__video set-bg" data-setbg="img/class-video.jpg">
        <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
      </div>
    </div>
  </section>
  <!-- Class Section End -->

  <!-- Team Section Begin -->
  <section class="team spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7">
          <div class="section-title">
            <span>Our team</span>
            <h2>Sweet Baker</h2>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
          <div class="team__btn">
            <a href="#" class="primary-btn">Join Us</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
            <div class="team__item__text">
              <h6>Randy Butler</h6>
              <span>Decorater</span>
              <div class="team__item__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="img/team/team-2.jpg">
            <div class="team__item__text">
              <h6>Randy Butler</h6>
              <span>Decorater</span>
              <div class="team__item__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="img/team/team-3.jpg">
            <div class="team__item__text">
              <h6>Randy Butler</h6>
              <span>Decorater</span>
              <div class="team__item__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="img/team/team-4.jpg">
            <div class="team__item__text">
              <h6>Randy Butler</h6>
              <span>Decorater</span>
              <div class="team__item__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Team Section End -->

  <!-- Testimonial Section Begin -->
  <section class="testimonial spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <span>Testimonial</span>
            <h2>Our client say</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="testimonial__slider owl-carousel">
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/ta-1.jpg" alt="" />
                </div>
                <div class="testimonial__author__text">
                  <h5>Kerry D.Silva</h5>
                  <span>New york</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                viverra lacus vel facilisis.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/ta-2.jpg" alt="" />
                </div>
                <div class="testimonial__author__text">
                  <h5>Kerry D.Silva</h5>
                  <span>New york</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                viverra lacus vel facilisis.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/ta-1.jpg" alt="" />
                </div>
                <div class="testimonial__author__text">
                  <h5>Ophelia Nunez</h5>
                  <span>London</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                viverra lacus vel facilisis.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/ta-2.jpg" alt="" />
                </div>
                <div class="testimonial__author__text">
                  <h5>Kerry D.Silva</h5>
                  <span>New york</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                viverra lacus vel facilisis.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/ta-1.jpg" alt="" />
                </div>
                <div class="testimonial__author__text">
                  <h5>Ophelia Nunez</h5>
                  <span>London</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                viverra lacus vel facilisis.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/ta-2.jpg" alt="" />
                </div>
                <div class="testimonial__author__text">
                  <h5>Kerry D.Silva</h5>
                  <span>New york</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua
                viverra lacus vel facilisis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Section End -->

  <!-- Instagram Section Begin -->
  <section class="instagram spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 p-0">
          <div class="instagram__text">
            <div class="section-title">
              <span>Follow us on instagram</span>
              <h2>Sweet moments are saved as memories.</h2>
            </div>
            <h5><i class="fa fa-instagram"></i> @cakewow</h5>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic">
                <img src="img/instagram/instagram-1.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic middle__pic">
                <img src="img/instagram/instagram-2.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic">
                <img src="img/instagram/instagram-3.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic">
                <img src="img/instagram/instagram-4.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic middle__pic">
                <img src="img/instagram/instagram-5.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic">
                <img src="img/instagram/instagram-3.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Instagram Section End -->

  <!-- Map Begin -->
  <div class="map">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-7">
          <div class="map__inner">
            <h6>SMK ISFI Banjarmasin</h6>
            <ul>
              <li>Jl. Flamboyan, CO 80443, Indonesia</li>
              <li>lutf42@support.com</li>
              <li>+62 8195 399 1564</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="map__iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1305.6780292099018!2d114.59139975159123!3d-3.293997241223218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4230a0b2b4147%3A0xf77d2d78f8af24d7!2sSMK%20ISFI%20Banjarmasin!5e0!3m2!1sid!2sid!4v1701241037622!5m2!1sid!2sid" height="300" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  <!-- Map End -->

  <!-- Footer Section Begin -->
  <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="footer__widget">
            <h6>WORKING HOURS</h6>
            <ul>
              <li>Monday - Friday: 08:00 am – 08:30 pm</li>
              <li>Saturday: 10:00 am – 16:30 pm</li>
              <li>Sunday: 10:00 am – 16:30 pm</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="footer__about">
            <div class="footer__logo">
              <a href="#"><img src="img/footer-logo.png" alt="" /></a>
            </div>
            <p>
              Lorem ipsum dolor amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore dolore magna aliqua.
            </p>
            <div class="footer__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="footer__newslatter">
            <h6>Subscribe</h6>
            <p>Get latest updates and offers.</p>
            <form action="#">
              <input type="text" placeholder="Email" />
              <button type="submit"><i class="fa fa-send-o"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <p class="copyright__text text-white">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>

              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          <div class="col-lg-5">
            <div class="copyright__widget">
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Site Map</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here....." />
      </form>
    </div>
  </div>
  <!-- Search End -->

  <!-- Js Plugins -->
  <script>
    function logout(e) {
      localStorage.removeItem('userEmail');
      localStorage.removeItem('userPassword');
      window.location.href="../index.php";
    }
  </script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.barfiller.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>