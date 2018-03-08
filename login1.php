<?php session_start();

include('dbcon.php');

if(isset($_POST['submit']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($konek,$user_unsafe);
$pass1 = mysqli_real_escape_string($konek,$pass_unsafe);
$pass=md5($pass1);
$pass=$pass;

$query=mysqli_query($konek,"select * from users where username='$user' and password='$pass'")or die(mysqli_error($konek));
		$row=mysqli_fetch_array($query);
           $id=$row['user_id'];
          /*  $first=$row['admin_first'];
           $last=$row['admin_last']; */
           $counter=mysqli_num_rows($query);

		  	if ($counter == 0) 
			  {	
				  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
				  document.location='indexlogin.php'</script>";
			  } 
			  else
			  {
				  $_SESSION['id']=$id;	
				  /* $_SESSION['name']=$first." ".$last; */

			  	echo "<script type='text/javascript'>document.location='index.php'</script>";  
			  }
}
?>