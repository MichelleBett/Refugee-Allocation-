<?php 

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
$lessthanamonth=$_POST['lessthanamonth'];
$onemonth['1month'];
$onemonthtothreemonths=$_POST['1monthsto3months'];
$threemothstosixmonths=$_POST['3monthsto6months'];
$sixmonthsormore=$_POST['6monthsormore'];



$sql="INSERT INTO  tbl_donor(fullname,email,phone,street_address,town,county,postcode,residence,male,female,children,pets,accesibility,add_accesibility,bedrooms,single_beds,double_beds,emergencies,kitchen,lessthanamonth,1month,1monthsto3months,3monthsto6months,6monthsormore) VALUES(:fullname,:email,:phone,:street_address,:town,:county,:postcode,:residence,:male,:female,:children,:pets,:accesibility,:add_accesibility,:bedrooms,:single_beds,:double_beds,:emergencies,:kitchen,:lessthanamonth,:1month,:1monthsto3months,:3monthsto6months,:6monthsormore)";
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
$query->bindParam(':lessthanamonth',$lessthanamonth,PDO::PARAM_STR);
$query->bindParam(':1month',$onemonth,PDO::PARAM_STR);
$query->bindParam(':1monthsto3months',$onemonthtothreemonths,PDO::PARAM_STR);
$query->bindParam(':3monthsto6months',$threemothstosixmonths,PDO::PARAM_STR);
$query->bindParam(':6monthsormore',$sixmonthsormore,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Application Submitted Successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}

}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Application Form</title>
    <link rel="stylesheet" href="assets/css/donor.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">



 
  
 

	<style>
		.container{
width: 330px;
height: 50%;
background: rgba(242, 240, 238, 0.712);
box-shadow: 0 0 10px rgba(0, 0, 0, 1.0);
text-align: center;
color:black;
border-radius: 5px;
padding: 10px 250px 250px 200px;
}

	</style>
  </head>
  <body>


