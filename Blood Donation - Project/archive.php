<?php
session_start();

if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}

if(empty($_GET["postID"])){
    header("location:inbox.php");
    
}else{
    
    



$postID  =$_GET["postID"];
      
$qry = "update inbox set archived= 1  where id = $postID";
          
        $cn = mysqli_connect("localhost" ,"root","","blood_donation");    
    mysqli_set_charset($cn,"utf8");
    
    
    
    $rslt = mysqli_query($cn , $qry);
//echo mysqli_error($cn);
//echo $rslt;
mysqli_close($cn);



    
    
      
}
    header("location:inbox.php");

    ?>

