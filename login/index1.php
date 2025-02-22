<?php
// Start the session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
    initial-scale=1.0">
    <title>hi</title>
    <link rel="stylesheet" href="style.css">
    
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">


</head>
<body>
  

    <nav class="navigation">
        <a href="index.php" id="navigation__logo">RentMyCaravan</a>
        <div class="navigation__toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navigation__menu">
            <li class="navigation__item">
                <a href="index.php" class="navigation__links">Home</a>
            </li>
                <li class="navigation__item">
                    <a href="caravans.php" class="navigation__links">caravan stuff</a>
                    <li class="navigation__item">
                        <a href="About.html" class="navigation__links">About page</a>
                    </li>
                        <li class="login"> <a href="logout.php" class="button"> logout</a>
            </li>
        </ul>
        </div>
        </nav>
       <!--welcome section-->
       <div class="main">
         <div class="main__container">
         <div class="main__content">
             <h1> welcome to RentMyCaravan.io</h1>
              <p> renting carvans cant be any easier!!!</p>
              <button class="main__button"><a href="signup.php">Get started</a>
             </a></button>
        </div>
        <div class="main__img--container">
          <img src="/login/images/caravan.svg" 
          alt="caravan"  id="main__img">
        </div>
        </div>
        </div>

        <!--services section-->
        <div class="caravan__services">
         <h1>caravan bookings</h1>
           <div class="services__container">
           <div class="services__card"> 
           <h2>caravan datbase ect</h2>
           <p>sort this out later </p>
           <button>get started</button> <a href="signup.php"

         </div>
           </div>
    
     </div>
   </div>

 
</body>

</html>