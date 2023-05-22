<?php include_once('./includes/header.php'); ?>
    <!-- slider -->

    <div class="about-wrapper">
      <div class="container-fluid">
        <div class="about-item">
          <div class="about-img">
            <img src="./img/contact/contact.png" alt="Image" />
          </div>
          <div class="about-text">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- contactus games -->

    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 bg-dark rounded-3 p-4">
            <form class="bg-dark" method="POST" action="">
              <div
                class="form-group d-flex justify-content-between align-items-center"
              >
                <input
                  type="text"
                  name="name"
                  placeholder="Your Name"
                  class="form-control me-2 bg-dark"
                  required
                />
                <input
                  type="email"
                  name="email"
                  placeholder="Your Email"
                  class="form-control bg-dark"
                  required
                />
              </div>
              <div class="form-group mt-3">
                <input
                  type="text"
                  name="subject"
                  placeholder="What's the title of this email"
                  class="form-control bg-dark"
                  required
                />
              </div>
              <div class="form-group mt-3">
                <textarea
                  name="message"
                  placeholder="What's the message?"
                  class="form-control bg-dark"
                  rows="5"
                  required
                ></textarea>
              </div>
              <div class="form-group mt-3">
                <button name="submit" class="btn btn-brand btn-info w-100">
                  Submit
                </button>
              </div>
            </form>
          </div>

          <div class="col-md-6 company">
            <div class="row px-5 text-light">
              <ul>
                <li>
                  <i class="fas fa-map-marker-alt me-4"></i>77th 12th street NE
                  Atlanta, 30309
                </li>
                <li><i class="fas fa-phone me-4"></i>(470) 237-9123</li>
                <li>
                  <i class="fas fa-envelope me-4"></i
                  >support@games.juneboxservices.com
                </li>
              </ul>

              <h3>Follow us</h3>
              <div class="social-icons">
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
          </div>
        </div>
      </div>
    </section>

    <!-- subscribe secton -->
    <section class="subscribe-slider owl-carousel owl-theme">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <img src="./img/subscribe/daily.png" class="rounded-3" />
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <img src="./img/subscribe/weekly.png" class="rounded-3" />
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <img src="./img/subscribe/monthly.png" class="rounded-3" />
          </div>
        </div>
      </div>
    </section>

    <!-- faq -->

    <section class="faq">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">FAQ</h3>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- questions -->
            <div class="section-center mx-auto">
              <!-- single question -->
              <article class="question">
                <!-- question title -->
                <div class="question-title">
                  <p>I love this games but how can i subscribe?</p>
                  <button type="button" class="question-btn">
                    <span class="plus-icon">
                      <i class="far fa-plus-square"></i>
                    </span>
                    <span class="minus-icon">
                      <i class="far fa-minus-square"></i>
                    </span>
                  </button>
                </div>
                <!-- question text -->
                <div class="question-text">
                  <p>
                    You can subscribe with an MTN line by Sending JGD to 8010
                    for daily, JGW to 8010 for weekly and JGM to 8010 for
                    monthly.
                  </p>
                </div>
              </article>
              <!-- end of single question -->
              <!-- single question -->
              <article class="question">
                <!-- question title -->
                <div class="question-title">
                  <p>Can i download some games here after subscribing?</p>
                  <button type="button" class="question-btn">
                    <span class="plus-icon">
                      <i class="far fa-plus-square"></i>
                    </span>
                    <span class="minus-icon">
                      <i class="far fa-minus-square"></i>
                    </span>
                  </button>
                </div>
                <!-- question text -->
                <div class="question-text">
                  <p>
                    No. These are subscription based games. You can only access
                    these games after you have subscribed.
                  </p>
                </div>
              </article>
              <!-- end of single question -->
              <!-- single question -->
              <article class="question">
                <!-- question title -->
                <div class="question-title">
                  <p>What devices are compatible with these games?</p>
                  <!-- button -->
                  <button type="button" class="question-btn">
                    <span class="plus-icon">
                      <i class="far fa-plus-square"></i>
                    </span>
                    <span class="minus-icon">
                      <i class="far fa-minus-square"></i>
                    </span>
                  </button>
                </div>
                <!-- question text -->
                <div class="question-text">
                  <p>Any device that can access the internet.</p>
                </div>
              </article>
              <!-- end of single question -->
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php  include_once('./includes/footer.php'); ?>