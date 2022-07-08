<?php
    if(isset($_POST['login'])){
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        $sql_1 = "SELECT * FROM admin WHERE admin_name = '$user_name' AND admin_id = '$password'";
        $sql_2 = "UPDATE admin SET admin_status = 1 WHERE admin_id = '$password'";

        $res = $conn->query($sql_1);

        $count = mysqli_num_rows($res);

        $db_data = mysqli_fetch_assoc($res);

        if($count == 1){
            if($user_name == $db_data['admin_name'] && $password == $db_data['admin_id']){
                $user_id = $db_data['admin_id'];
                $_SESSION['user'] = $user_id;
                $conn->query($sql_2);
                header("location:" . SITEURL . "index.php");
            }else{
                header("location:" . SITEURL . "login.php");
            }
        }

    }
?>