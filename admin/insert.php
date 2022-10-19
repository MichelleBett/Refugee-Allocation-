<?php
include_once 'includes/dbconnect1.php';
if(isset($_POST['save']))
{	 
	  $refname =  $_POST['refname'];
        $refid = $_POST['refid'];
        $donorname =  $_POST['donorname'];
        $donorcon = $_POST['donorcon'];
        $address = $_POST['address'];
        $town = $_POST['town'];

	 $sql = "INSERT INTO houses (refname, refid, donorname, donorcon, address, town)
	 VALUES ('$refname','$refid','$donorname','$donorcon','$address','$town')";
	 if (mysqli_query($db, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 mysqli_close($db);
}
?>