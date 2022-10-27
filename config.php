<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    //$db_name = ""

    $mysqli = new mysqli($server_name, $username, $password);
    $mysqli->set_charset("utf8");

    if($mysqli->connect_error){
        die("資料庫連線錯誤" . $mysqli->connect_error);
    }else{
        return $link;
    }
?>
