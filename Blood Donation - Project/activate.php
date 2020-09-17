<?php

function hexToStr($hex)
{
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2)
    {
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}
/*
require_once("config.php");
if(!empty($_GET["id"]))
{
    $id = $_GET["id"];
    $qry ="update users set status=1 where id=$id and status=0";    
    
    $cn = mysqli_connect(HOST , USER_NAME , USER_PW , DB);
    $rslt = mysqli_query($cn , $qry);
    $rows = mysqli_affected_rows($cn);

    if ($rows==1)
    {
            header("location:index.php?msg=activated");
    }else{
        header("location:index.php?msg=not_activated");
    }
   

    mysqli_close($cn);
}*/
if(!empty($_GET["tocken"]))
{
    $tocken = $_GET["tocken"];
    $email = hexToStr( $tocken);
    echo $email;
    $qry ="update registered_user set status=1 where email='$email'";    
    

    $cn = mysqli_connect("localhost" ,"root","","blood_donation");    
         mysqli_set_charset($cn,"utf8");
    $rslt = mysqli_query($cn , $qry);
    $rows = mysqli_affected_rows($cn);

    if ($rows==1)
    {
            header("location:index_register.php?unique_msg=activated#registerHereForUser");
    }else{
        header("location:index_register.php?msg=not_activated");
    }
   

    mysqli_close($cn);
}
