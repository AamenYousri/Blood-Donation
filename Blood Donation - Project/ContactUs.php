<?php 
session_start();
$page_name= "feedback";
$unique_msg_welcome="";

if(!empty($_GET["unique_msg"])){
    
          $unique_msg_welcome ="Done, thanks for your feedback!";
}

include'header.php'; 
?>


<div class="container display-1 bloodDTEXT bloodTextSM titleShadow">
    <p>Blood Donation</p>
</div>
<br />


<div class="container display-4 subTitleShadow">Feedback &amp; Suggestions</div>

<br />
<br />
    <p class="container alert alert-success" id="ifEmpty"><?php echo $unique_msg_welcome  ?></p>
<br />
<fieldset class="container border p-2" id="width50">
    <legend class="w-auto" id="legendEdit">Feedback</legend>



    <form action="add_feedback.php" method="POST" data-parsley-validate  onsubmit="return checkform(this);">



        <div class="form-group">
            <label for="caseName">Name:</label>
            <div class="astrex">*</div>
            <input type="text" class="form-control" id="caseName" placeholder="Enter your name" name="feedbackName" required data-parsley-length="[4, 30]">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <div class="astrex">*</div>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="feedbackEmail" required>
        </div>


  <div class="form-group">
            <label for="subject">Subject:</label>
            <div class="astrex">*</div>
            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
        </div>




        <hr />
        <div class="form-group">
            <label for="msg">Message: </label>
            <div class="astrex">*</div>
            <textarea class="form-control" rows="5" id="msg" name="msg" required placeholder="Start typing here..."></textarea>
        </div>
        <!-- START CAPTCHA -->
        <br>
        <div class="capbox" >

            <div id="CaptchaDiv"></div>

            <div class="capbox-inner">
                Type the above number:<br>

                <input type="hidden" id="txtCaptcha">
                <input type="number" name="CaptchaInput" id="CaptchaInput" size="15" onpaste="return false;" ><br>

            </div>
        </div>
        <br><br>
        <!-- END CAPTCHA -->


        <button type="submit" class="btn btn-danger btn-block" id="submit" name="submit">Submit</button>
        <br />
        <br />
    </form>
</fieldset>






<br />
<br />




<?php include'footer.php';  ?>
