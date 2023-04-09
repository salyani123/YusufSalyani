<?php
    $Open = mysqli_connect("localhost","root","","cat 2");
    if (!$Open) {
        die ("Cannot connect to MySQL! <br>");
    } else {
        print ("Connected to Database <br>");
    }
?>