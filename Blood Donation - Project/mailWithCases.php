<?php $page_name= "";

//require('header.php'); 
 
?>




<div class="container">
    <table id="cases" class="table table-striped table-bordered table-hover table-dark" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Location</th>
                <th>Blood type</th>
                <th>notification period</th>
                <th>last notification</th>
                <th>Created at</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
<?php       
          
        $cn = mysqli_connect("localhost" ,"root","","blood_donation");    
                    mysqli_set_charset($cn,"utf8");

        $rslt = mysqli_query($cn , "select  id , email , location , blood_type, notification_period, last_notification, created_at, status from registered_user where status=1");
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
                <td><?php echo $row[6]?></td>
                <td><?php echo $row[7]?></td>
            </tr>
<?php
        }
            
            
            
        $rslt1 = mysqli_query($cn , "select  id , email , location , blood_type, notification_period, last_notification, created_at, status from registered_user where status=1");
            
                    while($row1 = mysqli_fetch_array($rslt1)){
//                        var_dump($row1);
                        $time = $row1[4];
                        $current = round(strtotime(date('Y-m-d H:i:s'))/ (60 * 60 * 24));
                        $created = round(strtotime($row1[6])/ (60 * 60 * 24));
                        $id = $row1[0];
                        $email = $row1[1];
                        
                        $lastNotify = round(strtotime($row1[5])/ (60 * 60 * 24));
                        
//                        var_dump($time);
//                        var_dump($current);
//                        var_dump($created);
                        
                        $minus = $current - $created; 
                        
//                        var_dump($minus);
//                        var_dump($email);
                        
                        if($current - $created == $time ){
                            
                            header("location:sendCase.php?userID=$id&email=$email");
                           }

                    }
            
                   
                        var_dump($time);
                        var_dump($current);
                        var_dump($created);
                        var_dump($minus);
        mysqli_close($cn);
      
            
?></tbody>
    </table>
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
<br />
<br />
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