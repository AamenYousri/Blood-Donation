<?php
$page_name="";

session_start();
$user = $_SESSION["user_info"]; 

//var_dump($user);

if ($user["block"] == 1 ){
    
    session_destroy();
header("location:Admin_login.php");
}

$userNameHospital = $user["hospital_name"];


if (empty($_SESSION["user_info"]))
{
    header("location:Admin_login.php?msg=login_first");
}
include'header.php'; 
?> 

   
   
   
   
   
    
<div class="container subTitleShadow ">
  <h4> Welcome &nbsp;<div class="welcomeColor d-inline-block wow animated zoomIn" data-wow-duration="1s" data-wow-delay="0s"><?php echo $userNameHospital ?></div></h4>
    
</div>
 
     <br />
    <div class="container display-1 bloodDTEXT bloodTextSM titleShadow">
        <p>Blood Donation</p>
    </div>
    <br />
     <br />
    <div class="container display-4 subTitleShadow" >Request blood donation</div>
    <br />
    <br />
    <br />
    <br />






   



    <fieldset class="container border p-2" id="width50">
        <legend class="w-auto" id="legendEdit"> Submit your request here</legend>


        <form action="add_posts.php" method="POST"  data-parsley-validate>


                      
      

            <div class="form-group">
                <label for="bloodType">Blood type:</label>
                <div class="astrex">*</div>
                <select class="form-control" id="bloodType" name="bloodType" required>
                    <option disabled selected hidden>Select blood type</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                </select>
            </div>


            <div class="form-group">
                <label for="description"> Description</label>
                <textarea class="form-control" rows="4" id="description" name="description" placeholder="Case description" maxlength="80" required></textarea>
            </div>
   
            <div class="form-group">
                <label for="progress">Progress:</label>
                <div class="astrex">*</div>
                <input type="number" class="form-control" id="progress" placeholder="Enter case progress in percentage %" name="progress" min="0" max="100" required>
            </div>



            <button type="submit" class="btn btn-danger btn-block" id="submitButton">Submit</button>
            <br />
            <br />
        </form>
    </fieldset>
    <br />
    <br />
    
    
    
    
      
   <div class="container buttonsForAdmins d-flex justify-content-end">
<div class="btn-group">
  <button onclick="location.href='Hospital_cases.php'" type="button" class="btn btn-primary">Cases</button>
  <button onclick="location.href='logout.php'" type="button" class="btn btn-danger">Logout</button>
</div>
</div>

   
    <br />


<?php include'footer.php'; ?>
