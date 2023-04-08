<?php
    $shortcut_icon = "./assets/asot-logo.png";
    $css_url1 = "./css/reset.css";
    $css_url2 = "./css/nav.css";
    $css_url3 = "./css/index.css";
    $css_url4 = "./css/alertList.css";
    $css_url5 = "./css/breakpoint_mobile.css";
    $head_title = "ASOT - HOME";
    $nav_text = "VIEW STATE USERS";
    $nav_url = "./view_table.php";
    include("./includes/head.php");
    include("./php/database.php");
?>

<body>
    <?php
        $nav_logo = "./assets/asot-logo.png";
        $button_img = "./assets/menu.png";
        include('./includes/nav.php');
    ?>

    <header class="header">
        <h1>AS PLAYED ON</h1>
        <picture>
            <img src="./assets/flechita.png" alt="icon">
        </picture>
    </header>

    <main>
        <h3>Armin Van Buuren Live Trance & Progressive Live DJ-Sets Compilation</h3>
        <div class="main--cards">
            <div class="main--card main--card1">
                <picture>
                    <img src="./assets/asot1.jpg" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card2">
                <picture>
                    <img src="./assets/asot2.jpg" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card3">
                <picture>
                    <img src="./assets/asot3.webp" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card4">
                <picture>
                    <img src="./assets/asot4.jpg" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card5">
                <picture>
                    <img src="./assets/asot5.webp" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card6">
                <picture>
                    <img src="./assets/asot6.webp" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card7">
                <picture>
                    <img src="./assets/asot7.jpg" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card8">
                <picture>
                    <img src="./assets/asot8.jpg" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card9">
                <picture>
                    <img src="./assets/asot9.webp" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card10">
                <picture>
                    <img src="./assets/asot10.jpg" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card11">
                <picture>
                    <img src="./assets/asot11.jpg" alt="icon-asot">
                </picture>
            </div>
            <div class="main--card main--card12">
                <picture>
                    <img src="./assets/armin1.webp" alt="icon-asot">
                </picture>
            </div>
        </div>
    </main>

    <div class="container--player">
        <div class="container--brand">
            <div class="brand--video">
                <video muted loop autoplay>
                    <source src="./assets/asot-850 _Re-cap.mp4" type="video/mp4">
                </video>
            </div>
            <div class="brand--context">
                <div class="brand--group br1">
                    <picture>
                        <img src="./assets/A-STATE-OF-TRANCE-LOGO-WHITE.png" alt="logo-asot">
                    </picture>
                    <h3>FESTIVAL</h3>
                </div>
                <div class="brand--group br2">
                    <h4>
                        <span>ALL ABOUT THE ASOT CELEBRATION WEEKEND</span>
                        <span>& OTHER ASOT EVENTS</span>
                    </h4>
                    <a href="#">ENTER FESTIVAL WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="container--form">

            <?php include('./includes/alert.php') ?>


            <form action="./php/form-validate.php" method="POST">
                <div class="form-group">
                    <label>Name: </label>
                    <input type="text" placeholder="name..." name="name" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Lastname: </label>
                    <input type="text" placeholder="lastname..." name="lastname" autocomplete="off" required>
                </div>
                <div class="form-group fg--dni">
                    <label>DNI: </label>
                    <input type="number" placeholder="12345678" name="dni" autocomplete="off" id="dni" minlength="8" required>
                    <p class="p--hidden">dni must be 8 digits</p>
                </div>
                <div class="form-group fg--dni">
                    <label>City: </label>
                    <input type="text" placeholder="city..." name="city" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="ENVIAR" class="btn-link" id="btn-submit">
                    <input type="reset" value="RESET" class="btn-link" id="btn-reset">
                </div>
            </form>
        </div>
    </div>

    <?php
        $script1 = './js/nav.js';
        $script2 = './js/index.js';
        $script3 = './js/limites.js';
        $script4 = './js/alertList.js';
        include("./includes/footer.php")
    ?>
    
</body>
</html>