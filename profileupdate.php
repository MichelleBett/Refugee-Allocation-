<?php
 
 session_start();
 include "includes/dbconnect1.php"; 
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['user']['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $select= "select * from users where id='$id'";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set username='$username',email='$email',phone='$phone' where id='$id'";
       $sql2=mysqli_query($db,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:form.php');
       }
       else

       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>