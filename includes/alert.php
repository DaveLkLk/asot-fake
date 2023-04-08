<?php if(isset($_SESSION['message'])) { ?>
    <div id="form--alert" class="form--alert">
        <p><?= $_SESSION['message'] ?></p>
        <button id="close--alert">X</button>
    </div>
<?php session_unset(); } ?>