<?php
    include './db/db_config.php';
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['user'];
        $sql_1 = "UPDATE admin SET admin_status = 0 WHERE admin_id = '$user_id'";

        if($conn->query($sql_1)){
            session_destroy();
            header("location:" .SITEURL . "login.php");
        }
    }
    
?>