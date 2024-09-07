<?php
include('crud_2.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="wap">
    <a href="https://wa.me/917033428573?text=hello%20I%20am%20Ritik%20Tiwari"><img src="galary/wap.jpg"  alt=""></a>
    </div>
    <title>Hello world!</title>
<style>
 
  #logo{
    height:60px;
    width:60px;
    border-radius:50%;
    border:1px solid red;
  }
  #edon{
    display:inline-block;margin-top:40px;margin-left:-15px;
  }
  .wap img{
    position: fixed;
    float: right;
    bottom: 20px;
    right: 30px;
    width: 30px;
    border-radius: 50px;
    z-index: 100;
    transition: 0.6s ease;
    }
    .wap img:hover{
    transform: scale(1.5);
    z-index: 2;
    }
    #sc{
      height:35px;
    }
  @media screen and (max-width: 800px){
    #ser{
    margin-left:20%;
  }
  #chose{
    width:50%;
    margin-left:50px;
   }
  #serch{
    margin-left:20px;  
  }
  #edon{
  margin-left:-180px;
  }
  }
 
</style>
   
  </head>
  <body>
<!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="imgs/logo.jpg" alt="" id="logo">
    </a>
    <h2 id="edon">eDonate</h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminlog.php">Donor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userlog.php">User</a>
        </li>
        </ul>
      <form class="d-flex">
        <a href="showrequest.php"class="btn btn-outline-success" type="submit"id="sc">Search</button></a>
      </form>
    </div>
  </div>
</nav>

<!-- navbar -->

<!-- crousel start -->

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/slide1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/slide2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/slide3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- crousel start -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-sm-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>RITIK TIWARI MUKHRAM KANORIA ROAD 711103</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7033428573</p>
                    <p class="mb-2"><a href=""><i class="fa fa-envelope me-3"></i></a>ritiktiwarilive@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/ritiktiwari6407/?hl=en"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100029618632756"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@crystalritik1439"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/ritik-tiwari-48b129256"><i class="fab fa-linkedin-in"></i></a>
                       <a class="btn btn-outline-light btn-social" href="https://github.com/Rtk123/Ritikco.git"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-10">
                    <h4 class="text-white mb-3">eDonate</h4>
                    <div class="row g-2 pt-2">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="imgs/logo.jpg" alt="">
                    </div>
                    </div>
                </div>
               
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="index.php">BLOOD DONATION CAMP</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://www.instagram.com/ritiktiwari6407/?hl=en">Ritik Tiwari</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
