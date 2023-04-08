<?php
    include('./php/database.php');
    $shortcut_icon = "./assets/asot-logo.png";
    $head_title = 'ASOT - HOME';
    $css_url1 = './css/reset.css';
    $css_url2 = './css/nav.css';
    $css_url3 = './css/breakpoint_mobile.css';
    $css_url4 = './css/view_table.css';
    $css_url5 = './css/alertList.css';
    $nav_text = 'RETURN';
    $nav_url = './index.php';
    include('./includes/head.php');
    date_default_timezone_set("America/Lima")
?>
<body>
    <?php 
        $nav_logo = "./assets/asot-logo.png";
        $button_img = "./assets/menu.png";
        include('./includes/nav.php');
    ?>

    <div class="container--date">
        <h3>registered since -<?php echo date(" l d/m/y"); ?> </h3>
        <h3 id="reloj"></h3>
    </div>
    <div class="container--database">
        <div class="container--table">
            <table>
    
                <tr class="tr--alert">
                    <th colspan="6"><?php include('./includes/alert.php') ?></th>
                </tr>
                <tr>
                    <td class="td--title">ID</td>
                    <td class="td--title">Name</td>
                    <td class="td--title">Lastname</td>
                    <td class="td--title">DNI</td>
                    <td class="td--title">City</td>
                    <td class="td--title">Actions</td>
                </tr>
                <?php
                    $query_table = 'SELECT * FROM users';
                    $result_query = $mysqli->query($query_table);
    
                    while($show_data = $result_query->fetch_array()){
                        ?>
                <tr>
                    <td class="td--list"><?php echo $show_data['0'] ?></td>
                    <td class="td--list"><?php echo $show_data['1'] ?></td>
                    <td class="td--list"><?php echo $show_data['2'] ?></td>
                    <td class="td--list"><?php echo $show_data['3'] ?></td>
                    <td class="td--list"><?php echo $show_data['4'] ?></td>
                    <td class="td--list td--list-buttons">
                        <a href="./php/editList.php?id=<?php echo $show_data['id'] ?>" class="btn--edit">EDIT</a>
                        <a href="php/deleteList.php?id=<?php echo $show_data['id'] ?>" class="btn--delete">DELETE</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>

        
    </div>
    
<?php
    $script1 = './js/nav.js';
    $script2 = './js/tables.js';
    $script3 = './js/limites.js';
    $script4 = './js/alertList.js';
    include("./includes/footer.php");
    $mysqli->close();
?>
