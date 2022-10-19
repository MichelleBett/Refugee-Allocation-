
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

<body>

<h1>Track Stay</h1>

<form action="track.php" method="post">
<br><br><br><br><br><br>
<label for="name">Full Name</label><br> 
<input type="text" name="fullname" id="name" ><br><br>

<label for="country">Check-in-date </label><br> 
<input type="date" name="check_in" id="country" ><br><br>

<label for="stay">Check-out date</label><br>

<input type="date" name="check_out" id="camp" > <br><br>

<button type="submit" id="sign" name="submit">Submit</button>

</html>