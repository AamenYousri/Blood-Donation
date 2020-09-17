<?php 
$page_name="";
$msg = "";

if(!empty($_GET["msg"]))
{
    if($_GET["msg"] == "missing_data")
    {
        $msg ="* Please Enter your email and password";
		}else if ( $_GET["msg"] =="invalid_login")
		{
			$msg ="Please Enter valid email or password";
		}else if ( $_GET["msg"] =="login_first")
		{
			$msg ="Please Enter your email and password";
		}
}
include'header.php'; ?> 


    <div class="container display-1 bloodDTEXT bloodTextSM titleShadow">
        <p>Blood Donation</p>
    </div>
    <br />


    <div class="container display-4 subTitleShadow">Adminstrator dashboard</div>

    <br />


    <div class="login-form">
        <form action="adminstrator_login.php" method="post" data-parsley-validate>
            <h2 class="text-center blackText2">Log in</h2>
                        <span style="color:red"><?php echo $msg?></span>          

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="required" name="adminName">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required name="adminPw">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger btn-block">Log in</button>
            </div>

        </form>

    </div>




    <br />
    <br />



    <br />
    <br />



<?php include'footer.php';  ?>