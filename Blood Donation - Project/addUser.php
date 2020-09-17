<?php

$uE = $_POST["userEmail"];
$uB = $_POST["userBloodType"];
$uD = $_POST["userDays"];
$uC = $_POST["userCity"];


$qry = "insert into registered_user values (null, '$uE' ,'$uC', '$uB' , $uD, default, default   , default)"; 

$cn = mysqli_connect("localhost", "root","","blood_donation");  
mysqli_set_charset($cn,"utf8");



$rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;

        function strToHex($string)
        {
            $hex='';
            for ($i=0; $i < strlen($string); $i++)
            {
                $hex .= dechex(ord($string[$i]));
            }
            return $hex;
        }
        $hex_mail  =strToHex($uE);
        $body = "<h2>Welcome Donor</h2><hr>";
        $body.= "to activate your account please click <a href='http://localhost/project/activate.php?tocken=$hex_mail'> here </a>";
        $body.= "<br>Blood donation team";
        require_once("send_email.php");
        my_email(   $body , "info@bloodonation.com", "Blood donation team"  ,  $uE , "Donor" ,"activation link");


        if ( mysqli_errno($cn) == 1062) 
        {
               header("location:index_register.php?unique_msg=email#registerHereForUser");
            
        } 
else {
                   header("location:index_register.php?unique_msg=welcome#registerHereForUser");

}




mysqli_close($cn);


    ?>
