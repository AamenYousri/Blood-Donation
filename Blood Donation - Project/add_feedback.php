<?php



$name = $_POST["feedbackName"];
$email = $_POST["feedbackEmail"];
$subject = $_POST["subject"];
$msg = $_POST["msg"];



$qry = "insert into inbox values ( null , '$name' , '$email' , '$subject' , '$msg' ,  default , default)";
 
$cn = mysqli_connect("localhost" ,"root","","blood_donation");    
        mysqli_set_charset($cn,"utf8");

$rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;
mysqli_close($cn);


header("location:ContactUs.php?unique_msg=done");