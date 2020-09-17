<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Donation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon" href="Media/blood.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="parsley.css">
    
    <script src="parsley.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    


</head>

<body>


    <div id="eshta">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark backForNav">
            <a class="navbar-brand" href="#">
                <img src="Media/blood.png" alt="logo" style="width:40px;">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="my-1 mx-2 close"><i class="fas fa-times closeNavToggler"></i></span>
                <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav" id="rightPos">

                    <li class="nav-item">
                        <a class="nav-link " href="index_register.php" >Home</a>
                    </li>



                    <li class="nav-item <?php if($page_name =="cases") echo 'active' ?>">
                        <a class="nav-link " href="Cases.php"> Cases</a>
                    </li>

                    <li class="nav-item dropdown <?php if($page_name =="donation") echo 'active' ?>">
                        <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown">
                            Donation
                        </a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item " href="Rules.php">Rules</a>
                            <a class="dropdown-item" href="Benefits.php">Benefits</a>
                        </div>
                    </li>





                    <li class="nav-item <?php if($page_name =="dashboard") echo 'active' ?>">
                       
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




                    <li class="nav-item rightForNav <?php if($page_name =="feedback") echo 'active' ?>">
                        <a class="nav-link " href="ContactUs.php">Feedback</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
    <br />
    <br />