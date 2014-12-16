<!--
THE UNIVERSITY OF THE WEST INDIES                 File Name: .../info2180project4-cheapo_mail/index.php
FACULTY OF SCIENCE & TECHNOLOGY                   Created by: 620064203
DEPARTMENT OF COMPUTING                           Created on: 01/12/2014
INFO2180 - Dynamic Web Development I
Project 4 - "Cheapo Mail"
-->



<!DOCTYPE html>
<html>
    <head>
        <title>CHEAPO MAIL</title>
        <link rel="stylesheet" href="cheapoMail.css" type="text/css" />
        <script type="text/javascript" src="login.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.2.0/prototype.js"></script>
        
    </head>
    
    <body id="content">
        
        <div id="banner2">cHEAPO <br />mAIL</div>
        
        <br /><br /><br /><br /><br /><br /><br />
        
        <p class="label" style="font-size:34px">SIGN IN</p>
        
        <form action = "cheapoMail_login.php" method="POST">
            <input id="input2" placeholder="username" type="text" name="Username" autofocus/>
            <input id="input2" type="password" placeholder="password" name="Password" autofocus/>
            <input class="submit_button" type="submit" value="LOGIN"/>
        </form>
        
    
    </body>
</html>