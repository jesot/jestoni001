
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
//header("location: profile.php"); // Redirecting To Profile Page
header("location: index.php"); // Redirecting To Profile Page
}

 if(isset($_POST["submit"]))  
 {   
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($konek, $_POST["username"]);  
           $password = mysqli_real_escape_string($konek, $_POST["password"]);  
    
           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($konek, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:index.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="assets/css/style.css">

  
</head>

<body>
  
<div class="container">
  <div class="info">
    <h1>EAMDSS</h1>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="assets/img/punptayug.png"/></div>

  <form action="" method="POST" class="login-form">
    <!-- <span><?php //echo $error; ?></span> -->
    <input id="name" name="username" type="text" placeholder="username"/>
    <input id="password" name="password" type="password" placeholder="password"/>
     <button name="submit">Login</button>
  </form>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="assets/js/index.js"></script>

</body>
</html>
