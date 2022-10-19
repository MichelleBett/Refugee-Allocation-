
		<?php


include "includes/dbconnect.php"; 


  include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet"  href="assets/css/styling2.css">
   </head>


<!--sidebar -->
<?php include('includes/sidebar.php');?>
<!-- /sidebar--> 

<h1>Update Profile</h1>
<br><br><br><br>
<form action="profileupdate.php" method="post">

<label for="name">Full Name: </label><br> 

<input type="text" name="username" id="name" placeholder="<?php echo $_SESSION['user']['username']; ?>"><br><br><br>

<label for="country">Email Address: </label><br> 

<input type="email" name="email" id="country"  placeholder="<?php echo $_SESSION['user']['email']; ?>"><br><br><br>

<label for="camp">Phone Number:</label><br> 

<input type="number" name="phone" id="camp"  placeholder="0<?php echo $_SESSION['user']['phone']; ?>"><br><br><br>

   
   <input type="submit" name="edit" id="sign">
   
</form>


