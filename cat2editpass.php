<?php
include "cat2connect.php";

session_start();

$newpass = $_POST['new_password'];
$newpass1 = $_POST['new_password1'];

$link = mysqli_connect("localhost", "root", "", "cat 2");

if ($newpass == $newpass1) {
    $store = mysqli_query($link, "UPDATE users SET user_password = '$newpass'");
    $_SESSION['password'] = $newpass;
    ?>
    <script language="Javascript">
    alert("Passwords changed!");
    document.location='cat2home.php';
    </script>
    <?php
} else {
    ?>
    <script language="Javascript">
    alert("Passwords do not match!");
    document.location='cat2editpass.html';
    </script>
    <?php
}


?>