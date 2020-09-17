<?php

session_start();
if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}
$bloodBankID  =$_GET["bloodBankID"];

    
  $cn = mysqli_connect("localhost" ,"root","","blood_donation");    
mysqli_set_charset($cn,"utf8");
        $rslt = mysqli_query($cn , "select id, hospital_name, email , password , address, city, block from hospital_admin where id = $bloodBankID");

 if($row = mysqli_fetch_row($rslt))
  {
      

$bloodBankID = $row[0];
$bloodBankName  =  $row[1];
$bloodBankEmail =  $row[2];
$bloodBankPassword =  $row[3];
$bloodBankAddress =  $row[4];
$bloodBankCity =  $row[5];
$bloodBankBlock =  $row[6];

  }




  mysqli_close($cn);
?>




<?php
$page_name="";
include'header.php'; 
?>



<div class="container display-1 bloodDTEXT bloodTextSM titleShadow">
    <p>Blood Donation</p>
</div>






<br />
<br />
<br />





<div class="container display-4 subTitleShadow">Cases</div>
<br />
<br />


<div class="container">
    <div class="row">










        <br />
        <br />
        <br />






        <div class="container">

            <form action="edit_bloodBank_action.php" method="POST">
                <div class="form-group">
                    <label for="bloodBankID">Blood bank ID:</label>
                    <input type="number" class="form-control" id="bloodBankID" name="bloodBankID" value="<?php echo $bloodBankID ?>" readonly>
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $bloodBankPassword ?>">
                </div>
                
                <div class="form-group">
                    <label for="bloodBankName">Blood bank name:</label>
                    <input type="text" class="form-control" id="bloodBankName" name="bloodBankName" value="<?php echo $bloodBankName ?>">
                </div>
                
                <div class="form-group">
                    <label for="bloodBankName">Blood bank email:</label>
                    <input type="text" class="form-control" id="bloodBankEmail" name="bloodBankEmail" value="<?php echo $bloodBankEmail ?>">
                </div>
                
                <label for="bloodBankCity">Blood bank city:</label>
                <select class="form-control" id="bloodBankCity" name="bloodBankCity" required >

                    <option><?php echo $bloodBankCity ?></option>
                    <option>Cairo</option>
                    <option>Alexandria</option>
                    <option>Ismailia</option>
                    <option>Qalyobeya</option>
                    <option>Aswan</option>
                    <option>Asyout</option>
                    <option>Luxor</option>
                    <option>Red Sea</option>
                    <option>Behira</option>
                    <option>Beni Swuif</option>
                    <option>Port Said</option>
                    <option>South Sinai</option>
                    <option>Giza</option>
                    <option>Daqahleya</option>
                    <option>Dumiat</option>
                    <option>Sohag</option>
                    <option>Suiz</option>
                    <option>Sharqeya</option>
                    <option>North Sinai</option>
                    <option>Gharbeya</option>
                    <option>Fayoum</option>
                    <option>Qena</option>
                    <option>Kafr El-Sheekh</option>
                    <option>Matrouh</option>
                    <option>Monofeia</option>
                    <option>Menia</option>
                    <option>Wadi Geded</option>
                </select>
                <br />
                <div class="form-group">
                    <label for="bloodBankAddress">Blood bank address:</label>
                    <input type="text" class="form-control" id="bloodBankAddress" name="bloodBankAddress" value="<?php echo $bloodBankAddress ?>">
                </div>

                <div class="form-group">
                    <label for="bloodBankAddress">Blood bank block:</label>
                    <input type="text" class="form-control" id="bloodBankBlock" name="bloodBankBlock" value="<?php echo $bloodBankBlock ?>">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>


    </div>


</div>

<br />
<br />
<br />

<br />
<br />
<br />

<br />
<br />
<br />



<?php include'footer.php';  ?>
