<?php

session_start();
$user = $_SESSION["user_info1"];

$password  = $_POST["password"];
$bloodBankName =$_POST["bloodBankName"];
$user_name =$_POST["user_name"];
$bloodBankCity =$_POST["bloodBankCity"];
$bloodBankAddress =$_POST["bloodBankAddress"];
$bloodBankEmail = $_POST["email"];



$qry = "insert into hospital_admin values ( null ,  '$bloodBankName' , '$user_name' ,'$bloodBankEmail' , '$password' , '$bloodBankAddress' , '$bloodBankCity' , default , default , default ,  ".$user['id'] ."  )";
 
$cn = mysqli_connect("localhost" ,"root","","blood_donation");    
        mysqli_set_charset($cn,"utf8");

$rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;
mysqli_close($cn);

header("location:Admin_bloodBanks.php");