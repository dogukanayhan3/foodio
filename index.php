<?php
session_start();
if(isset($_SESSION["email"])){
 echo "<h3>".$_SESSION["email"]."</h3>";
    //echo "<a href='cikis.php' CikisYap</a>";
}
else{
    echo "Bu Sayfayi Goruntuleme Izniniz Yok";
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Foodio</title>
    <link rel="stylesheet" href="home-js.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>

    <div class="navbar-title">
        <strong>foodio</strong>
    </div>

    <ul class="navbar">
        <li><a href="#">Home</a></li>
        <li><a href="menu-page.php">Menu</a></li>x
        <li><a href="cart.php">Cart</a></li>
        <li><a href="login.php">Sign-In/Sign-Up</a></li>
        <li><a href="process-form.php">About</a></li>
    </ul>

    <div class="welcome">
        <h1>Welcome to Foodio !</h1>
        <p>Come inside to taste the world of delicious flavors.
        </p>
        <p>
            Now you can go ahead and check our fast-food menu!
        </p>
        <p>
            If you have any questions about our website and you want to reach out to us, you can go to our About page.
        </p>

    </div>

    <div class="slider-container">
        <button id="prevBtn">&lt; Previous</button>
        <div class="slider">
            <img class="slide" src="https://media.product.which.co.uk/prod/images/ar_2to1_1500x750/241108f1bd79-pizza-ovennl.jpg" alt="pizzas" >
            <img class="slide" src="https://cdn-img.georgeforemangrills.com/manager/georgeforemangrills_com/uk/recipes/large_christmas_burger.jpg" alt="burgers" >
            <img class="slide" src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1500w,f_auto,q_auto:best/newscms/2019_27/1455787/countrys-best-fried-chicken-today-main-190703.jpg" alt="chickens" >
            <img class="slide" src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1500w,f_auto,q_auto:best/rockcms/2023-10/national-sandwich-day-2x1-zz-231030-c8b156.jpg" alt="sandwiches" >
        </div>
        <button id="nextBtn">Next &gt;</button>
    </div>

    <script src="home.js"></script>

</body>
<footer class="footer">
    <div>
        Ceng361 Project - 2023
    </div> 
</footer>
</html>

