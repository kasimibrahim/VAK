<?php
    $server = "DESKTOP-BLC3V80";
    $connection  = array(
        "Database"=>"vak_db",
        //"Authentication"=> SQLSRV_AUTH_ACTIVE_DIRECTORY_INTEGRATED
        "UID"=>"sa",
        "PWD"=>""
    );

    $conn = sqlsrv_connect($server, $connection);

    if ($conn){
        echo "Success";
    }else{
        echo "Not established";
        die(print_r(sqlsrv_errors(), true));
    }
?>