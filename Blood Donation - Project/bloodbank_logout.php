<?php
session_start();
session_destroy();
header("location:adminstrator.php");