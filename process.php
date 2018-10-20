<?php

include 'database.php' ;

// Check if form is submitted 

if(isset($_POST['submit'])){

$username = mysqli_real_escape_string($connection ,$_POST['username'] );
$message = mysqli_real_escape_string($connection ,$_POST['message'] );

// Set timezone 

date_default_timezone_set('Asia/Kolkata');
$time = date ('h:i:s a' , time()) ; }

// Validate input

if( !isset($username) || $username == '' || !isset($message) || $message == '' ){

$error = " username and message needed ";
    header("Location:index.php?error=".urlencode($error));
}


else
    
{
    $query = "INSERT INTO shouts (username , message , time)
    
      VALUES('$username','$message','$time')";
    
    if(!mysqli_query($connection , $query)) {
        
        die('Error'.mysqli_error($connection));
    }
    
    else{
        header("Location:index.php");
        exit();
        
    }
    
    
}


?>
