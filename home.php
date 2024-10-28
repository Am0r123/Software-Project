<!DOCTYPE html>
<html lang="en">
  <head>
   
    <link rel="stylesheet" href="homeCSS.css" />
  </head>
  <body>
<?php include_once 'navigationbar.php'?>
    <main>
      <section class="section-hero">
        <div class="container hero-box">
          <div class="hero-content margin-bottom">
            <h1 class="heading heading--1 margin-bottom">
              A place for your fitness goals
            </h1>
            <p class="description">
              We Offer Functional Training, Plyometric Boxes, Aerobics classes,
              TRX And Much More
            </p>
          </div>
          <div class="btn-group">
            <button onclick="gotologin()" class="btn btn__primary margin-right margin-bottom">
              SignUp
            </button>
            <button onclick="gotologin()" class="btn btn__secondary">LOgin</button>
          </div>
        </div>
      </section>
    </main>

    <footer class="section-footer" id="footer">
      <div class="footer-box container">
        <div class="contact-details">
          <h2 class="margin-bottom"><span class="red">F</span>GYM</h2>
          <ul class="contact-data">
            <li class="social">
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-whatsapp.svg"
                alt="whatsapp icon"
                width="35"
                height="35"
              />
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-facebook.svg"
                alt="facebook icon"
                width="35"
                height="35"
              />
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-instagram.svg"
                alt="instagram icon"
                width="35"
                height="35"
              />
              <img
                src="https://raw.githubusercontent.com/Manoranjan-D/responsive-website-gym/master/img/logo-twitter.svg"
                alt="twitter icon"
                width="35"
                height="35"
              />
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
 <script>
  function  gotologin(){
    window.location.href="sign.php";
  }
  </script>
</html>