<?php
   if(isset($_GET['id'])){
       include 'db_config.php';
        $id = $_GET['id'];
        $sql = "DELETE FROM admin WHERE id = {$id}";

        if($conn->query($sql)){
                $_SESSION['success'] = "<span class='success'>Record Deleted!</span>";
                header("location:" . SITEURL . "admin.php");
        }else{
                $_SESSION['abort'] =  "<span class='success'>Record Deleted!</span>";   
                header("location:" . SITEURL . "admin.php");
            }
   }

?>