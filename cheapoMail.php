<?php
    
    mysql_connect("0.0.0.0", "nomedeusuario");
    
    mysql_select_db("CHEAPOMAIL");
    
    
    $username = $_POST['Username']; 
    $password = $_POST['Password']; 
    
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    
    $sql = "SELECT * FROM $User WHERE username='$username' and password='$password'";
    $result = mysql_query($sql);
    
    // Mysql_num_row is counting table row
    $count = mysql_num_rows($result);
    
    // If result matched $username and $password, table row must be 1 row
    if($count==1){
    
    // Register $username, $password and redirect to file "login_success.php"
    session_register("username");
    session_register("password"); 
    header("location:login_success.php");
    }
    else {
    echo "Wrong Username or Password";
    }
?>
    
    




?>