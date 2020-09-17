<?php


session_start();
if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}

if(empty($_GET["postID"])){
    header("location:cases.php");
    
}else{
    
    



$postID  =$_GET["postID"];
      
          
        $cn = mysqli_connect("localhost" ,"root","","blood_donation");    
    mysqli_set_charset($cn,"utf8");
        $rslt = mysqli_query($cn , "select  blood_bank_name , address , blood_type, donation_location , description, progress from post where id = $postID");
  
    
            
  if($row = mysqli_fetch_row($rslt))
  {
      
      $bloodBankName =$row[0];
      $address =$row[1];
      $bloodType =$row[2];
      $city =$row[3];
      $description =$row[4];
      $progress =$row[5];
      
  }

  mysqli_close($cn);

$page_name = "cases";

include'header.php'; 
?>







<br />
<br />
<div class="container display-4" subTitleShadow>Request blood donation</div>
<br />
<br />
<br />
<br />




    <fieldset class="container border p-2" id="width50">
        <legend class="w-auto" id="legendEdit"> Submit your request here</legend>


        <form action="edit_post_action.php" method="POST">


                      


<div class="form-group">
    <label for="postID">ID:</label>
    <div class="astrex">*</div>
    <input type="number" class="form-control" id="postID" placeholder="Enter case ID" name="postID" value="<?php echo $postID ?>" required readonly>
</div>

      

            <div class="form-group">
                <label for="bloodType">Blood type:</label>
                <div class="astrex">*</div>
                <select class="form-control" id="bloodType" name="bloodType" required value="<?php echo $bloodType ?>">
                   <option><?php echo $bloodType ?></option>
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
                <textarea class="form-control" rows="4" id="description" name="description" placeholder="Case description"  required><?php echo $description ?></textarea>
            </div>
   
            <div class="form-group">
                <label for="progress">progress:</label>
                <div class="astrex">*</div>
                <input type="number" class="form-control" id="progress" placeholder="Enter case progress in percentage %" name="progress" min="0" max="100" required value="<?php echo $progress ?>" >
            </div>



            <button type="submit" class="btn btn-danger btn-block" id="submitButton">Submit</button>
            <br />
            <br />
        </form>
    </fieldset>
    
<br />
<br />
<br />

<?php
      
}
    ?>

<?php include'footer.php';  ?>
