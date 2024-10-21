<?php
include ("dbconnect.php");


if (isset($_POST['email'], $_POST['message'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']); 
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "INSERT INTO contact_form (email, message) VALUES ('$email', '$message')";
    $add_query = mysqli_query($con, $query);

    if ($add_query) {
        //echo "Message sent successfully!";
    } else {
        //echo "Message could not be sent!";
    }
} else {
    //echo "Invalid form data.";
}

    mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About-Foodio</title>
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
            max-width: 600px;
            margin: 20px auto;
            background-color: #333333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container2 {
            max-width: 700px;
            margin: 20px auto;
            background-color: #333333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: white;
            color: #333333;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            opacity: 0.8;
        }

        .texts {
            color:white;
        }



    </style>
</head>
<body>

    <div class="navbar-title">
        <strong><a href="foodio-home.html">foodio</a></strong>
    </div>

    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu-page.php">Menu</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="login.php">Sign-In/Sign-Up</a></li>
        <li><a href="process-form.php">About</a></li>
    </ul>


    <div class="container2">
        <p class="texts">
            This website is done by students of Ankara Science University as part of Web Design & Programming course.
            <br>
            If you have any suggestions or questions, you can fill out the form below.
        </p>
    </div>

    

    <div class="container">
        <h2 class="texts">Contact Form</h2>
        <form action="process-form.php" method="POST">
            <label for="email" class="texts">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="message" class="texts">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
    
            <button type="submit">Submit</button>
        </form>
    </div>
    
    

</body>
<footer class="footer">
    <div>
        Ceng361 Project - 2023
    </div> 
</footer>
</html>


