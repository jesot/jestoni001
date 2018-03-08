
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
//header("location: profile.php"); // Redirecting To Profile Page
header("location: index.php"); // Redirecting To Profile Page
}
?>
<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<?php include('header.php'); ?>
	<title>EAMDSS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<!-- <link rel="stylesheet" href="assets/css/another.css"> -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="assets/vendor/linearicons/style.css"> -->
	<link rel="stylesheet" href="assets/css/loginstyle.css">
	<!-- MAIN CSS -->
	 <link rel="stylesheet" href="assets/css/main.css"> 

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<!-- <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png"> -->
</head>
<script src="assets/js/show-hidepassword.js">
       $("#passwordko").password('toggle');
    </script>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box">
					<div class="left">
						<div class="content">
							<div class="header">
								<!-- <div class="logo text-center"><img src="assets/img/systemlogo.jpg" alt="OUR SYSTEM LOGO"></div> -->
								<p class="lead">Login to your account</p>
							</div>
							<?php echo $error;?>
							<form class="form-auth-small" action="" method="POST">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" name="username" class="form-control" id="user" value="" placeholder="Username" required>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="passwordko" value="" placeholder="********" data-toggle="password" required>
										<input type="submit" name="login" id="btn" class="btn btn-success btn-sm" value="LOGIN">
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Electronic Assets Management w/ Decision Support System</h1>
							<p>for Panpacific University North Philippines Tayug Campus</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
   <div class="card">
   </div>

	<!-- END WRAPPER -->
</body>
</html>
