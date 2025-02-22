<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")

	{
        
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['Password'];
        print($user_name);
        print("hello");

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            print($query);

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
	}       else
		 {
			echo "Please enter some valid information!";
		}
	}
?>




<!DOCTYPE html>
<html lang="en">
<head>
     <title>Caravan sign up page</title>
     <link rel="stylesheet" href="signupstyle.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <script src="signup.js"></script>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="background-image">
<!--registeration form/signup form!-->
<div class="container">
    <div class="form__boxes"> 
     
        <form id="myForm" name="Formfill" action="signup.php" method="post">
          
            <h2>register</h2>
            <p id="result">head</p>
           <div class="input__boxes">
            <i class='bx bx-user' ></i>
            <input type="text" name="user_name" placeholder="User_name">
        </div>
        <div class="input__boxes">
            <i class='bx bx-envelope' ></i>
            <input type="text" name="Email" placeholder="Email">
        </div>
        <div class="input__boxes">
            <i class='bx bx-lock-alt' ></i>
            <input type="text" name="Password" placeholder="Password">
        </div>
        <div class="input__boxes">
            <i class='bx bx-lock-alt' ></i>
            <input type="text" name="Cpassword" placeholder="Confirm Password">
        </div>
         <div class="button">
            <input type="submit" class="btn">

       </a>
            
         </div>
         <div><div class="group">
            <span><a href="#">Forgot Password</a></span>
            <span><a href="login.php">Login</a></span>
         </div></div>
    </form>

    </div>
    </div>

    <!--pop up after signing up-->
    <div class="h popup" id="popup">
        <ion-icon name="checkmark-circle-outline"></ion-icon>
        <h2>Thank you!</h2>
        <p>your registeration was succesful!</p>
        <a href="login.html"><button id="OkayButton">Okay</button></a>
    </div>
 </div>

</div>

</body>


