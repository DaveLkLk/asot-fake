<?php
    session_start();
    global $mysqli;
    
    $server_name = 'localhost';
    $user_name = 'root';
    $db_password = '';
    $db_name = 'db-asot';
    // $connect = mysqli_connect($server_name, $user_name, $db_password, $db_name);
    $mysqli = mysqli_init();
    $mysqli = new mysqli();
    $mysqli->real_connect($server_name, $user_name, $db_password, $db_name);
?>