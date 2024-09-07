<?php
    include('crud_3.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('imgs/blood.avif') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #fff; /* Adjusted text color to ensure readability */
        }
        .dashboard-title {
            color: #f8f9fa;
            font-weight: bold;
            text-transform: uppercase;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background for readability */
            color: #333; /* Adjust text color inside the card */
        }
        .card-title {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .card-text {
            font-size: 1.1rem;
            color: #555;
        }
        .contact-email {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .contact-email:hover {
            text-decoration: underline;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <?php
        session_start();
        if (!isset($_SESSION['email'])) {
            header('location:index.php');
        }
    ?>

    <div class="container mt-5">
        <h1 class="text-center mb-4 dashboard-title">Admin Dashboard</h1>
        
        <?php
            $email = $_SESSION['email'];
            $response = getDonorbyId($email);
            
            if (mysqli_num_rows($response) > 0) {
                $data = mysqli_fetch_assoc($response);
        ?>
        
        <div class="card p-4">
            <div class="card-body">
                <h5 class="card-title">Donor Information</h5>
                <p class="card-text"><strong>Name:</strong> <?php echo $data['name']; ?></p>
                <p class="card-text"><strong>Blood Group:</strong> <?php echo $data['blood']; ?></p>
                <p class="card-text"><strong>Address:</strong> <?php echo $data['address']; ?></p>
                <p class="card-text">
                    <strong>Contact:</strong> 
                    <a href="mailto:<?php echo $email; ?>" class="contact-email">
                        <?php echo $email; ?>
                    </a>
                </p>
            </div>
        </div>
        
        <?php
            } else {
                echo '<div class="alert alert-warning mt-4">No donor information found.</div>';
            }
        ?>

        <div class="text-center mt-4">
            <a href="logout.php" class="btn btn-success">Logout</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
