<?php
	
    $server="localhost"; 
    $user="root"; 
    $pass=""; 
    $db="cineteltrust"; 
    
	
	//$mysqli = mysqli_connect("localhost", "jxj0s9c797p0", "Abri.712123", "i4659011_ci1");
    // connect to mysql 
    $mysqli = mysqli_connect($server, $user, $pass, $db);
    mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
      
    // select the db 
      
    // mysqli_select_db($db) or die("Sorry, can't select the database."); 
	// 	date_default_timezone_set('Asia/Kolkata');
?>