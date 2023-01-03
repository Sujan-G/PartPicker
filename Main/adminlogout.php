<?php 
session_start();

session_unset();
session_destroy();

header("Location: adminlogoutpage.php?error=Logout Success");?>