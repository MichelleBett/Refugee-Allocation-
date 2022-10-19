<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RIZIKI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/" rel="icon">
  <link href="assets/img/" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet"  href="assets/css/style.css">

</head>


<body>

<!--Header -->
<?php include('includes/header.php');?>
<!-- /Header--> 
 

<div class="signup">
  
<form method="post" action="register.php">
    <?php echo display_error(); ?>

	   <input type="text" name="username" id="name" placeholder="Full Names">

		<input type="email" name="email" id="email" placeholder="Email address">
	
		<input type="number" name="phone" id="number" placeholder="Phone Number">
	
		<input type="password" name="password_1" id="p1" placeholder="Password">
	
		<input type="password" name="password_2" id="p2"  placeholder="Confirm password">

		<button type="submit" id="sign" name="register_btn">Sign up</button>

		<p>Already a member? <a href="login.php">Sign in</a> </p>

	</div>
</form>
</body>
</html>