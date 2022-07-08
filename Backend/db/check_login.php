<?php
        include './db/db_config.php';
        if(!isset($_SESSION['user'])){
            header("location:" . SITEURL. "login.php");
        }
?>