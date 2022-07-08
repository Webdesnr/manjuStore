<?php
    include './db_config.php';
    if(isset($_POST['login'])){
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];

        $sql_1 = "SELECT * FROM admin";

        $res = $conn->query($sql_1);

        $count = mysqli_num_rows($res);

        $db_data = mysqli_fetch_assoc($res);

        echo $user_name . $db_data['admin_name'] . $password .  $db_data['admin_id'];
        if($count > 1){
            if($user_name == $db_data['admin_name'] && $password == $db_data['admin_id']){
                header("location:" . SITEURL . "index.php");
            }else{
                header("location:" . SITEURL . "login.php");
            }
        }

    }

        
?>