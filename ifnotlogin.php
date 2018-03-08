<?php

include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: page-login.php"); // Redirecting To Home Page
}
?>