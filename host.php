<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');
if(isset($_POST['submit']))
  {
    $fullname=$_POST['fullname'];
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $street_address=$_POST['street_address'];
    $town=$_POST['town'];
    $county=$_POST['county'];
    $postcode=$_POST['postcode'];
    $residence=$_POST['residence'];
    $male=$_POST['male'];
    $female=$_POST['female'];
    $children=$_POST['children'];
    $pets=$_POST['pets'];
    $accesibility=$_POST['accesibility'];
    $add_accesibility=$_POST['add_accesibility'];
    $bedrooms=$_POST['bedrooms'];
    $single_beds=$_POST['single_beds'];
    $double_beds=$_POST['double_beds'];
    $emergencies=$_POST['emergencies'];
    $kitchen=$_POST['kitchen'];
    $lessthanamonth=$_POST['duration'];
  
    
    
    
    $sql="INSERT INTO  tbl_donor(fullname,email,phone,street_address,town,county,postcode,residence,male,female,children,pets,accesibility,add_accesibility,bedrooms,single_beds,double_beds,emergencies,kitchen,duration) VALUES(:fullname,:email,:phone,:street_address,:town,:county,:postcode,:residence,:male,:female,:children,:pets,:accesibility,:add_accesibility,:bedrooms,:single_beds,:double_beds,:emergencies,:kitchen,:duration)";
    $query = $dbh->prepare($sql);
    
    $query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':phone',$phone,PDO::PARAM_STR);
    $query->bindParam(':street_address',$street_address,PDO::PARAM_STR);
    $query->bindParam(':town',$town,PDO::PARAM_STR);
    $query->bindParam(':county',$county,PDO::PARAM_STR);
    $query->bindParam(':postcode',$postcode,PDO::PARAM_STR);
    $query->bindParam(':residence',$residence,PDO::PARAM_STR);
    $query->bindParam(':male',$male,PDO::PARAM_STR);
    $query->bindParam(':female',$female,PDO::PARAM_STR);
    $query->bindParam(':children',$children,PDO::PARAM_STR);
    $query->bindParam(':pets',$pets,PDO::PARAM_STR);
    $query->bindParam(':accesibility',$accesibility,PDO::PARAM_STR);
    $query->bindParam(':add_accesibility',$add_accesibility,PDO::PARAM_STR);
    $query->bindParam(':bedrooms',$bedrooms,PDO::PARAM_STR);
    $query->bindParam(':single_beds',$single_beds,PDO::PARAM_STR);
    $query->bindParam(':double_beds',$double_beds,PDO::PARAM_STR);
    $query->bindParam(':emergencies',$emergencies,PDO::PARAM_STR);
    $query->bindParam(':kitchen',$kitchen,PDO::PARAM_STR);
    $query->bindParam(':duration',$lessthanamonth,PDO::PARAM_STR);
    
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Application Sent. Thank You for your application. You are saving a life. We will get back to you soon";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Riziki|Host Application</title>

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




<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->


<link rel="stylesheet" href="assets/css/style2.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon-32x32.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
 <style>
    .errorWrap {
    padding: 10px 0px 250px 200px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    text-align: center;
}
.succWrap{
    padding: 50px 0px 200px 50px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    text-align: center;
}




	</style>
    </style>
</head>
<body>

        
<!--Header-->
<?php include('includes/header1.php');?>
<!-- /Header -->


