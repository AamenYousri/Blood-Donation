<?php
session_start();
if(!empty($_POST["adminName"]) && !empty($_POST["adminPw"])) 
{
    $adminName = $_POST["adminName"];
    $pw = $_POST["adminPw"];

    $qry ="select * from administrator where Name='$adminName' and password='$pw'";
    
   
    $cn = mysqli_connect("localhost", "root", "", "blood_donation");
            mysqli_set_charset($cn,"utf8");

    $rslt1 = mysqli_query($cn , $qry);
    if($arr = mysqli_fetch_assoc($rslt1))
    {
       // var_dump($arr);
       $_SESSION["user_info1"] =$arr;
       header("location:Admin_cases.php");
    }else {
        header("location:adminstrator.php?msg=invalid_login");
    }  

    mysqli_close($cn);



}else {
    header("location:adminstrator.php?msg=missing_data");
}
