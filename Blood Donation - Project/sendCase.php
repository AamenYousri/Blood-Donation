<?php 

$userID = $_GET["userID"];
$uE =  $_GET["email"];
var_dump($userID);
var_dump($uE);

//echo mysqli_error($cn);
//echo $rslt;



//
//       
//        $rslt1 = mysqli_query($cn , "select  ID , email from registered_user where ID=$userID");
//            
//                    while($row1 = mysqli_fetch_array($rslt1)){
//                        var_dump($row1);
////                        $email = $row1[1];
//                      
//        var_dump($email);
//                        
//                        
//                    }





 $body = "<h2>Welcome Donor</h2><hr>";
        $body.= "Some urgent cases needs blood donation, please check the cases from this <a href='http://localhost/project/Cases.php'> link </a>";
        $body.= "<br>Blood donation team";
        require_once("send_email.php");
        my_email(   $body , "info@bloodonation.com", "Blood donation team"  ,  $uE , "Donor" ,"Case");



$qry = "update registered_user set  created_at= now()  where id = $userID";
 

$cn = mysqli_connect("localhost" ,"root","","blood_donation");    
mysqli_set_charset($cn,"utf8");
$rslt = mysqli_query($cn , $qry);
mysqli_close($cn);


header("location:mailWithCases.php");




?>
