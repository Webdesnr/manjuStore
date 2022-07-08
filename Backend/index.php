<?php
    include './reusable_modules/header.php';
    include './reusable_modules/navbar.php';
    // include './db/db_config.php';
?>
<div class="dashboard">
    <div class="dashboard-container">
        <div class="boxes">
            <div class="box">
                <h2 class="title">Admin</h2>
                <?php
                        $sql = "SELECT * FROM admin ";
                        $result = $conn->query($sql);
                        $noOfAdmins =  $result->num_rows;
                        echo "<p>{$noOfAdmins}</p>"
                    ?>
            </div>
            <div class="box">
                <h2 class="title">Staff's</h2>
                <p>02</p>
            </div>
            <div class="box">
                <h2 class="title">Stocks</h2>
                <p>02</p>
            </div>
            <div class="box">
                <h2 class="title">Orders</h2>
                <p>02</p>
            </div>
        </div>
    </div>
</div>

</div>
<?php
    include './reusable_modules/footer.php';
?>