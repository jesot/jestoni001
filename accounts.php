<?php
//include('ifnotlogin.php');
?>
<?php include('accounts_server.php');

if (isset($_GET['editUser'])) {
    $user_id = $_GET['editUser'];
    $updateUser = true;
    $users = mysqli_query($konek, "SELECT * FROM users WHERE user_id='$user_id'");

 if (count($users) == 1 ) {
    $n = mysqli_fetch_array($users);
   // $usertype = $n['usertype'];
    $nameofuser = $n['nameofuser'];+
    $username = $n['username'];
    $password = $n['password'];
    $email = $n['email'];
    $user_id = $n['user_id'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	 include('header.php');
	 include('aircon_modal.php');
	?>
  <h><title>List of Users</title></h>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
	    <?php include('navbar.php'); ?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
	       <?php include('sidebar.php'); ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">ACCOUNTS</h3>
					<div class="row">
						<div class="col-md-4">
							<div class="panel">
								<div class="panel-heading">
								 <h3 class="panel-title"><span class="fa fa-plus"></span>  <strong>Accounts</strong></h3>
								</div>
								<form method="POST" action="">
								<div class="panel-body">
								 <div class="col-md-12">
                       
	                           <label for="type">Complete Name</label>
                               <input type="text" class="form-control" name="nameofuser" placeholder="name of user" value="<?php echo $nameofuser;?>"> 							 
	                           <label for="type">Username</label>
                               <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username;?>">
                            
                              
							               <label for="type">Password</label>
                               <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $password;?>" id="passwordko" data-toggle="password">
                             
							          
                             <label for="type">Email Address</label>
                               <input type="Email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $email;?>">

                    
                                <input type="text" class="hidden" name="user_id" placeholder="User ID" value="<?php echo $user_id;?>" readonly>
                           
                                  	<br>  	<br>
                                   <?php if ($updateUser == true): ?>
                                   <button class="btn btn-primary" type="submit" name="updateUser">UPDATE</button>


                                    <button class="btn btn-danger" type="submit" name="CancelupdateUser">CANCEL</button>
                                   <?php else: ?>

                                  <button class="btn btn-success btn btn-fill" type="submit" name="addUser" onclick ="return confirm('are you sure?')">SAVE</button>
 

                                  <div class="col-sm-6 pull-right">
                                  <button type="reset" class="btn btn-default btn btn-fill"  name="">CLEAR</button>
                                  </div>
                                   <?php endif ?>
                                </div>

	<!--panel body end--></div>
	                      </div>
   <!--panel end-->     </div>
						<div class="col-md-8">
							<div class="panel">
								<div class="panel-heading">
									<h1>Lists of Accounts</h1>
								</div>
								<div class="panel-body">
                  <div style="overflow-x:auto;">
                                 <table id="userTable" class="table table-hover table-bordered">
                                  <thead>
                                    <tr>
                                    	<td colspan="2">Actions</td>
                      
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                    
                                    </tr>
                                  </thead>
                             <?php
                      // retrieve selected results from database and display them on page
                             $search_result = mysqli_query($konek, 'SELECT * FROM users');
                               while($row = mysqli_fetch_array($search_result)) { ?>
                                  <tr>
                                    <td>
                                    <a href="accounts.php?editUser=<?php echo $row['user_id']; ?>" class="btn btn-info lnr lnr-pencil" rel="tab"></a>
                                    </td>

                                    <td>

                                   <a  href="accounts_server.php?delUser=<?php echo $row['user_id']; ?>" class="btn btn-danger lnr lnr-trash" onclick="return confirm('Are you sure? Click cancel if not!')" rel="tab"></a>
                                    </td>
                              
                                    <a href=""><td><?php echo $row['user_id'];?></td></a>
                                    <td><?php echo $row['nameofuser']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                            
                                 </tr>

                                    <?php } ?>
                                </table>
                              </div>
								           </div>
					            		</div>

						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>


			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.punptayug.edu.ph" target="_blank">PUNP</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
<?php include('datatables.php');?>



</body>

</html>
