<?php


include "includes/dbconnect1.php"; 



$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
$check_in = mysqli_real_escape_string($db, $_POST['check_in']);
$check_out = mysqli_real_escape_string($db, $_POST['check_out']);
 
$sql = "INSERT INTO trackstay (fullname, check_in, check_out) VALUES ('$fullname', '$check_in', '$check_out')";
 
if($db->query($sql) === TRUE){

    header('location: trackstay.php');
}
else
{
 echo "Error" . $sql . "<br/>" . $db->error;
}
$db->close();
?>