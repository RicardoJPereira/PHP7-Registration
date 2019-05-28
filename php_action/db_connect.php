<?php
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "clients";

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    mysqli_set_charset($connect, "utf8");

    if (mysqli_connect_error()):
        echo "Connection fail". mysqli_connect_error();
    endif;