<!--Host-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        
        <h3>Host Registration</h3>
          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

        <div class="contact_form gray-bg">


          <form  method="post">

          <div class="page slide-page">
            <div class="title">HOST DETAILS:</div>

            <br/>

            <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>

            <div class="form-group">
              <label class="control-label">Email<span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>

            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" name="phone" class="form-control white_bg" id="phonenumber" required>
            </div>

            <div class="page">
            <div class="title">ADDRESS OF ACCOMODATION:</div>

            <br/>

            <div class="form-group">
              <label class="control-label">Street Address<span>*</span></label>
              <input type="text" name="street_address" class="form-control white_bg" id="fullname" required>
            </div>

            <div class="form-group">
              <label class="control-label">County<span>*</span></label>
              <input type="text" name="county" class="form-control white_bg" id="fullname" required>
            </div>

            <div class="form-group">
              <label class="control-label">Town/City<span>*</span></label>
              <input type="text" name="town" class="form-control white_bg" id="fullname" required>
            </div>

            <div class="form-group">
              <label class="control-label">Postal Code <span>*</span></label>
              <input type="text" name="postcode" class="form-control white_bg" id="phonenumber" required>
            </div>

            <div class="page">
            <div class="title">HOUSEHOLD INFORMATION:</div>

             <br/>

            <div class="form-group">
			      <label class="control-label">Who lives in the accomodation?</label>
				    <select id="car" name="residence">
				     <option id="Subaru">No one, accomodation is empty</option>
				     <option id="Toyota">Just me</option>
				     <option id="Honda">Me and my family</option>
				     <option id="Vitz">Me and my patner</option>
				     <option id="Prado">Flat Share</option>
             <option id="Prado">Other</option>
				   </select>
            </div>


            <div class="form-group">
			      <label class="control-label">Number of Male Resident Adults</label>
				    <select id="car" name="male">
				     <option id="Subaru">1</option>
				     <option id="Toyota">2</option>
				     <option id="Honda">3</option>
				     <option id="Vitz">4</option>
				     <option id="Prado">5</option>
             <option id="Prado">6</option>
             <option id="Prado">7</option>
             <option id="Prado">8</option>
             <option id="Prado">9</option>
             <option id="Prado">10</option>
				   </select>
            </div>    
            
            
            <div class="form-group">
			      <label class="control-label">Number of Female Resident Adults</label>
				    <select id="car" name="female">
				     <option id="Subaru">1</option>
				     <option id="Toyota">2</option>
				     <option id="Honda">3</option>
				     <option id="Vitz">4</option>
				     <option id="Prado">5</option>
             <option id="Prado">6</option>
             <option id="Prado">7</option>
             <option id="Prado">8</option>
             <option id="Prado">9</option>
             <option id="Prado">10</option>
				   </select>
            </div> 



            <div class="form-group">
			      <label class="control-label">Number of Children Resident </label>
				    <select id="car" name="children">
				     <option id="Subaru">1</option>
				     <option id="Toyota">2</option>
				     <option id="Honda">3</option>
				     <option id="Vitz">4</option>
				     <option id="Prado">5</option>
             <option id="Prado">6</option>
             <option id="Prado">7</option>
             <option id="Prado">8</option>
             <option id="Prado">9</option>
             <option id="Prado">10</option>
				   </select>
            </div>

            <div class="form-group">
			      <label class="control-label">Do you have pets in the accomodation? </label>
				    <select id="car" name="pets">
				     <option id="Subaru">Yes</option>
				     <option id="Toyota">No</option>
				   </select>
            </div>


            <div class="page">
            <div class="title">HOUSE INFORMATION:</div>

            <br/>

            <div class="form-group">
			      <label class="control-label">Number of Bedrooms Available </label>
				    <select id="car" name="bedrooms">
				     <option id="Subaru">1</option>
				     <option id="Toyota">2</option>
				     <option id="Honda">3</option>
				     <option id="Vitz">4</option>
				     <option id="Prado">5</option>
             <option id="Prado">6</option>
             <option id="Prado">7</option>
             <option id="Prado">8</option>
             <option id="Prado">9</option>
             <option id="Prado">10</option>
				   </select>
            </div>


            <div class="form-group">
			      <label class="control-label">Number of Single Beds Available </label>
				    <select id="car" name="single_beds">
				     <option id="Subaru">1</option>
				     <option id="Toyota">2</option>
				     <option id="Honda">3</option>
				     <option id="Vitz">4</option>
				     <option id="Prado">5</option>
             <option id="Prado">6</option>
             <option id="Prado">7</option>
             <option id="Prado">8</option>
             <option id="Prado">9</option>
             <option id="Prado">10</option>
				   </select>
            </div>


            <div class="form-group">
			      <label class="control-label">Number of Double Beds Available </label>
				    <select id="car" name="double_beds">
				     <option id="Subaru">1</option>
				     <option id="Toyota">2</option>
				     <option id="Honda">3</option>
				     <option id="Vitz">4</option>
				     <option id="Prado">5</option>
             <option id="Prado">6</option>
             <option id="Prado">7</option>
             <option id="Prado">8</option>
             <option id="Prado">9</option>
             <option id="Prado">10</option>
				   </select>
            </div>


            <div class="form-group">
			      <label class="control-label">Could you offer accomodation incase of emergencies? </label>
				    <select id="car" name="emergencies">
				     <option id="Subaru">Yes</option>
				     <option id="Toyota">No</option>
				   </select>
            </div>


            <div class="form-group">
			      <label class="control-label">Does the accomodation have a kitchen?</label>
				    <select id="car" name="kitchen">
				     <option id="Subaru">Yes</option>
				     <option id="Toyota">No</option>
				   </select>
            </div>


            <div class="form-group">
			      <label class="control-label">Accessibility of the accomodation</label>
				    <select id="car" name="accesibility">
				     <option id="Subaru">Fully accessible for people with limited mobility</option>
				     <option id="Toyota">Not accessible for people with limited mobility</option>
				   </select>
            </div>
            
            
            <div class="form-group">
              <label class="control-label">More information on accessibility <span>*</span></label>
              <textarea class="form-control white_bg" name="add_accesibility" rows="4" required></textarea>
            </div>


            <br/>

            <div class="form-group">
			      <label class="control-label">Preferred Duration of Accomodation</label>
				    <select id="car" name="duration">
				     <option id="Subaru">Less than a month</option>
				     <option id="Toyota">1 month</option>
             <option id="Subaru">1 - 3 months</option>
				     <option id="Toyota">3 - 6 months</option>
             <option id="Subaru">6 months or more</option>
				   </select>
            </div>

            



            <div class="form-group">
              <button class="btn" type="submit" name="submit" type="submit">Send Application <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>

          
          </form>

        </div>
      </div>

      <div class="col-md-6">
       
        <div class="contact_detail">
              <?php 
$pagetype=$_GET['type'];
$sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php   echo htmlentities($result->Address); ?></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:61-1234-567-90"><?php   echo htmlentities($result->EmailId); ?></a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:contact@exampleurl.com"><?php   echo htmlentities($result->ContactNo); ?></a></div>
            </li>
          </ul>
        <?php }} ?>
        </div>
      </div>
    </div>
    
  </div>
</section>
<!-- /Host--> 