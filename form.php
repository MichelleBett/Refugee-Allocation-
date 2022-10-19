

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

<h1>Form</h1>

<form method="POST" action="form.php" enctype="multipart/form-data">

<br>

<label for="exampleInputEmail1" class="form-label">Upload Documents(Proof of Registration*\Asylum Seekers Pass\Movement Pass*)</label>
<input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="name of document"required aria-describedby="emailHelp"> <br><br>
File : <input type="file" name="file"><br><br>
<br/>

<br/>
<label for="name">Full Name</label><br> 
<input type="text" name="fullname" id="name" ><br><br>
<label for="country">Country of Origin</label><br> 
<input type="text" name="country" id="country" ><br><br>
<label for="stay">Place of stay</label><br>
<input type="text" name="camp" id="camp" ><br><br>
<label for="religion">Religion</label><br> 
<input type="text" name="religion" id="religion"><br><br>
<label for="time">Preferred time of stay</label><br> 
<input type="number" name="stay_in_months" id="month"><br><br>


<button type="submit" id="sign" name="submit">Apply</button>

</form>

</html>

<?php

include "includes/dbconnect.php"; 

if(isset($_POST['submit'])){
$fileName = $_POST['name'];
$fullname = $_POST['fullname'];
$country = $_POST['country'];
$camp = $_POST['camp'];
$religion = $_POST['religion'];
$stay_in_months = $_POST['stay_in_months'];

if($lastInsertId)
    {
    $msg="Application submitted successfully";
    }
    else 
    {
    $error="Something went wrong. Please try again";
    }

$name = $_FILES['file']['name'];
$targetDir = "upload/";
$targetFile = $targetDir.basename($_FILES['file']['name']);

$fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
$extensions_arr= array("jpg","jpeg","png","pdf");
if( in_array($fileType,$extensions_arr) ){

$query = " INSERT into `files` (`filename`,`fullname`,`country`,`camp`,`religion`,`stay_in_months`) 
values('$name', '$fullname', '$country', '$camp', '$religion', '$stay_in_months')";
mysqli_query($db,$query);

move_uploaded_file($_FILES['file']['tmp_name'],$targetDir.$name);
} else echo " wrong file type ";

}


?>

