<?php 


session_start();
include('includes/dbconnect.php');
error_reporting(0);



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


<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>


<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  method="post" name="submit" onSubmit="return valid();" action="index.php">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Full Name" required="required">
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control" name="mobileno" placeholder="Mobile Number" maxlength="10" required="required">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>