<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Information</title>
        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }
            h1 {
                text-align: center;
            }
            .user-info {
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #fff;
                padding: 20px;
                margin: 20px auto;
                max-width: 500px;
            }
            .user-info h2 {
                font-size: 20px;
                margin-top: 0;
            }
            .user-info p {
                font-size: 16px;
                margin-bottom: 10px;
            }
            div.links {
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #fff;
                padding: 20px;
                margin: 20px auto;
                max-width: 500px;
            } 
    </style>
    </head>
    <body>
        <h1>User Information</h1>
        <div class="user-info">
            <p><strong>First Name: </strong> <?=$_SESSION['firstname']?> </p>
            <p><strong>Last Name: </strong> <?=$_SESSION['lastname']?> </p>
            <p><strong>Username: </strong> <?=$_SESSION['user']?> </p>
            <p><strong>Email: </strong> <?=$_SESSION['email']?> </p>
            <p><strong>Phone: </strong> <?=$_SESSION['phone']?> </p>
        </div>
        <div class="links">
            <center>
                <a href="cat2edit.php">Edit profile</a>&nbsp; 
                <a href="cat2editpass.html">Change password</a>&nbsp;
                <a href="cat2delete.php">Delete account</a>&nbsp;
                <a href="cat2logout.php">Log out</a>
            </center>
        </div>
    </body>
</html>
