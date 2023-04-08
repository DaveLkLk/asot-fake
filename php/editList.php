<?php
    include('./database.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id='$id'";
        $query_result = $mysqli->query($query);

            if ($query_result->num_rows == 1){
                $row = $query_result->fetch_array();
                $nombre = $row[1];
                $apellido = $row[2];
                $dni = $row[3];
                $city = $row[4];
            }
    }

    if(isset($_POST['update_user'])){
        $id = $_GET['id'];
        $name_update = $_POST['name'];
        $lastname_update = $_POST['lastname'];
        $dni_update = $_POST['dni'];
        $city_update = $_POST['city'];

        $sql = "UPDATE users SET name='$name_update', lastname='$lastname_update', dni='$dni_update', city='$city_update' WHERE id='$id'";
        $mysqli->query($sql);

        $_SESSION['message'] = 'User Updated Successfully!';
        header("Location: ../view_table.php");
    }
?>
<?php
    $shortcut_icon = "../assets/asot-logo.png";
    $head_title = 'ASOT - HOME';
    $css_url1 = '../css/reset.css';
    $css_url2 = '../css/nav.css';
    $css_url3 = '../css/breakpoint_mobile.css';
    $css_url4 = '../css/view_table.css';
    $css_url5 = '../css/alertList.css';
    $nav_text = 'VOLVER';
    $nav_url = '../view_table.php';
    include('../includes/head.php');

    $nav_logo = "../assets/asot-logo.png";
    $button_img = "../assets/menu.png";
    include('../includes/nav.php');
?>

        <div class="update--form">
            <form action="editList.php?id=<?php echo $_GET['id']; ?>" method="POST" class="form_update">
                <div class="form__group">
                    <label for="">Name:</label>
                    <input autocomplete="ññ" type="text" name="name" value="<?php echo $nombre ?>" placeholder="update name" id="name">
                </div>
    
                <div class="form__group">
                    <label for="">Lastname:</label>
                    <input autocomplete="ññ" type="text" name="lastname" value="<?php echo $apellido ?>" id="lastname">
                </div>
    
                <div class="form__group">
                    <label for="">DNI:</label>
                    <input autocomplete="ññ" type="number" name="dni" value="<?php echo $dni ?>" id="dni">
                </div>
    
                <div class="form__group">
                    <label for="">City:</label>
                    <input autocomplete="ññ" type="text" name="city" value="<?php echo $city ?>" id="city">
                </div>
    
                <button name="update_user">Update user</button>
            </form>
        </div>

<?php
    $script1 = '../js/nav.js';
    $script2 = '../js/limites.js';
    include("../includes/footer.php");
    $mysqli->close();
?>