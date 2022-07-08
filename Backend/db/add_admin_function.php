<?php
    
    if(isset($_POST['submit'])){
        include 'db_config.php';
        
        $id = $_POST['admin_id'];

        $sql1 = "SELECT id FROM admin ";
        $res = $conn->query($sql1);
        $db = mysqli_fetch_assoc($res);

        if($id != $db["id"]){
            $admin_id = "MS{$id}";
            $name = $_POST['admin_name'];
            $role = $_POST['admin_role'];
            $status = $_POST['admin_status'] == "persent" ? 1 : 0;
    
            $sql2 = "INSERT INTO admin
                    VALUES ({$id} , '{$admin_id}', '{$name}' , '{$role}' , {$status})";
    
            if($conn->query($sql2) === TRUE){
                $_SESSION['success'] = "<span class = 'success'>Admin Added!</span>";
                header("location:" . SITEURL . "admin.php");
            }else{
                $_SESSION['abort'] = "<span class = 'abort'>Adding Admin Failed!</span>";
                header("location:" . SITEURL . "admin.php");
            }
        }else{
            $_SESSION['abort'] = "<span class = 'abort' >Admin Already Exits!</span>";
        }


    }
    

?>