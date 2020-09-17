<?php 

$page_name = "cases";
session_start();
include'header.php'; 
?>



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
                <th>Blood bank name</th>
                <th>Blood type</th>
                <th>Description</th>
                <th>City</th>
                <th>Address</th>
                <th>Progress</th>
            </tr>
        </thead>
        <tbody>
            <?php       
          
        $cn = mysqli_connect("localhost" ,"root","","blood_donation");    
                    mysqli_set_charset($cn,"utf8");

        $rslt = mysqli_query($cn , "select  id , blood_bank_name , address , blood_type, donation_location , description, progress from post where progress != 100 ORDER BY id DESC;");
        while($row = mysqli_fetch_row($rslt))
        {
//          var_dump($row);
          ?>
            <tr>
                <td><?php echo $row[1]?></td>
                    <td><?php echo $row[3]?></td>
                    <td><?php echo $row[5]?></td>
                    <td><?php echo $row[4]?></td>
                    <td><?php echo $row[2]?></td>
                    
                    <td style="width:17%" ><div class="progress">
  <div class="progress-bar bg-danger progress-bar-striped" style="width:<?php echo $row[6] ?>%"><?php echo $row[6] ?>%</div>
</div></td>
 </tr >
            
                        <?php
        }
        mysqli_close($cn);
      ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Blood bank name</th>
                <th>Blood type</th>
                <th>Description</th>
                <th>City</th>
                <th>Address</th>
                <th>Progress</th>
            </tr>
        </tfoot>
    </table>
</div>






<br />
<br />
<br />
<br />




<?php include'footer.php';  ?>
