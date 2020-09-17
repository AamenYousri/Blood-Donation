<?php
session_start();
if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}


$bloodBankID  =$_GET["bloodBankID"];



$qry = "delete from hospital_admin where id =$bloodBankID";
 
$cn = mysqli_connect("localhost" ,"root","","blood_donation");    
        mysqli_set_charset($cn,"utf8");

$rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;
mysqli_close($cn);

header("location:Admin_bloodBanks.php");