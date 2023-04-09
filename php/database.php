<?php
    session_start();
    global $mysqli;

    $ssl = '/etc/ssl/certs/ca-certificates.crt';
    $server_name = 'aws.connect.psdb.cloud';
    $user_name = '0xrgx2hmxtzreesxvm5b';
    $db_password = 'pscale_pw_r7THUk5BZQ077Bpt9E6z2oxOFKQZxUC7k0S8S83D3WQ';
    $db_name = 'asot-db';

    $mysqli = mysqli_init();
    $mysqli = new mysqli();
    $mysqli->ssl_set(NULL, NULL, $ssl, NULL, NULL);
    $mysqli->real_connect($server_name, $user_name, $db_password, $db_name);
  
?>