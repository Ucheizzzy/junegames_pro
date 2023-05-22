<?php include_once('./includes/api.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JuneGames | Play for fun!</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css" />
    <link
      rel="stylesheet"
      href="./css/owl.theme.default.min.css"
      type="text/css"
    />
    <link rel="stylesheet" href="./css/boxicons.min.css" type="text/css" />
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
    <link rel="icon" type="image/x-icon" href="./img/logo/faviconico.ico" />
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
            <a href="index.php">
              <img
                src="./img/logo/juneboxgames-preview.png"
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