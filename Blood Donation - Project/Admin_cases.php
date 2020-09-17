<?php 

$page_name = "cases";
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
                <th>Hospital ID</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php       
          
        $cn = mysqli_connect("localhost" ,"root","","blood_donation");    
                    mysqli_set_charset($cn,"utf8");

        $rslt = mysqli_query($cn , "select  id , blood_bank_name , address , blood_type, donation_location , description, progress, created_at, updated_at , hospital_admin_id from post ORDER BY id DESC");
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
                <td><a href="edit_post.php?postID=<?php echo $row[0]?>" class="fas fa-edit editIcon">Edit</a></td>
                <td><a href="delete_post.php?postID=<?php echo $row[0]?>" class="fas fa-trash trashIcon">Delete</a></td>
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
<br />

<div class="container">

<hr />

<h2>Delete users</h2>

<form action="delete_userByEmail.php" method="POST">




        <div class="form-group d-inline-block">

            <input type="email" class="form-control" id="userEmailDelete" placeholder="User email" name="userEmailDelete" required>
        </div>



        <button type="submit" class="btn btn-danger d-inline-block submitPadding" id="submit" name="submit">Delete</button>
        <br />
        <br />
    </form>


<h2>Delete cases for blood bank</h2>

<form action="deleteBloodBankCases.php" method="POST">




        <div class="form-group d-inline-block">

            <input type="number" class="form-control" id="bloodBankCasesDelete" placeholder="Blood bank ID" name="bloodBankCasesDelete" required>
        </div>



        <button type="submit" class="btn btn-danger d-inline-block submitPadding" id="submit" name="submit">Delete</button>
        <br />
        <br />
    </form>

</div>

<br />
<br />

<div class="container buttonsForAdmins  d-flex justify-content-end">
<div class="btn-group">
  <button onclick="location.href='inbox.php'" type="button" class="btn btn-dark">Inbox</button>
  <button onclick="location.href='Admin_bloodBanks.php'" type="button" class="btn btn-primary">Blood Banks</button>
  <button onclick="location.href='bloodbank_logout.php'" type="button" class="btn btn-danger">Logout</button>
</div>
</div>


<br />







<?php include'footer.php';  ?>
