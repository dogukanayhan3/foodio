<?php
session_start();
if(isset($_SESSION["email"])){
 echo "<h3>".$_SESSION["email"]."</h3>";
    //echo "<a href='cikis.php' syle=color:red; height=100px; background-color:yellow;border:1px solid red;
    //padding:50px 5px;CikisYap</a>";
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
    <title>Cart-Foodio</title>
    <link rel="stylesheet" href="navbar.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
            background-attachment: fixed;
            background-image: url("https://www.tastingtable.com/img/gallery/12-low-carb-fast-food-options-that-wont-ruin-your-diet/intro-1651501665.jpg");
        }
        a {
            color: white;
            text-decoration: none; 
        }

        .container {
            color: white;
            max-width: 800px;
            margin: 20px auto;
            background-color: #333333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: white;
            color: #272525;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }

        button:hover {
            opacity: 0.8;
        }

        .cart-item {
            display: block;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
        }

        .cart-item img {
            width: 100px;
            height: 100px;
            margin-right: 20px;
            border-radius: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }



    </style>
</head>
<body>

    <div class="navbar-title">
        <strong><a href="foodio-home.html">foodio</a></strong>
    </div>

    <ul class="navbar">
        <li><a href='index.php'>Home</a></li>
        <li><a href='menu-page.php'>Menu</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href='login.php'>Sign-In/Sign-Up</a></li>
        <li><a href='process-form.php'>About</a></li>
    </ul>



    <div class="container">
        <h1>Shopping Cart</h1>
        <ul id="cart-list" class="cart-item">
            <!-- Cart items will be displayed here -->
        </ul>
        
        <p id="cart-total">Cart Total: 0 items</p>
    </div>

    <script src="cart.js"></script>

</body>
<footer class="footer">
    <div>
        Ceng361 Project - 2023
    </div> 
</footer>
</html>

