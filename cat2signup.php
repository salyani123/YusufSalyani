<?php
    session_start();
    include "cat2connect.php";
     
    $link = mysqli_connect("localhost", "root", "", "cat 2");
 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];

    $sql = mysqli_query($link, "SELECT * FROM users WHERE user_email = '$email'");
    if (mysqli_num_rows($sql)>0) {
        ?>
        <script language="Javascript">
            alert("Email address already in use!");
            document.location='cat2login.html';
        </script>
        <?php
    } else {
        $sql1 = mysqli_query($link, "SELECT * FROM users WHERE user_phone = '$phone'");
        if (mysqli_num_rows($sql1)>0) {
            ?>
            <script language="Javascript">
                alert("Phone already number already in use");
                document.location='cat2login.html';
            </script>
            <?php
        } else {
            $sql2 = mysqli_query($link, "SELECT * FROM users WHERE username = '$username'");
            if (mysqli_num_rows($sql2)>0) {
                ?>
                <script language="Javascript">
                    alert("Username already in use!");
                    document.location='cat2login.html';
                </script>
                <?php
            } else {
                if ($password != $password1) {
                    ?>
                    <script language="Javascript">
                        alert("Passwords do not match! Try again.");
                        document.location='cat2login.html';
                    </script>
                    <?php
                } else {
                    $store = mysqli_query($link, "INSERT INTO users(user_first_name, user_last_name, username, user_password, user_email, user_phone) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$phone')");
                    ?>
                    <script language="Javascript">
                        alert("Thank you for signing up! You can now login via the login page.");
                        document.location='cat2login.html';
                    </script>
                    <?php
                }
            }
        }
    }
    
?>