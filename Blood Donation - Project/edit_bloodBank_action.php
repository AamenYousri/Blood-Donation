
<?php

session_start();
if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}

$bloodBankID  =$_POST["bloodBankID"];
$bloodBankPassword  = $_POST["password"];
$bloodBankName =$_POST["bloodBankName"];
$bloodBankCity =$_POST["bloodBankCity"];
$bloodBankAddress =$_POST["bloodBankAddress"];
$bloodBankEmail = $_POST["bloodBankEmail"];
$bloodBankBlock = $_POST["bloodBankBlock"];


$qry = "update hospital_admin set password='$bloodBankPassword', hospital_name='$bloodBankName', city='$bloodBankCity', address='$bloodBankAddress', block = '$bloodBankBlock', updated_at= now() where id = $bloodBankID";
 
$cn = mysqli_connect("localhost" ,"root","","blood_donation");    
mysqli_set_charset($cn,"utf8");
$rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;
mysqli_close($cn);

header("location:Admin_bloodBanks.php"); 

