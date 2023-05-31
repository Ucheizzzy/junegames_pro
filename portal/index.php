<?php
if (isset($_REQUEST['signout'])){
  unset($_SESSION["june.number"]);
   header("Location: http://games.juneboxservices.com");
}
include_once('../includes/api.php'); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JuneGames | Play for fun!</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css" />
    <link
      rel="stylesheet"
      href="./css/owl.theme.default.min.css"
      type="text/css"
    />
    <link rel="stylesheet" href="../css/boxicons.min.css" type="text/css" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- css animate -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

        <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../img/logo/faviconico.ico" />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141652354-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141652354-3');
    </script>
  
  </head>

  <body>

     <!-- TOP NAV -->
    <div class="top-nav" id="home">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-auto">
            <a href="../index.php">
              <img
                src="../img/logo/juneboxgames-preview.png"
                alt="logo image"
                class="animate__animated animate__bounce"
                id="logo"
              />
            </a>
          </div>
          <div class="col-auto">
   
      <?php if(strpos($user, 'active') !== false){ ?>
        <a
              class="btn btn-brand btn-info btn-sm px-3 py-2 rounded-3"
              href="./portal/index.php"
            >
              Dashboard
            </a>
          <?php } else{ ?>
            <a
              class="btn btn-brand btn-info btn-sm px-3 py-2 rounded-3"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#userLogin"
            >
              Signup/Login
            </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>


    <!-- Portal games section -->

    <section class="portal">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-info text-uppercase">Game Portal</h2>
            <h3 class="text-uppercase">Welcome to your dashboard</h3>
            <p><?php  echo $msisdn; ?> is ready to play any game, any time..</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-12">
            <h4 class="underline">
              <span style="border-bottom: 10px solid #31d2f2">Your Games</span>
            </h4>


            <a href="01">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/driver.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>LAGOS DRIVER</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="01" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>

            <a href="02">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/coins.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>COLLECT THE COINS</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class=" text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
          </a>

          <a href="03">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/fruits.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>CHOOSE CORRECT FRUITS</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
          </a>

          <a href="04">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/ballons.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>BLAST THE BALLOONS</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>

            <a href="05">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/touchcoin.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>TOUCH FAST AND COLLECT COINS</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>
            <a href="06">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/space.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>SPACE GAME</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>
            <a href="07">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/capital.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>TOUCH CAPITAL LETTERS</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>
            <a href="08">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/balance.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>NINJA BALANCE</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>
            <a href="09">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/pump.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>PUMP AIR INTO BALLOON</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>

            <a href="10">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/animals.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>MATCH ANIMALS</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>

            <a href="11">
            <div class="portal-case row d-flex align-items-center">
              <div class="col-md-2 portal-img">
                <img src="../img/portal/amass.jpg" class="" />
              </div>
              <div class="col-md-8 portal-text">
                <h6>AMASS THE BOXES</h6>
                <div class="mb-0 text-light">
                  <i class="mr-2 fas fa-mobile-alt"></i>
                  <i class="mr-2 fab fa-html5"></i>
                  <i class="fab fa-apple"></i>
                  <p class="text-light">Action, Adventure</p>
                </div>
              </div>
              <div class="col-md-2 portal-btn">
                <span href="#home" class="portal-button"> Play Now </span>
              </div>
            </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12">
            <a href="?signout=0" class="portal-signout mx-5 mt-3">SignOut</a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
              <h4 class="navbar-brand">
                <img
                  src="../img/logo/juneboxgames-preview.png"
                  alt="logo image"
                  class="animate__animated animate__bounce w-50"
                  id="logo"
                />
              </h4>
              <p>
                For everyone who has access to the internet and beyond,
                JuneGames is an online store where you can find exciting web
                games by subscribing, unlike other games, JuneGames allows you
                to play different games without you having to download them on
                your phone.
              </p>
              <div class="col-auto social-icons">
                <a href="https://twitter.com/Junegamesonline" target="_blank"
                  ><i class="bx bxl-twitter"></i
                ></a>
                <a
                  href="https://www.instagram.com/juneboxgame.ng/"
                  target="_blank"
                  ><i class="bx bxl-instagram"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center text-light">
              <h3>Useful Links</h3>
              <p>
                <a href="../about.php" class="text-light"> About</a>
              </p>
              <p>
                <a href="../privacy.php" class="text-light">Privacy Policy</a>
              </p>
              <p>
                <a href="../privacy.php" class="text-light">Cookie Policy</a>
              </p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <h3>Support</h3>
              <p>
                <a href="../contact.php" class="text-light"> Contact Us</a>
              </p>
              <p>
                <a href="../subscribe.php" class="text-light"> How to subscribe</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom text-center">
        <p class="mb-0">©️ 2023. All rights Reserved | JuneBox Services</p>
      </div>
    </footer>

    <!-- sign Up modal-->
    <div
      class="modal fade"
      id="userLogin"
      tabindex="-1"
      role="dialog"
      aria-labelledby="userLoginTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light p-3">
          <div class="modal-header border-info">
            <h5 class="modal-title" id="userLoginTitle">Subscribe</h5>
            <button
              type="button"
              class="btn-close text-light"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form class="input-transparent">
              <div class="form-group">
                <input
                  type="text"
                  class="form-control border-info bg-dark text-white"
                  name="phone"
                  value="234"
                />
              </div>
              <!--div class="form-group">
                <input type="password" class="form-control border-secondary" name="password" placeholder="Password">
              </div-->
              <div class="form-group d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    checked=""
                    id="rememberMeCheck"
                  />
                  <label class="custom-control-label mt-2" for="rememberMeCheck"
                    >Remember me</label
                  >
                </div>
                <!--a class="small-3" href="#">Forgot password?</a-->
              </div>
              <div class="form-group mt-3">
                <button class="btn btn-block btn-info w-100" type="submit">
                  Subscribe
                </button>
              </div>
            </form>
            <span class="small"
              >Don't have an account? <a href="#">Create an account</a></span
            >
          </div>
        </div>
      </div>
    </div>
    <!-- /.sign Up -->
    <script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../js/app.js" type="text/javascript"></script>
  </body>
</html>
