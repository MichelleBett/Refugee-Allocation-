<!DOCTYPE html>
<html>
    <head>
</head>

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

                                    <div class="panel-body">
	<form method="post" action="insert.php" class="form-horizontal" enctype="multipart/form-data">
    <form action="insert.php" method="POST">
             
             <p>
                            <label for="Refugee">Refugee Name:</label>
                            <input type="text" name="refname" >
                         </p>
              
                          
             <p>
                            <label for="refugeeid">Refugee ID:</label>
                            <input type="number" name="refid" >
                         </p>
              
                          
             <p>
                            <label for="donor">Donor name:</label>
                            <input type="text" name="donorname">
                         </p>
              
                          
             <p>
                            <label for="donorcon">Donor Contact:</label>
                            <input type="number" name="donorcon" >
                         </p>
              
                          
             <p>
                           <label for="Address">Address:</label>
                            <input type="text" name="address" >
             
             <br/>
             <br/>
                            <label for="town">Town:</label>
                            <input type="text" name="town" >
             
             
                         </p>
              
                
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
  </body>
</html>