  
  <!-- footer -->
    <footer class="bg-dark">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
              <h4 class="navbar-brand">
                <img
                  src="./img/logo/juneboxgames-preview.png"
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
                <a href="about.php" class="text-light"> About</a>
              </p>
              <p>
                <a href="privacy.php" class="text-light">Privacy Policy</a>
              </p>
              <p>
                <a href="privacy.php" class="text-light">Cookie Policy</a>
              </p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <h3>Support</h3>
              <p>
                <a href="contact.php" class="text-light"> Contact Us</a>
              </p>
              <p>
               <a href="subscribe.php" class="text-light"> How to subscribe</a>
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
            <form class="input-transparent" action="" method="">
              <div class="form-group">
                <?php if(isset($_SERVER['HTTP_MSISDN'])) { ?>
                <input
                  type="hidden"
                  class="form-control border-info bg-dark text-white"
                  name="phone"
                  value="<?php  echo $msisdn; ?>"
                />
                <?php } else{ ?>
                <input
                  type="text"
                  class="form-control border-info bg-dark text-white"
                  name="phone"
                  value="234"
                
                />
                <?php } ?>
              </div>
        
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
            
              </div>
              <div class="form-group mt-3">
                <button class="btn btn-block btn-info w-100" type="submit">
                  Login
                </button>
              </div>
            </form>
            <span class="small"
              >Don't have an account? <a href="./subscribe.php" class="text-light">Create an account</a></span
            >
          </div>
        </div>
      </div>
    </div>
    <!-- /.sign Up -->
    <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <script src="./js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="./js/app.js" type="text/javascript"></script>
  </body>
</html>