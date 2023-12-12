<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Tiempo</title>
</head>

<body>

    <div class="image-carousel">
        <img src="carrusel/img1.jpg" alt="Image 1">
        <img src="carrusel/img2.jpg" alt="Image 2">
        <img src="carrusel/img3.jpg" alt="Image 3">
        <img src="carrusel/img4.jpg" alt="Image 4">
        <img src="carrusel/img5.jpg" alt="Image 5">
        <img src="carrusel/img6.jpg" alt="Image 6">
    </div>

    <div class="container">
        <div class="search-box">
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" placeholder="Enter your location">
            <button class="fa-solid fa-magnifying-glass"></button>
        </div>

        <div class="not-found">
            <img src="images/404.png">
            <p>Oops! Invalid location :/</p>
        </div>

        <div class="weather-box">
            <img src="">
            <p class="temperature"></p>
            <p class="description"></p>
        </div>

        <div class="weather-details">
            <div class="humidity">
                <i class="fa-solid fa-water"></i>
                <div class="text">
                    <span></span>
                    <p>Humidity</p>
                </div>
            </div>
            <div class="wind">
                <i class="fa-solid fa-wind"></i>
                <div class="text">
                    <span></span>
                    <p>Wind Speed</p>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <p>&copy; Nazer Mendoza Todos Los Derechos Reservados</p>
    </footer>

    <script src="https://kit.fontawesome.com/7c8801c017.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>