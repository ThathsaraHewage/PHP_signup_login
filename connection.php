<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "auth";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname)){
        die("failed to connect!");
    }
?>