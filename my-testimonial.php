<?php
session_start();
error_reporting(0);

include('includes/dbconnect.php');


include('functions.php');
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
else{
if(isset($_POST['submit']))
  {
$testimonoial=$_POST['testimonial'];
$email=$_SESSION['login'];
$sql="INSERT INTO  tbltestimonial(Testimonial) VALUES(:testimonial)";
$query = $dbh->prepare($sql);
$query->bindParam(':testimonial',$testimonoial,PDO::PARAM_STR);


$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Testimonial submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>RIZIKI</title>

	<link rel="stylesheet"  href="assets/css/styling2.css">
    
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/main1.css" type="text/css">
<link rel="stylesheet" href="assets/css/main1.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">






   </head>


<!--sidebar -->
<?php include('includes/sidebar.php');?>
<!-- /sidebar--> 

<body>
    <section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Post Testimonial</h1>
        <p> Your Testimonial will be anonymous</p>
      </div>
      
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from users where email=:email";
$query = $dbh -> prepare($sql);
$query -> bindParam(':email',$useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      

      <div class="dealer_info">
        <h5><?php echo htmlentities($result->username);?></h5>
        <p><?php echo htmlentities($result->email);?><br>
          <?php echo htmlentities($result->phone);?>&nbsp;<?php echo htmlentities($result->email); }}?></p>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <?php include('includes/sidebar.php');?>
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>


          <form  method="post">
          
          
            <div class="form-group">
              <label class="control-label">Testimonial</label>
              <textarea class="form-control white_bg" name="testimonial" rows="4" required=""></textarea>
            </div>
          
           
            <div class="form-group">
              <button type="submit" name="submit" class="btn">Save  <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 



<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
</body>
</html>
<?php } ?>