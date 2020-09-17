<?php
session_start();
$user = $_SESSION["user_info"];

    


$progress =$_POST["progress"];
$bloodType =$_POST["bloodType"];
$description =$_POST["description"];




$qry = "insert into post values ( null ,  ". $user['id'] .", '". $user['hospital_name'] ."' , '". $user['address'] ."' , '$bloodType' , '" .  $user['city'] ."' , '$description' , '$progress' ,  default , default , default )";
 
$cn = mysqli_connect("localhost" ,"root","","blood_donation");    
        mysqli_set_charset($cn,"utf8");

$rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;
mysqli_close($cn);


header("location:Hospital_cases.php");