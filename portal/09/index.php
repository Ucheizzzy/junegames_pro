<?php

session_start();
set_time_limit(180);


if(!isset($_SESSION['june.number'])) header("Location: http://games.juneboxservices.com");


$msisdn = $_POST['number'];


?>

<!DOCTYPE HTML>
<html>
	<head>
		 <title>JuneGames | Play for fun!</title>
    <!-- <link rel="stylesheet" href="../../css/style.css" type="text/css" /> -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" />
    <link
      rel="stylesheet"
      href="../../css/owl.carousel.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="../../css/owl.theme.default.min.css"
      type="text/css"
    />
    <link rel="stylesheet" href="../../css/boxicons.min.css" type="text/css" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- css animate -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
 <script>
      //function to fix height of iframe!
      var calcHeight = function() {
        var headerDimensions = $('.preview__header').height();
        $('.full-screen-preview__frame').height($(window).height() - headerDimensions);
      }

      $(document).ready(function() {
        calcHeight();
      });

      $(window).resize(function() {
        calcHeight();
      }).load(function() {
        calcHeight();
      });
    </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141652354-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141652354-3');
</script>

<style type="text/css"> 
    body {
        height: 100%;
        margin: 0px;
       background-color: #000 !important;   
    }
    .nav-item .nav-link:hover {
        color: #ff4d29 !important;
    }
    .btn-info{
      color: dark-gray !important;
      font-size: 15px !important;
    }
    .btn-info:hover{
      background-color: #ff4d29 !important;
      border:0 !important;
      color: #fff !important;
    } 

</style>
     <link rel="stylesheet" href="../style.css" type="text/css" />
</head>

<body>
<nav class="navbar navbar-expand-lg  navbar-light px-5">
  <div class="container-fluid">
     <div class="collapse navbar-collapse" id="navbarNavDropdown" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="../">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../">Game Portal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../?signout=0">Sign Out</a>
        </li>
      
      </ul>
    </div>

    <a class="btn btn-info rounded-3  navbar-brand"><?php echo $_SESSION['june.number']; ?></a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
  </div>
</nav>



    
      <iframe src="play.html" class="mt-5" height="100%" width="100%" frameborder="0" noresize="noresize" data-view="fullScreenPreview" style="width:100%; height: 100%; border:0; margins:0"></iframe>




 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>