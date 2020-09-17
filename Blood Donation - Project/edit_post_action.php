<?php

session_start();
if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}

$postID = $_POST["postID"];
$progress =$_POST["progress"];
$bloodType =$_POST["bloodType"];
$description =$_POST["description"];



$qry = "update post set  blood_type='$bloodType' , description='$description', progress='$progress', updated_at= now() where id = $postID";
 

$cn = mysqli_connect("localhost" ,"root","","blood_donation");    
mysqli_set_charset($cn,"utf8");
$rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;
mysqli_close($cn);

header("location:Admin_cases.php");