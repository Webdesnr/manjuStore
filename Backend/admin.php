<?php
    include './db/db_config.php';
    include './reusable_modules/header.php';
    include './reusable_modules/navbar.php';
    include './db/add_admin_function.php';
?>

<div class="admin">
    <h1 class="title">Admin Panel </h1>
    <div class="admin-button">
        <?php
            if(isset($_SESSION['success'])){
                echo $_SESSION['success'];
            }
            if(isset($_SESSION['abort'])){
                echo $_SESSION['abort'];
            }
        ?>
        <button class="add-admin"><a href="./add_admin.php">Add Admin</a></button>
    </div>
    <div class="admin-wrapper">
        <table>
            <tr>
                <th>S.No</th>
                <th>Id</th>
                <th>Admin Name</th>
                <th>Role</th>
                <th>Status</th>
                <th>Edit</th>
            </tr>
            <?php
                    $sql = "SELECT * FROM admin";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        $sno = 0;
                        while($row = $result->fetch_assoc()){
                            $sno++;
                            $admin_status = $row['admin_status'] == 1 ? 'persent' : 'absent';
                                echo "<tr>
                                <td>{$sno}</td>
                                <td>{$row['admin_id']}</td>
                                <td>{$row['admin_name']}</td>
                                <td>{$row['admin_role']}</td>
                                <td>{$admin_status}</td>
                                <td>
                                    <button class='modify-btn'><a href = 'admin.php?id={$row['id']}'>Modify</a></button>
                                    <button class='delete-btn' ><a  href = 'db/delete_admin.php?id={$row['id']}'>Delete</a></button>
                                </td>
                            </tr>";
                        }

                    }
                    // $conn->close();
                ?>

        </table>
    </div>
</div>

<?php
    include './db/delete_admin.php';
    include './reusable_modules/footer.php';
?>