<?php 

$page_name = "";
session_start();
$user = $_SESSION["user_info1"]; 
$userNameAdminstrator= $user["Name"];

if (empty($_SESSION["user_info1"]))
{
    header("location:adminstrator.php?msg=login_first");
}
include'header.php'; 
?>



<div class="container subTitleShadow ">
    <h4> Welcome &nbsp;<div class="welcomeColor d-inline-block wow animated zoomIn" data-wow-duration="1s" data-wow-delay="0s"><?php echo $userNameAdminstrator ?></div>
    </h4>

</div>

<div class="container display-1 bloodDTEXT bloodTextSM titleShadow">
    <p>Blood Donation</p>
</div>






<br />
<br />
<br />





<div class="container display-4 subTitleShadow">Blood banks</div>
<br />
<br />


<div class="container">
    <div class="row">




        <div class="container d-flex justify-content-end ">
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalOne" style="margin-bottom: 10px;">Add blood bank account</button>
            </div>
        </div>


        <table id="" class="table table-dark table-striped table-hover table-responsive-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Block</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Admin ID</th>
                    <th>Edit</th>
                    <th>Delete</th>


                </tr>
            </thead>

            <tbody>
                <?php       
          
        $cn = mysqli_connect("localhost" ,"root","","blood_donation");  
                            mysqli_set_charset($cn,"utf8");

        $rslt = mysqli_query($cn , "select id, hospital_name, email , password , address, city, block, created_at, updated_at , administrator_id , user_name from hospital_admin");
        while($row = mysqli_fetch_row($rslt))
        { 
            ?>
                <tr>
                    <td><?php echo $row[0]?></td>
                    <td><?php echo $row[10]?></td>
                    <td><?php echo $row[1]?></td>
                    <td><?php echo $row[2]?></td>
                    <td><?php echo $row[3]?></td>
                    <td><?php echo $row[4]?></td>
                    <td><?php echo $row[5]?></td>
                    <td><?php echo $row[6]?></td>
                    <td><?php echo $row[7]?></td>
                    <td><?php echo $row[8]?></td>
                    <td><?php echo $row[9]?></td>
                    <td>
                        <a href="edit_bloodBank.php?bloodBankID=<?php echo $row[0]?>"><i class="fas fa-edit editIcon">Edit</i></a>
                    </td>
                    <td>
                        <a href="delete_bloodBank.php?bloodBankID=<?php echo $row[0]?>"><i class="fas fa-edit trashIcon">Delete</i></a>
                    </td>

                    <?php
        }
        mysqli_close($cn);
      ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>










<br />
<br />
<br />








<div class="modal fade" id="modalOne">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title blackText">Add blood bank account</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body  blackText">
                <form action="add_bloodBank.php" method="POST" data-parsley-validate>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="bloodBankName">Blood bank name:</label>
                        <input type="text" class="form-control" id="bloodBankName" name="bloodBankName" required>
                    </div>

                    <div class="form-group">
                        <label for="user_name">Blood bank user name:</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" required>
                    </div>
                    <label for="bloodBankCity">Blood bank city:</label>
                    <select class="form-control" id="bloodBankCity" name="bloodBankCity" required>
                        <option disabled selected hidden>Choose city</option>
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
                        <input type="text" class="form-control" id="bloodBankAddress" name="bloodBankAddress" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>



<br />
<br />
<br />


<div class="container buttonsForAdmins d-flex justify-content-end">
    <div class="btn-group">
        <button onclick="location.href='inbox.php'" type="button" class="btn btn-dark">Inbox</button>
        <button onclick="location.href='Admin_cases.php'" type="button" class="btn btn-primary">Cases</button>
        <button onclick="location.href='bloodbank_logout.php'" type="button" class="btn btn-danger">Logout</button>
    </div>
</div>

<br />



<?php include'footer.php';  ?>