<form action="index.php" method="post" name="submit" onSubmit="return valid();">>
    <div class="container">
      <header>Host Application Form</header>
	  <div id="confirm"></div>
 
      <div class="form-outer">
        <form>

          <div class="page slide-page">
            <div class="title">Host Details</div>

            <div class="field">
              <div class="label" required="true">Full Name</div>
              <input type="text" id="first_name">
            </div>

            <div class="field">
              <div class="label">Email Address</div>
              <input type="text" id="last_name">
            </div>

            <div class="field">
              <div class="label">Phone Number</div>
              <input type="Number">
            </div>


            

          <div class="page">
            <div class="title">Address of Accomodation:</div>

            <div class="field">
              <div class="label">Street Address</div>
              <input type="text">
            </div>

            <div class="field">
              <div class="label">County</div>
              <input type="text">
            </div>

            <div class="field">
              <div class="label">Town/City</div>
              <input type="text">
            </div>

            <div class="field">
              <div class="label">Postal Code</div>
              <input type="Number">
            </div>
            <div class="field btns">
            
            </div>
          </div>



          <div class="page">
            <div class="title">Household Information:</div>

            <div class="field">
			  <div class="label">Who lives in the accomodation?</div>
				<select id="car">
				  <option id="Subaru">No one, accomodation is empty</option>
				  <option id="Toyota">Just me</option>
				  <option id="Honda">Me and my family</option>
				  <option id="Vitz">Me and my patner</option>
				  <option id="Prado">Flat Share</option>
                  <option id="Prado">Other</option>
				</select>
            </div>


            <div class="field">
			  <div class="label">Number of Resident Female Adults</div>
				<select id="car" type ="number"> 
				  <option id="Subaru" value="1">1</option>
				  <option id="Toyota" value="1">2</option>
				  <option id="Honda" value="1">3</option>
				  <option id="Vitz" value="1">4</option>
                  <option id="Prado" value="1">5</option>
				  <option id="Prado" value="1">6</option>
                  <option id="Prado" value="1">7</option>
                  <option id="Prado" value="1">8</option>
                  <option id="Prado" value="1">9</option>
                  <option id="Prado" value="1">10</option>
				</select>
            </div>


            <div class="field">
			  <div class="label">Number of Resident Male Adults</div>
				<select id="car">
                  <option id="Subaru" value="1">1</option>
				  <option id="Toyota" value="1">2</option>
				  <option id="Honda" value="1">3</option>
				  <option id="Vitz" value="1">4</option>
                  <option id="Prado" value="1">5</option>
				  <option id="Prado" value="1">6</option>
                  <option id="Prado" value="1">7</option>
                  <option id="Prado" value="1">8</option>
                  <option id="Prado" value="1">9</option>
                  <option id="Prado" value="1">10</option>
				</select>
            </div>


            <div class="field">
			  <div class="label">Number of Resident Children</div>
				<select id="car">
                  <option id="Subaru" value="1">1</option>
				  <option id="Toyota" value="1">2</option>
				  <option id="Honda" value="1">3</option>
				  <option id="Vitz" value="1">4</option>
                  <option id="Prado" value="1">5</option>
				  <option id="Prado" value="1">6</option>
                  <option id="Prado" value="1">7</option>
                  <option id="Prado" value="1">8</option>
                  <option id="Prado" value="1">9</option>
                  <option id="Prado" value="1">10</option>
				</select>
            </div>


            <div class="field">
			  <div class="label">Do you have pets at home?</div>
				<select id="car">
				  <option id="Subaru">Yes</option>
				  <option id="Toyota">No</option>
				
				</select>
            </div>

            <div class="field btns">
             
            </div>
          </div>



          <div class="page">
            <div class="title">House Information:</div>
            
            <div class="field">
			  <div class="label">Number of Bedrooms Available</div>
				<select id="car">
                  <option id="Subaru" value="1">1</option>
				  <option id="Toyota" value="1">2</option>
				  <option id="Honda" value="1">3</option>
				  <option id="Vitz" value="1">4</option>
                  <option id="Prado" value="1">5</option>
				  <option id="Prado" value="1">6</option>
                  <option id="Prado" value="1">7</option>
                  <option id="Prado" value="1">8</option>
                  <option id="Prado" value="1">9</option>
                  <option id="Prado" value="1">10</option>
				</select>
            </div>

            <div class="field">
			  <div class="label">Number of Single Beds</div>
				<select id="car">
                  <option id="Subaru" value="1">1</option>
				  <option id="Toyota" value="1">2</option>
				  <option id="Honda" value="1">3</option>
				  <option id="Vitz" value="1">4</option>
                  <option id="Prado" value="1">5</option>
				  <option id="Prado" value="1">6</option>
                  <option id="Prado" value="1">7</option>
                  <option id="Prado" value="1">8</option>
                  <option id="Prado" value="1">9</option>
                  <option id="Prado" value="1">10</option>
				</select>
            </div>


            <div class="field">
			  <div class="label">Number of Double beds</div>
				<select id="car">
                  <option id="Subaru" value="1">1</option>
				  <option id="Toyota" value="1">2</option>
				  <option id="Honda" value="1">3</option>
				  <option id="Vitz" value="1">4</option>
                  <option id="Prado" value="1">5</option>
				  <option id="Prado" value="1">6</option>
                  <option id="Prado" value="1">7</option>
                  <option id="Prado" value="1">8</option>
                  <option id="Prado" value="1">9</option>
                  <option id="Prado" value="1">10</option>
				</select>
            </div>


            <div class="field">
			  <div class="label">Accomodation incase of emergencies?</div>
				<select id="car">
				  <option id="Subaru">Yes</option>
				  <option id="Toyota">No</option>
				  
				</select>
            </div>


            <div class="field">
			  <div class="label">Does the accomodation have a kitchen?</div>
				<select id="car">
				  <option id="Subaru">Yes</option>
				  <option id="Toyota">No</option>
				
				</select>
            </div>

            
            <div class="field">
			  <div class="label">Accessibility of the accomodation</div>
              
				<select id="car">
				  <option id="Subaru">Fully accessible for people with limited mobility</option>
				  <option id="Toyota">Not accessible for people with limited mobility</option>
				
				</select>
            </div>

            <div class="form-group">
              <label class="control-label">More info on accessibility <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" ></textarea>
            </div>



            <div class="field btns">
           
            </div>
          </div>


          <div class="page">
            <div class="title">Preferred Duration of Accomodation:</div>
			<div class="field">
                
				<div class="label"></div>
				<select id="car">
				  <option id="Subaru">Only emergencies</option>
				  <option id="Toyota">1 month</option>
				  <option id="Honda">1-3 months</option>
				  <option id="Vitz">3-6 months</option>
				  <option id="Prado">6 months or more</option>
				</select>
			  </div>
          
            <div class="field btns">
            
              <button class="submit" name="submit" onClick="getFormInput()">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</form>
    <script src="assets/js/script.js"></script>




<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


  </body>
</html>
<script>
  function getFormInput(){
    var firstname = document.getElementById('first_name').value


    document.getElementById('confirm').innerHTML =alert("Dear  " +first_name", Your application for house hosting has been received. You will soon receive feedback from us concerning the status of your application:)")
  
}

</script>
