<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "cat 2");

$userid = $_SESSION['user_id'];

$delete = mysqli_query($link, "DELETE FROM users where user_ID = '$userid'");

unset($_SESSION['user_id']);
unset($_SESSION['user']);
unset($_SESSION['password']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
session_destroy();

?>
    <script language="Javascript">
    alert("Account deleted!");
    document.location='cat2login.html';
    </script>
    <?php
?>