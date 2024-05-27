<?php include "db.php"; ?>

<?php include "function.php"; ?>

<?php Updatetable();?>

<?php include "includes/header.php";?>

    <h1>Pista Academy | PHP</h1>
    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Update</h1>
        <form action="form_update.php" method="POST">
                <div class="form-group mt-3">
                    <label for="username">Username</label>
                    <input type="text" autocomplete="off" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="password" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <select name="id" id="">
                        <?php 
                            showAllData();
                        ?>
                    </select>
                </div>
                <input type="submit" name="submit" value="Update" class="btn btn-primary  mt-3">
            </form>
        </div>
<?php include "includes/footer.php"; ?>


