<?php session_start(); ?>
<?php require_once __DIR__ . '/setup.php';  ?>
<?php

use Auth\Auth;

if (Auth::isLogin()) {
?>
<?php $ref = _query("ref"); ?>

<?php if ($ref == "api") {
        require_once _path('app') . 'api/api.php';
        exit;
    } ?>

<?php include_once './include/widget/header.php'  ?>
<?php
    if ($ref != "") {
        include_once './include/' . $ref . '.php';
    } else {
        include_once './include/home.php';
    }
?>
<?php include_once './include/widget/footer.php'  ?>
<?php  } else {
    include_once './include/Auth.php';
} ?>