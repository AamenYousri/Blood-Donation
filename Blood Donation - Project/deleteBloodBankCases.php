<?php
session_start();
if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}


$bloodBankCases  =$_POST["bloodBankCasesDelete"];

//var_dump($userEmail);

$qry = "delete from post where hospital_admin_id ='$bloodBankCases'";
 
$cn = mysqli_connect("localhost" ,"root","","blood_donation");    
        mysqli_set_charset($cn,"utf8");

$rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;
mysqli_close($cn);

header("location:Admin_cases.php");