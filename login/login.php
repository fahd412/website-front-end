<?php 

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index1.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
     content="width=device-width",
     initial-scale= 1.0>
    <title>caravan login front end</title>
    <link rel="stylesheet" href="loginstyle.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' 
     rel='stylesheet'>

</head>
 <body>
  <div class = 'background-image'>
    <div class="wrapper">
       <form action="login.php" method=POST> 
            <h1>login</h1>
            <div class="input__box"> 
               <input type="text"placeholder="username" name="user_name" required>
               <i class='bx bx-user'></i>
            </div>
            <div class="input__box">
              <input type="password"placeholder="password" name="password" required>
              <i class='bx bx-lock-alt' ></i>
            </div>
            <div class="remember__forgot">
                 <label><input type="checkbox"> remember me </label>
               <a href="#">forgot password</a>
           </div>
           <button type="submit" class= "button">login </button>
           <div class="register__link" >  
                 <p>dont have an account? <a href="signup.php">register</a></p>
        </div>            
      </form>
    </div>      
    </div>
 </body>
</html>


