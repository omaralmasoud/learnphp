<?php

    // Config Page
    $servername = 'localhost';
    $username = 'root';
    $pass = '';
    $database = 'database';
    $connectbd = mysqli_connect(
        $servername,
        $username,
        $pass,
        $database) or die(mysqli_connect_error());
        
        if(mysqli_connect_error())
        {
            echo 'فشل الاتصال بقواعد البيانات';
        }


 ?>