<?php
session_start();
if(!empty($_POST["hospitalName"]) && !empty($_POST["hospitalPw"])) 
{
    $userName = $_POST["hospitalName"];
    $pw = $_POST["hospitalPw"];

    $qry ="select * from hospital_admin where user_name='$userName' and password='$pw' and block=0";
    
   
    $cn = mysqli_connect("localhost", "root", "", "blood_donation");
    mysqli_set_charset($cn,"utf8");
    $rslt = mysqli_query($cn , $qry);
    if($arr = mysqli_fetch_assoc($rslt))
    {
       // var_dump($arr);
       $_SESSION["user_info"] =$arr;
       header("location:RequestBlood.php");
    }else {
        header("location:Admin_login.php?msg=invalid_login");
    }  

    mysqli_close($cn);



}else {
    header("location:Admin_login.php?msg=missing_data");
}
