<?php
    
    $serverName = "0.0.0.0";
    $username = "nomedeusuario";

    // Create connection
    $conn = mysql_connect($serverName, $username);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysql_error());
    }
    echo "Connected successfully!" . "<br />";
    
    mysql_select_db("CHEAPOMAIL");
    
    
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    
    $sql = "SELECT * FROM User WHERE Username='$username' and Password='$password'";
    $result = mysql_query($conn, $sql);
    
    // Mysql_num_row is counting table row
    $count = mysql_num_rows($result);
    
    // If result matched $username and $password, table row must be 1 row
    if($count==1)
    {
    // Register $username, $password and redirect to file "login_success.php"
        $_SESSION["usrnm"] = $username;
        $_SESSION["pswrd"] = $password;
        
        header("location:login_success.php");
    }
    else 
    {
        echo "<br />" . "Wrong Username or Password";
    }
    
?>