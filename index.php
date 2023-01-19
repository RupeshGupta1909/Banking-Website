<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Banking System</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet"
    href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="assets\css\bootstrap.min.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="assets\css\style.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link href="assets\css\style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>

<body>

  <!-- navbar starts here  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="lamba">
    <img class="bankimg" src="images\Bank.png" alt="">
    <a class="navbar-brand" href="./index.php">The Sparks Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./FAQ.php">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./customers.php">Customers</a>
        </li>
          </a>
        </li>
      </ul>
    </div>
  </nav>


  <!-- navbar ends here  -->

  <!-- here content starts here -->
  <div class="banner-container" id="sasta">
    <div class="container-fluid hero-content">
      <div class="row align-items-center" id="content">
        <div class="col-md-6 text-center" id="imp">
          <h1>Money Transaction</h1>
          <p class="lead muted">!!! Easy way to transfer money from anywhere !!!</p>
          <h3 class="features">Honours Your Trust</h3>
          <br>
          <br>


          <a class="get-started" href="./customers.php">Get Started</a>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
          <br>
          <br>
          <br>
          <h2 class=" features">Key Features</h2> 
          <p class="feat">24x7 Transfer </p>
          <p class="feat">Bill Payments </p>
          <p class="feat">Easy Recharge </p>
          <p class="feat">Check Balance </p>
          <p class="feat">Get Statement </p>

        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- here content ends here -->




  <!-- footer starts here -->
  <div class="footer">
    <div class="page-container footer-container">
      <div class="col-md-10 text-left">
        <ul class="social-icons">
          <span id="contactme">Follow Us:</span>
          <li><a target="_blank" class="github" href="https://github.com/ruo"><i
                class="fab fa-github fa-3x"></i></a></li>

          <li><a target="_blank" class="linkedin" href="https://www.linkedin.com/ifdguhh"><i
                class="fab fa-linkedin fa-3x"></i></a></li>

          <li><a target="_blank" class="instagram" href="https://www.linkedin.com/in/cfghb/"><i
                class="fab fa-instagram fa-3x"></i></a></li>
          <li><a target="_blank" class="facebook" href="https://www.linkedin.com/incfgvhbjn"><i
                class="fab fa-facebook fa-3x"></i></a></li>
          <li><a target="_blank" class="twitter" href="https://www.linkedin.com/in/k-gh/"><i
                class="fab fa-twitter fa-3x"></i></a></li>
          <li><a target="_blank" class="youtube" href="https://www.linkedin.com/in/k-tsdf/"><i
                class="fab fa-youtube fa-3x"></i></a></li>
        </ul>

      </div>
      <hr color="white">
      <div class="contact">
        <h3>Get In Touch</h3>
        <p class="feat2"> Email: <a href="http://sparksfoundation.com">sparksbank@gmail.com</a> </p>
        <p class="feat2">+91 98765056789 / 78998765456</p>
      </div>
      <hr color="white">
      <div>
        <h3> Headquarter Address:</h3>
        <p class="feat1">The Hangar,Nus Enterprises, 21 Heng Mui</p>
        <p class="feat1">Keng Terrace near Airport, Singapore,119613</p>
      </div>
      <div class="footer-copyright">© 2023 Copyright | The Sparks Bank | All Right Reserved. </div>
    </div>
  </div>
  <!-- Footer part ends here -->

  <!-- spalsh screen js -->
  <script>
    var preloader = document.getElementById("loading");
    function loader() {
      preloader.style.display = 'none';
    }
  </script>
  <script src="assets/js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
  <!-- aos data  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 300,
    });
  </script>

</body>

</html>