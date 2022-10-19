
<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from tblbrands  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Page data updated  successfully";

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
<title>RIZIKI</title>

<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet"  href="assets/css/slick.css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/main1.css" type="text/css">
<link rel="stylesheet" href="assets/css/main.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<link href="assets/css/styling2.css" rel="stylesheet">
<link href="assets/css/style1.css" rel="stylesheet">
<link href="assets/css/style1.css" rel="stylesheet">


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



</head>
<body>




<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Refugees Allocated Houses</h1>
      </div>

    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Registered Donors</div>
							<div class="panel-body">

              
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
										<th>Refugee Name</th>
										<th>Refugee ID </th>
										<th>Donor Name</th>
                                        <th>Donor Contact</th>
                                        <th>Address</th>
                                        <th>Town</th>

										
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
                                        
										<th>Refugee Name</th>
										<th>Refugee ID </th>
										<th>Donor Name</th>
                                        <th>Donor Contact</th>
                                        <th>Address</th>
                                        <th>Town</th>

										</tr>
										</tr>
									</tfoot>
									<tbody>

									<?php $sql = "SELECT * from  houses ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->refname);?></td>
											<td><?php echo htmlentities($result->refid);?></td>
											<td><?php echo htmlentities($result->donorname);?></td>
                                            <td><?php echo htmlentities($result->donorcon);?></td>
                                            <td><?php echo htmlentities($result->address);?></td>
                                            <td><?php echo htmlentities($result->town);?></td>

										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
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
