<?php
    session_start();
    global $mysqli;

    $ssl = '/etc/ssl/certs/ca-certificates.crt';
    $server_name = 'aws.connect.psdb.cloud';
    $user_name = '2bapwwfi84jda7lm5xd7';
    $db_password = 'pscale_pw_8zW1odsx1gjsqAbW59RUOUIGynuFopzSe42uGE7yTgX';
    $db_name = 'asot-db';

    $mysqli = mysqli_init();
    // $mysqli = new mysqli();
    $mysqli->ssl_set(NULL, NULL, $ssl, NULL, NULL);
    $mysqli->real_connect($server_name, $user_name, $db_password, $db_name);
  
?>