<div class="row">
    <div class="col-md-9">
        <?php
        // TANGKAP REQUEST DI URL
        $hal = $_REQUEST['hal'];
        if (!empty($hal)) {
            include_once $hal . '.php';
        } else {
            include_once 'home.php';
        }
        ?>
    </div>