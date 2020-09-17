<?php 
$unique_msg_email="";
$unique_msg_welcome="";
session_start();
if(!empty($_GET["unique_msg"])){
    
    
    if($_GET["unique_msg"] == "email")
    {
  $unique_msg_email ="* Email exists";
}
    
    if($_GET["unique_msg"] == "welcome")
    {
          $unique_msg_welcome ="Please activate your email";

    } 

    
    if($_GET["unique_msg"] == "activated")
    {
          $unique_msg_welcome ="Done, thanks for contributing!";

    } 
    
    

}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Donation</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="parsley.css">

    <script src="parsley.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon" href="Media/blood.png">
    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

    <div class="backgroundImage">
        <div id="eshta">
            <nav class="navbar navbar-expand-md navbar-dark backForSmallNav ">
                <a class="navbar-brand" href="#">
                    <img src="Media/blood.png" alt="logo" style="width:40px;">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="my-1 mx-2 close"><i class="fas fa-times closeNavToggler"></i></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav" id="rightPos">

                        <li class="nav-item">
                            <a class="nav-link  active underline" href="#" id="abyad1">Home</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link  " href="Cases.php" id="abyad2">Cases</a>
                        </li>




                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Donation
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="Rules.php">Rules</a>
                                <a class="dropdown-item" href="Benefits.php">Benefits</a>
                            </div>
                        </li>







                    <li class="nav-item active">
                       
                       <?php if (empty($_SESSION["user_info1"]) && empty($_SESSION["user_info"]) ){
                       echo '<a class="nav-link " href="Admin_login.php">Login</a>';
                       } 
                        elseif (!empty($_SESSION["user_info1"]) && isset($_SESSION["user_info1"])){ //adminstrator
                       echo '<a class="nav-link " href="Admin_cases.php">Dashboard</a>';     
                        }
                    
                        elseif (!empty($_SESSION["user_info"]) && isset($_SESSION["user_info"])){ //blood bank
                       echo '<a class="nav-link " href="RequestBlood.php">Dashboard</a>'; 
                        }
                ?>
                    
                        
                                </li>




                        <li class="nav-item rightForNav">
                            <a class="nav-link " href="ContactUs.php" id="abyad4"> Feedback</a>
                        </li>
                    </ul>
                </div>
            </nav>


        </div>


        <div class="container display-1 bloodDTEXT bloodTextSM titleShadow somePadding">
            <p>Blood Donation</p>
        </div>

        <div class="container display-4 bloodTextSM2 subTitleShadow">
            <p>Save a life, give <span class="bloodDTEXT ">Blood</span></p>
        </div>


        <div class="container-fluid twoIconsMargin">
            <div class="row d-flex justify-content-center">

                <div class=" col-6 col-md-4 col-lg-2 parent_ wow animated bounceInRight" data-wow-duration="2s" data-wow-delay="0s" id="upHere">
                    <a href="#whatWeDo"> <img src="Media/imgOne.png" alt="About us" class="imgSec subP_">
                        <p class="subP_2 ">About us</p>
                    </a> </div>

                <div class=" col-6 col-md-4 col-lg-2 parent_ wow animated bounceInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <a href="#registerNow"> <img src="Media/imgFive.png" alt="Register now" class="imgSec subP_">
                        <p class="subP_2">Register now</p>
                    </a> </div>

            </div>




        </div>
        <br />



        <br />
    </div>

    <br />





    <div class="modal animated fadeInDown" id="advertisement" data-wow-duration="5s">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body" style="">
                            <h2 id="blackColor">This is an advertisement</h2>
                            <img src="Media/Creativity.png" alt="Ads" class=" img-fluid">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="closeModal" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>










    <div class="container display-4 subHREF subTitleShadow" id="whatWeDo">About us
        <a href="#upHere">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <button type="button" class="btn btn-info" id="arabic">اللغة العربية</button>

    </div>


    <div class="container">
        <br />
        <br />
        <div class="firstAbout">
            <div class="row">
                <div class="col-md-7 col-sm-10">
                    <p>This website serves as intermediary between the donor and the blood bank that requests blood donation.</p>


                    <p> Where you can easily check the <a href="Cases.html" target="_blank" class="fontColor">cases</a> and you can filter the cases with your city &amp; blood type. </p>

                    <p>
                        The progress bar in the cases table indicates the amount of the collected blood for the case.
                    </p>


                    <p>
                        You may also check the donation <a href="Benefits.html" target="_blank" class="fontColor">benefits</a> and <a href="Rules.html" target="_blank" class="fontColor">rules</a>.
                    </p>
                </div>
                <br />
                <div class="col-8 col-md-5">
                    <img class="img-fluid centerImage wow animated pulse" data-wow-duration="2.5s" data-wow-delay="0.2s" data-wow-iteration="20" src="Media/anotherHalf%20copy.png" alt="What we do">
                </div>
            </div>
        </div>



        <div class="secondAbout">


            <div class="row">

                <div class="col-8 col-md-5">
                    <img class="img-fluid centerImage  animated pulse" data-wow-duration="5s" data-wow-delay="0.6s" data-wow-iteration="4" src="Media/anotherHalf%20copy.png" alt="What we do">

                </div>

                <div class="col-md-7 textArabicAlign">


                    <br />

                    <div class="container d-flex justify-content-start" dir="rtl" lang="ar">
                        <p>

                            الهدف من الموقع أن يكون وسيطًا بين المتبرع و بنك الدم الذي به الحالة التي تحتاج للتبرع بالدم.

                        </p>

                    </div>


                    <div class="container d-flex justify-content-start" dir="rtl">
                        <p>

                            و أنه يتيح للمتبرع فحص <a href="Cases.html" target="_blank" class="fontColor">الحالات</a> التي تحتاج التبرع و يمكنك البحث عن طريق فصيلة دمك و مدينتك.

                        </p>

                    </div>

                    <div class="container d-flex justify-content-start" dir="rtl">
                        <p>

                            في جدول الحالات يمكنك متابعة النسبة المئوية لكمية الدم التي تم التبرع بها.

                        </p>

                    </div>



                    <div class="container d-flex justify-content-start" dir="rtl">
                        <p>

                            و يمكنك ايضا معرفة <a href="Rules.html" target="_blank" class="fontColor">شروط</a> و <a href="Benefits.html" target="_blank" class="fontColor">فوائد</a> التبرع بالدم.
                        </p>
                    </div>
                </div>

            </div>
        </div>


        <br />
        <br />
        <br />


        <hr />
        <br />
        <video width="60%" controls class="video" id="vid" poster="Media/blood-donation.jpg">
            <source src="Media/Produce.mp4" type="video/mp4">
        </video>

        <br />
        <hr />


    </div>







    <br />
    <br />
    <br />




    <div class="container display-4 subHREF subTitleShadow" id="registerNow">Register

        <a href="#upHere">
            <i class="fas fa-angle-double-up"></i>
        </a>
    </div>

    <br />


    <div class="container">
        <br />
        <p>Register here if you want to get notifications to remind you of donating blood.</p>
    </div>




    <div class="signup-form container" id="registerHereForUser">
        <form method="post" action="addUser.php" data-parsley-validate onsubmit="return checkform(this);">
            <h2>Register</h2>
            <p class="hint-text">It's free and only takes a minute.</p>
            <p class="alert alert-success" id="ifEmpty"><?php echo $unique_msg_welcome  ?></p>

            <div class="form-group">
                <small style="color:red"> <?php echo $unique_msg_email  ?> </small>
                <input type="email" class="form-control" name="userEmail" placeholder="Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @example.com" required>
            </div>
            <div class="form-group">
                <select class="form-control" id="" required name="userBloodType">
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


            <select class="form-control" id="userCity" name="userCity" required>
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

            <div class="form-group">
                <label for="days">How long do you like to get notifications from us.</label>
                <input type="number" class="form-control" placeholder="100" name="userDays" required value="100" id="days" min="5" max="300">
            </div>


            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" id="checkkk" required> I accept the <a href="" data-toggle="modal" data-target="#termsUse">Terms of use &amp; Privacy policy</a></label>
            </div>

            <!-- START CAPTCHA -->
            <br>
            <div class="capbox">

                <div id="CaptchaDiv"></div>

                <div class="capbox-inner">
                    Type the above number:<br>

                    <input type="hidden" id="txtCaptcha">
                    <input type="text" name="CaptchaInput" id="CaptchaInput" size="15" onpaste="return false;"><br>

                </div>
            </div>
            <br><br>
            <!-- END CAPTCHA -->

            <div class="form-group">
                <button type="submit" class="btn btn-danger btn-lg btn-block">Register Now</button>
            </div>
        </form>

    </div>

    <br />

    <div class="modal fade" id="termsUse">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title blackText">Terms of use &amp; Privacy policy</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body  blackText">
                    <p>You agree that the email is yours and you're full responsible of it.</p>
                    <p>You accept to receive notifications at the period you choose.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="accept">Accept</button>
                </div>

            </div>
        </div>
    </div>


    <br />
    <br />
    <br />
    <div id="manualFooter" class="d-flex justify-content-center">
        <div>
            <span id="footerText" class="display-5">Designed and developed by MIS students &nbsp;</span>
            <i class="fab fa-facebook footerImg fa-2x"></i>
            <i class="fab fa-instagram footerImg fa-2x"></i>
        </div>

    </div>


    <br />





    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });




        //Advertisments
        setTimeout(function() {
            $('#advertisement').modal('show');
        }, 12000    );



        $('#arabic').click(function() {
            if ($('.firstAbout').css('display') === 'block') {
                $('.firstAbout').fadeOut(200);
                $('.secondAbout').fadeIn(2000);
                $('#arabic').text('English');
            } else {
                $('.firstAbout').fadeIn(2000);
                $('.secondAbout').fadeOut(300);
                $('#arabic').text('اللغة العربية');
            }
        });


        new WOW().init();


        $('#accept').click(function() {
            $('#checkkk').prop('checked', true);
        });




        // Captcha Script

        function checkform(theform) {
            var why = "";

            if (theform.CaptchaInput.value == "") {
                why += "- Please Enter CAPTCHA Code.\n";
            }
            if (theform.CaptchaInput.value != "") {
                if (ValidCaptcha(theform.CaptchaInput.value) == false) {
                    why += "- The CAPTCHA Code Does Not Match.\n";
                }
            }
            if (why != "") {
                alert(why);
                return false;
            }
        }

        var a = Math.ceil(Math.random() * 9) + '';
        var b = Math.ceil(Math.random() * 9) + '';
        var c = Math.ceil(Math.random() * 9) + '';
        var d = Math.ceil(Math.random() * 9) + '';
        var e = Math.ceil(Math.random() * 9) + '';

        var code = a + b + c + d + e;
        document.getElementById("txtCaptcha").value = code;
        document.getElementById("CaptchaDiv").innerHTML = code;

        // Validate input against the generated number
        function ValidCaptcha() {
            var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
            var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
            if (str1 == str2) {
                return true;
            } else {
                return false;
            }
        }

        // Remove the spaces from the entered and generated code
        function removeSpaces(string) {
            return string.split(' ').join('');
        }



        $('#ifEmpty:empty').hide();
        
        
        
    </script>


</body>

</html>
