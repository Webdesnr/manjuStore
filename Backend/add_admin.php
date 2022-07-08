<?php
    include './reusable_modules/header.php';
    include './db/add_admin_function.php';
?>


<div class="add-admin">
    <h1 class="title">Manju Store</h1>
    <?php
        if(isset($_SESSION['abort'])){
            echo $_SESSION['abort'];
        }
    ?>
    <form action="add_admin.php" method="post">
        <div class="wrapper">
            <div class="inputs">
                <input id="input" type="text" name="admin_id" required>
                <span class="placeholder">Admin Id</span>
            </div>
            <div class="inputs">
                <input id="input" type="text" name="admin_name" required>
                <span class="placeholder">Admin Name</span>
            </div>
            <div class="inputs">
                <input id="input" type="text" name="admin_role" required>
                <span class="placeholder">Admin Role</span>
            </div>
            <div class="inputs">
                <input id="input" type="text" name="admin_status" required>
                <span class="placeholder">Admin Status</span>
            </div>
            <div class="btns">
                <button class="cancel"><a href="./admin.php">CANCEL</a></button>
                <button class="submit" type="submit" name="submit">SUBMIT</button>
            </div>
        </div>
    </form>
</div>

<?php
    include './reusable_modules/footer.php';
?>