<?php
    session_start();
    include "cat2connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $link = mysqli_connect("localhost", "root", "", "cat 2");

    $sql = mysqli_query($link, "SELECT * FROM users WHERE username = '$username' AND user_password = '$password'");
    if (mysqli_num_rows($sql)==1) {
        $qry = mysqli_fetch_array($sql);
        $_SESSION['user_id'] = $qry['user_ID'];
        $_SESSION['user'] = $qry['username'];
        $_SESSION['password'] = $qry['user_password'];
        $_SESSION['firstname'] = $qry['user_first_name'];
        $_SESSION['lastname'] = $qry['user_last_name'];
        $_SESSION['email'] = $qry['user_email'];
        $_SESSION['phone'] = $qry['user_phone'];

        header("location:cat2home.php");
    } else {
        ?>
        <script language="Javascript">
            alert("Username or password incorrect. Please try again");
            document.location='home1.html'
        </script>
        <?php
    }
?>