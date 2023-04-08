<?php
    include('./database.php');
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM users WHERE id = '$id'";
        $delete_query = $mysqli->query($query);
        if(!$delete_query){
            die("Query failed");
        }
        $_SESSION['message'] = 'user removed Successfully!';
        header("Location:  ../view_table.php");
    }
?>