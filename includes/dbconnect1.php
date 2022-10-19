<?php

$db = mysqli_connect("localhost","root","","refapp");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>