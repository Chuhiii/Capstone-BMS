<?php 
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $dbName = "trydb";

    $conn = mysqli_connect($sname, $uname, $password, $dbName);

    if (!$conn) {
        echo "Connection failed";
    }
?>