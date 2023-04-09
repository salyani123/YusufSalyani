<?php

    session_start();
    include "cat2connect.php";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $userid = $_SESSION['user_id'];

    $link = mysqli_connect("localhost", "root", "", "cat 2");

    
    $store = mysqli_query($link, "UPDATE users SET user_first_name = '$fname', user_last_name = '$lname', user_email = '$email', user_phone = '$phone' WHERE user_ID = '$userid'");
    $_SESSION['user'] = $username;
    $_SESSION['firstname'] = $fname;
    $_SESSION['lastname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    ?>
    <script language="Javascript">
    alert("Information updated!");
    document.location='cat2home.php';
    </script>
    <?php       
?>