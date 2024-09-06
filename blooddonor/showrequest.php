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
    <title>show page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h1{
           color: #fff;
           text-align: center;
           height: 5rem;
           line-height: 5rem;
       }
       body{
            background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)),url(back.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .padding{
            padding: 50px;
            padding-top: 0;
          }
          #logo{
    height:60px;
    width:60px;
    border-radius:50%;
    border:1px solid red;
  }
  #ser{
    color:white;
    margin-left:20%;
    display:inline-block;
  }
  #chose{
    width:20%;
    display:inline-block;
    margin-left:20px;
  }
  #sc{
    margin-top:20px;
      height:35px;
    }
  #serch{
    margin-left:20px;
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
 
  <?php
      include('navbar.php');
  ?>
 <br>
    <!-- Navbar End -->
    <form action="" method="post">
      <div class="dropdown">
        <h4 id="ser">Search Blood Group</h4>
        <select class="form-select row" id="chose" name="blood_group">
        <option selected>Select blood group</option>
        <option>A+</option>
        <option>A-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>B+</option>
        <option>B-</option>
        <option>O+</option>
        <option>O-</option>
      </select>
      <input class="btn btn-outline-success m-5" type="submit" value="Search" name="search">
        
      </div><br><br>
    </form>
<!-- <table></table> -->
<h1>SHOW REQUEST..</h1>
<br>
<table class="table table-dark table-striped">
  
    <tr>
      <th scope="col">SL NO.</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">Address</th>
      <th scope="col">ACTION</th>
    
    </tr>
    <?php
       if(isset($_POST['search']))
       {
        
        $blood_group = $_POST['blood_group'];
        // echo "Group: ".$blood_group;

        $responce = getAllDonorsByGroup($blood_group);
        //echo "Records ".mysqli_num_rows($responce);
        $i=1;
          if(mysqli_num_rows($responce)>0)
          {
              while($data = mysqli_fetch_assoc($responce))
              {
                  echo '<tr>
                  <td scope="row">'.$i.'</td>   
                  <td>'.$data['name'].'</td>            
                  <td>'.$data['email'].'</td>   
                  <td>'.$data['address'].'</td> 
                  <td>  
                  <a href="request.php" class="btn btn-success">REQUEST</a>
                  </td>
                  </tr>';
                  $i++;
              }
          }
          else
          {
              echo "<h1 style='color:white; text-align:center'>no record found</1>";
          }
       }
    ?>

</table>

<!-- <table></table> -->

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


        