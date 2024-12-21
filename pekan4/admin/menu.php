<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<?php
// Array assosiatif menu
$ar_menu = ['Home' => 'home.php','Produk' => 'produk.php','Profile' => 'profil.php','About' => 'about.php'];
?>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <?php foreach ($ar_menu as $menu => $m) { ?>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= $m ?>">
                    <?= $menu ?>
                </a>
                <?php } ?>
            </div>
        </div>