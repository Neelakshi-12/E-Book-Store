<?php

include("dbcontact.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$body=$_REQUEST['body'];

$query=mysqli_query($db_connect,"INSERT INTO user (name, email, subject, body) VALUES ('$name','$email','$subject','$body')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:contactus.php?note=success");

?> 