<?php 

$page_name = "";
session_start();
$user = $_SESSION["user_info"]; 
$userNameHospital = $user["hospital_name"];


//    var_dump($user["id"]);
$adminIT = $user["id"];

if ($user["block"] == 1 ){
    
    session_destroy();
header("location:Admin_login.php");
}


if (empty($_SESSION["user_info"]))
{
    header("location:Admin_login.php?msg=login_first");
}
include'header.php'; 
?>




   
<div class="container subTitleShadow ">
  <h4> Welcome &nbsp;<div class="welcomeColor d-inline-block wow animated zoomIn" data-wow-duration="1s" data-wow-delay="0s"><?php echo $userNameHospital ?></div></h4>
    
</div>

<div class="container display-1 bloodDTEXT bloodTextSM titleShadow">
    <p>Blood Donation</p>
</div>
<br />

<br />






<br />
<br />
<div class="container display-4 subTitleShadow">Cases</div>
<br />
<br />
<br />
<br />





<div class="container">
    <table id="cases" class="table table-striped table-bordered table-hover table-dark" style="width:100%">
        <thead>
            <tr>
                <th>Post ID</th>
                <th>Blood bank name</th>
                <th>Blood type</th>
                <th>Description</th>
                <th>City</th>
                <th>Address</th>
                <th>Progress</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Blood bank ID</th>
                <th>Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php       
          
        $cn = mysqli_connect("localhost" ,"root","","blood_donation");   
        mysqli_set_charset($cn,"utf8");

        $rslt = mysqli_query($cn , "select  id , blood_bank_name , address , blood_type, donation_location , description, progress, created_at, updated_at , hospital_admin_id from post where progress != 100 && hospital_admin_id = $adminIT ");
        while($row = mysqli_fetch_row($rslt))
        {
//          var_dump($row);
          ?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[5]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[6] . "%" ?></td>
                <td><?php echo $row[7]?></td>
                <td><?php echo $row[8]?></td>
                <td><?php echo $row[9]?></td>
                <td><a href="edit_post_hospital.php?postID=<?php echo $row[0]?>&adminID=<?php echo $row[9]?>" class="fas fa-edit">edit</a></td>
            </tr>

            <?php
        }
        mysqli_close($cn);
      ?>
        </tbody>
        
    </table>
</div>








<br />
<br />



<div class="container buttonsForAdmins d-flex justify-content-end">
<div class="btn-group">
  <button onclick="location.href='RequestBlood.php'" type="button" class="btn btn-primary">Request blood</button>
  <button onclick="location.href='logout.php'" type="button" class="btn btn-danger">Logout</button>
</div>
</div>


<br />





<?php include'footer.php';  ?>
