<?php
    include('./database.php');
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $dni = $_POST['dni'];
    $city = $_POST['city'];
    if (strlen($dni) < 8){
        echo '
        <script>
            window.location = "../index.php";
            alert("dni most be 8 digits");
        </script>
        ';
        exit();
    }

    $sql = "INSERT INTO users(name,lastname,dni,city)
            VALUES('$name','$lastname','$dni','$city');";
    $query = $mysqli->query("SELECT * FROM users WHERE dni='$dni'");
    $duplicado = $query->num_rows;

    if ($duplicado > 0){
        echo '
        <script>
            window.location = "../index.php";
            alert("DNI already exists");
        </script>
        ';
    }
    else{
        $save_data = $mysqli->query($sql);
        if($save_data==true){
            // echo '
            // <script>
            // alert("✔ Save Data");
            // </script>';
            $_SESSION['message'] = 'save user succesfully!';
            header("Location: ../index.php");
        }else{
            die($mysqli->error);
        }
    }

    $mysqli->close();
?>