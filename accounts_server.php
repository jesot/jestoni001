 

  <?php 

  $konek = mysqli_connect('localhost', 'root', '', 'asset');

    $updateUser=false;
    $usertype= "";
    $nameofuser="";
    $username= "";
    $password= "";
    $email= "";
    $user_id= 0;

    ?>

<?php
     if(isset($_POST['addUser'])) {
   //id
    //   $usertype= ($_POST['usertype']);
       $nameofuser = ($_POST['nameofuser']);
       $username = ($_POST['username']);
       $password = ($_POST['password']);
    //   $password= md5($password);
       $email = ($_POST['email']);
     
      mysqli_query($konek,"INSERT INTO users(nameofuser,username,password,email) VALUES ('$usertype','$nameofuser','$username','$password','$email')");
          echo "<script type='text/javascript'>alert('Successfully Added!');</script>";
          echo "<script>document.location='accounts.php'</script>";
      }

?>
<?php
    if(isset($_POST['updateUser'])) {
    //   $usertype= ($_POST['usertype']);
       $nameofuser = ($_POST['nameofuser']);
       $username = ($_POST['username']);
       $password = ($_POST['password']);
       
       $email = ($_POST['email']);
       $user_id = ($_POST['user_id']);
       
       mysqli_query($konek, "UPDATE users SET nameofuser='$nameofuser',username='$username',password='$password',email='$email' WHERE user_id=$user_id");

         echo "<script type='text/javascript'>alert('Successfully Updated $nameofuser!');</script>";
         echo "<script>document.location='accounts.php'</script>";
    }

  
   if (isset($_GET['delUser'])) {
       $user_id = $_GET['delUser'];
       mysqli_query($konek, "DELETE FROM users WHERE user_id=$user_id");
 // $_SESSION['message'] = "Successfully DELETED!"; 

         echo "<script type='text/javascript'>alert('Successfully DELETED!');</script>";
         echo "<script>document.location='accounts.php'</script>";

} ?>
        
<?php //fetching the data of aircon type
$type_res = mysqli_query($konek, "SELECT type FROM tb_type WHERE type_id=1");
$type = "";

while($row2 = mysqli_fetch_array($type_res)) 
   {
    $type = $type."<option>$row2[0]</option>";

   }

  ?>






