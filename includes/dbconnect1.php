<?php

$db = mysqli_connect("localhost","root","r00tPass","refapp");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>