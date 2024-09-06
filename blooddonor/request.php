<?php
include('crud_3.php');
?>
<!doctype html>
<html lang="en">
  <head>
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


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>registration page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
          background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)),url(back.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
           
            color: #fff;
            text-align: center;
            height: 5rem;
            line-height: 5rem;
        }
        .padding{
            padding: 50px;
            padding-top: 0;
          }
          .blood{
            padding:20px;
          }
          #logo{
    height:60px;
    width:60px;
    border-radius:50%;
    border:1px solid red;
  }
  #sc{
      height:35px;
    }
  #edon{
    display:inline-block;margin-top:40px;margin-left:-15px;
  }
  @media screen and (max-width: 800px){
    #edon{
  margin-left:-180px;
    }
  }
    </style>
  </head>
  <body>
 
 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="request.php">
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
               
    <!-- Navbar End -->


    <h1>Request !</h1>
    <form method="POST">
<div class="padding">

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"style="color:white">Coustomer Name:</label>
    <input type="text" class="form-control"name="name" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"style="color:white">Email:</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="email" class="form-control"name="email" id="inlineFormInputGroupUsername" placeholder="email">
    </div>
  </div>

    <div class="row mb-3">
    <label class="form-label"style="color:white">Date</label>
    <div class="col">
    <input type="date" class="form-control" name="date" id="date" placeholder="Enter date">
    </div>
    </div>

    <div class="dropdown mb-3">
  <h3 style="color:white;">Search Blood Group</h3>
  <select class="form-select"id="chose" name="blood">
  <option></option>
  <option>A+</option>
  <option>A+</option>
  <option>AB+</option>
  <option>AB-</option>
  <option>B+</option>
  <option>B+</option>
  <option>O+</option>
  <option>O+</option>
</select>
</div>

    <div class="row mb-3">
    <label for="floatingTextarea" style="color:white">address</label>
    <div class="form-floating">
    <div class="col">
  <textarea class="form-control" placeholder="write here..." id="floatingTextarea" name="text"></textarea>
  </div>
  </div>
</div>

  <button type="submit" class="btn btn-success" name="add">Submit</button>
  <button type="Reset" class="btn btn-danger">Reset</button>
  
  <?php
                    //$name = $_POST['name'];
                    //var name = document.getElementById('name').value;
                    if(isset($_POST['add']))
                    {
                      $name = $_POST['name'];
                      $email = $_POST['email'];
                      $blood = $_POST['blood'];
                      $date = $_POST['date'];
                      $text = $_POST['text'];
                     

                      if($name!="" && $email!="" && $date!="" && $text!=""&& $blood!="")
                      {
                      $responce = addadmin($_POST);

                      if($responce == 1)
                      {
                        echo "<p style='color:white'>Request send..</p>";
                      }
                      else
                      {
                        echo "<p style='color:red'>Request  not send..</p>";
                      }
                      }
                    else
                      {
                      echo "<script>alert('fill all the field')</script>";
                      } 
                    }
                  ?>
                  
</div>
</form>

<script>

      function error(){
    var pass=document.getElementById('pass').value;
    var cpass=document.getElementById('cpass').value;
    if(pass!=cpass){
      document.getElementById('error').innerHTML=" Sorry you entered same password..!!!";
      document.getElementById('cpass').value="";
    }
    else{
      document.getElementById('error').innerHTML=" Password confirmed..!!";
    }
  }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

   
    
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


                   <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>


        