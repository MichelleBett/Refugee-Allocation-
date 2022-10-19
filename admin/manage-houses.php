<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
     
    $phone=$_POST['phone'];
    $street_address=$_POST['street_address'];
    $town=$_POST['town'];
    $donor_name=$_POST['donor_name'];
    $refugee_name=$_POST['refugee_name'];
   
  

$sql="INSERT INTO tbl_houses(phone,street_address,town,donor_name,refugee_name) VALUES(:phone,:street_address,:town,:donor_name,:refugee_name)";
$query = $dbh->prepare($sql);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':street_address',$street_address,PDO::PARAM_STR);
$query->bindParam(':town',$town,PDO::PARAM_STR);
$query->bindParam(':donor_name',$donor_name,PDO::PARAM_STR);
$query->bindParam(':refugee_name',$refugee_name,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="House and Refugee posted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}


	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>RIZIKI | Manage Houses</title>
<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  

	<!-- Font awesome -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="assets/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="assets/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="assets/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="/assetscss/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style.less">


  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 20px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Manage Houses</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Manage Houses</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

<div class="panel-body">

<form method="post" class="form-horizontal" enctype="multipart/form-data">

<label class="col-sm-2 control-label">Select Address<span style="color:red">*</span></label>

<div class="col-sm-4">
<select class="selectpicker" name="street_address" required>
<option value=""> Select </option>
<?php $ret="select donor_id,street_address from tbl_donor";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->donor_id);?>"><?php echo htmlentities($result->street_address);?></option>
<?php }} ?>

</select>
</div>


<label class="col-sm-2 control-label">Select Refugee<span style="color:red">*</span></label>

<div class="col-sm-4">
<select class="selectpicker" name="refugee_name" required>
<option value=""> Select </option>
<?php $ret="select id,username from users";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->username);?></option>
<?php }} ?>

</select>
</div>
</div>

											
<div class="panel-body"></div>


<label class="col-sm-2 control-label">Select Donor<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="donor_name" required>
<option value=""> Select </option>
<?php $ret="select donor_id,fullname from tbl_donor";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->donor_id);?>"><?php echo htmlentities($result->fullname);?></option>
<?php }} ?>

</select>
</div>

<div class="panel-body">

<label class="col-sm-2 control-label">Select Accomodation Town<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="town" required>
<option value=""> Select </option>
<?php $ret="select donor_id,town from tbl_donor";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->donor_id);?>"><?php echo htmlentities($result->town);?></option>
<?php }} ?>

</select>
</div>


</div>


<div class="panel-body">

<label class="col-sm-2 control-label">Select Donors Contact<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="phone" required>
<option value=""> Select </option>
<?php $ret="select donor_id,phone from tbl_donor";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->donor_id);?>"><?php echo htmlentities($result->phone);?></option>
<?php }} ?>

</select>
</div>




</div>










<div class="hr-dashed"></div>									
</div>
</div>
</div>
</div>
							






											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/fileinput.js"></script>
	<script src="assets/js/chartData.js"></script>
	<script src="assets/js/main.js"></script>
    <script src="assets/js/main1.js"></script>
</body>
</html>
<?php } ?>