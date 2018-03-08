<?php include('dbcon.php');
      
?>
<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="" alt="EAMDSS" class="logog"></a>
			</div>
			<style>
			.logog {
                width: 40%;
                height: 20%;
                position: relative;
			}
		 </style>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
					<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-list"></i><i class="icon-submenu"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><?php echo $_SESSION['login_user'];?></a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i><i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu" admin..com00100>
								<li><a href="#"><?php echo $_SESSION['login_user'];?></a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br>
	
	
		