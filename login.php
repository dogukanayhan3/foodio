<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("baglanti.php");
if(isset($_POST["login"])){
  $email1=$_POST["email1"];
  $passwords1=$_POST["password1"];
  
if(isset($email1) && isset($passwords1)){
  $secim = "SELECT * FROM users WHERE email ='$email1'";
  $calistir1 = mysqli_query($baglanti,$secim);
  $kayitsayisi = mysqli_num_rows($calistir1);

  if($kayitsayisi>0){
    $ilgilikayit= mysqli_fetch_assoc($calistir1);
    $haslisifre=$ilgilikayit["passwords"];

    if(password_verify($passwords1,$haslisifre)){
      session_start();
      $_SESSION["email"]=$ilgilikayit["email"];
      header("location:index.php");
    }
    else{
      echo '<div class="alert alert-danger" role="alert">
      Sifre Yanlis
     </div>';
    }
  }
  else{
    echo '<div class="alert alert-danger" role="alert">
    Email Adi Yanlis
   </div>';
  }
  mysqli_close($baglanti);
}}


if(isset($_POST["kaydet"])){
  $email=$_POST["email"];
  $adress=$_POST["adress"];
  $phone_number=$_POST["phone_number"];
  $passwords=password_hash($_POST["passwords"],PASSWORD_DEFAULT);

  if(isset($email)&& isset($adress)&& isset($phone_number)&& isset($passwords)){
    $ekle="INSERT INTO users (email, adress, phone_number, passwords) VALUES ('$email','$adress','$phone_number','$passwords')";
    $calistirekle= mysqli_query($baglanti,$ekle);
    if ($calistirekle){
      echo '<div class="alert alert-success" role="alert">
      Kayit Basariyla Yapildi
      </div>';
    }
    else{
      echo '<div class="alert alert-danger" role="alert">
      Kayit yapilirken bir sorun olustu
      </div>';
    }
   mysqli_close($baglanti);
  }
}
?>



<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
            background-attachment: fixed;
            background-image: url("https://www.tastingtable.com/img/gallery/12-low-carb-fast-food-options-that-wont-ruin-your-diet/intro-1651501665.jpg");
        }

    </style>
</head>
<body>

    <div class="navbar-title">
        <strong>foodio</strong>
    </div>

    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu-page.php">Menu</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="login.php">Sign-In/Sign-Up</a></li>
        <li><a href="process-form.php">About</a></li>
    </ul>
 <div class="loginmain">
    <div class="login"><section class="forms-section">
        
        <div class="forms">
          <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
              Sign In
              <span class="underline"></span>
            </button>
            <form class="form form-login" action="login.php" method="POST">
              <fieldset>
                <legend>Please, enter your email and password for login.</legend>
                <div class="input-block">
                  <label for="login-email">E-mail</label>
                  <input id="login-email" type="email" required name="email1">
                  
                </div>
                <div class="input-block">
                  <label for="login-passwords">Password</label>
                  <input id="login-passwords" type="password" required name="password1">
                </div>
              </fieldset>
              <button type="submit" class="btn-login" name="login"><span>Login</span></button>
            </form>
          </div>
          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
              Sign Up
              <span class="underline"></span>
            </button>
            <form class="form form-signup" action="login.php" method="POST">
              <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                <div class="input-block">
                  <label for="signup-email">E-mail</label>
                  <input  id="signup-email" type="email" required name="email">
                  
                </div>
                
                <div class="input-block">
                    <label for="signup-adress">Address</label>
                    <input  id="signup-adress " type="text" required name="adress">
                   
                </div>
                <div class="input-block">
                    <label for="signup-phone">Phone Number</label>
                    <input  id="signup-phone" type="tel" required name="phone_number">
                    
                </div>
                <div class="input-block">
                    <label for="signup-passwords">Password</label>
                    <input  id="signup-passwords"  type="password" required name="passwords">
                    <div class="invalid-feedback">
                      
             
      </div>
                  </div>
                  <div class="input-block">
                    <label for="signup-passwords">Password</label>
                    <input  id="signup-passwords" type="password" required name="passwordtkr">
                   
                  </div>
              </fieldset>
              <button type="submit" name="kaydet" class="btn-signup"><span>Sign up</span></button>
            </form>
          </div>
        </div>
      </section></div>

    
 </div>
  
<script src="login.js"></script>
</body>
<footer class="footer">
    <div>
        Ceng361 Project - 2023
    </div> 
</footer>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
