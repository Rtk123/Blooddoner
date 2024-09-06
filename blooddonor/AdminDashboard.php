<?php
    include('crud_3.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>

    <?php
        session_start();
        if(!isset($_SESSION['email']))
        {
            header('location:index.php');
        }
    ?>

    <h1>This is Admin Dashboard</h1>

   <?php
        $email = $_SESSION['email'];
         $responce = getDonorbyId($email);
         //echo "Records ".mysqli_num_rows($responce);
         
           if(mysqli_num_rows($responce)>0)
           {
              $data = mysqli_fetch_assoc($responce);
              echo "Name: ".$data['name'].'<br>';
              echo "Name: ".$data['blood'].'<br>';
              echo "Name: ".$data['address'].'<br>';
           }
   ?>

    <a href="logout.php">Logout</a>
</body>
</html>