<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            color: #4a4a8c;
            margin-bottom: 20px;
            font-size: 32px;
            font-weight: bold;
        }
        p {
            line-height: 1.8;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 20px;
        }
        .contact-info a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 10px;
            text-decoration: none;
            color: #fff;
            font-size: 24px; /* Increased font size */
            width: 60px;
            height: 60px;
            border-radius: 50%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 10px;
        }
        .contact-info a:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        .whatsapp {
            background-color: #25D366; /* WhatsApp green */
        }
        .whatsapp:hover {
            background-color: #128C7E; /* Darker WhatsApp green */
        }
        .phone {
            background-color: #34b7f1; /* Call button color */
        }
        .phone:hover {
            background-color: #0098d4; /* Darker Call button color */
        }
        .fa-whatsapp, .fa-phone {
            font-size: 24px;
        }
        .address {
            margin-top: 30px;
            font-size: 16px;
            line-height: 1.6;
            color: #4a4a8c;
        }
        .address a {
            color: #2193b0;
            text-decoration: none;
            font-weight: bold;
        }
        .address a:hover {
            text-decoration: underline;
        }
        .map {
            margin-top: 20px;
            border: 0;
            width: 100%;
            height: 400px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Hello, my name is Ritik Tiwari. I have completed my graduation from Deen Dayal Upadhyay Gorakhpur and am currently pursuing my Master of Computer Applications (MCA) from Techno India University, West Bengal.</p>
        <p>For any inquiries or if you'd like to get in touch with me, feel free to reach out through the following:</p>
        
        <div class="contact-info">
            <a href="https://wa.me/7033428573" target="_blank" class="whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="tel:+7033428573" class="phone">
                <i class="fas fa-phone"></i>
            </a>
        </div>

        <div class="address">
            <p><strong>Address:</strong></p>
            <a href="https://www.google.com/maps/search/?api=1&query=Anukul+Chatterjee+Lane,+BF+Siding+Road" target="_blank">Anukul Chatterjee Lane, BF Siding Road</a>
        </div>

        <!-- Embedded Google Map -->
        <iframe class="map" src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Howrah,+West+Bengal" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- Include Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</body>
</html>
