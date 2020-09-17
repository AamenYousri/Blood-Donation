<?php 

$page_name = "";
session_start();
$user = $_SESSION["user_info1"]; 

if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}

$userNameAdminstrator= $user["Name"];

include'header.php'; 
?>


  
<div class="container subTitleShadow ">
  <h4> Welcome &nbsp;<div class="welcomeColor d-inline-block wow animated zoomIn" data-wow-duration="1s" data-wow-delay="0s"><?php echo $userNameAdminstrator ?></div></h4>
    
</div>


<div class="container display-1 bloodDTEXT bloodTextSM titleShadow">
    <p>Blood Donation</p>
</div>
<br />

<br />






<br />
<br />
<div class="container display-4 subTitleShadow">Archived
<br />

</div>

<div class="container d-flex justify-content-end">
  <button onclick="location.href='delete_all.php'" type="button" class="btn btn-danger ">Delete all</button>

</div>

<div class="container">
    <table id="cases" class="table table-striped table-bordered table-hover table-dark" style="width:100%">
        <thead>
            <tr>
                <th>Message ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
                <th>Archive</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php       
          
        $cn = mysqli_connect("localhost" ,"root","","blood_donation");    
                    mysqli_set_charset($cn,"utf8");

        $rslt = mysqli_query($cn , "select  id , name , email , subject, msg , created_at from inbox where archived = 1 ");
        while($row = mysqli_fetch_row($rslt))
        {
//          var_dump($row);
          ?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[5]?></td>
                <td><a href="un_archive.php?postID=<?php echo $row[0]?>" class="fas fa-location-arrow editIcon"> Unarchive</a></td>
                <td><a href="delete_msg.php?postID=<?php echo $row[0]?>" class="fas fa-trash trashIcon"> Delete</a></td>
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

<div class="container buttonsForAdmins  d-flex justify-content-end">
<div class="btn-group">
  <button onclick="location.href='inbox.php'" type="button" class="btn btn-dark">Inbox</button>
  <button onclick="location.href='Admin_cases.php'" type="button" class="btn btn-success">Cases</button>
  <button onclick="location.href='Admin_bloodBanks.php'" type="button" class="btn btn-primary">Blood Banks</button>
  <button onclick="location.href='bloodbank_logout.php'" type="button" class="btn btn-danger">Logout</button>
</div>
</div>


<br />







<?php include'footer.php';  ?>
