<?php
    $db_host = 'db';        // database service name from docker-compose.yml
    $db_name = 'db_test';   // database name

    $db_user = 'LucasAgustinCamino';        // database user name
    $db_pass = 'lucascamino95@gmail.com';   // database user password
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    $db_connected = 0;

    if($conn->connect_error){
        #echo 'Mysql database connection <strong>failed</strong>' . $conn->connect_error;
    } else {
        #echo 'Mysql database connection <strong>succeeded</strong>';
        $db_connected = 1;
    }
?>