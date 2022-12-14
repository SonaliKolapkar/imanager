<?php
    $server="127.0.0.1:3308";
    $username="root";
    $password="";
    $database="imanager";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("Error". mysqli_connect_error());
    }