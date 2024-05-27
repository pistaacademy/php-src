<?php include "db.php"; ?>

<?php include "function.php"; ?>
<?php createRow();?>

<?php include "includes/header.php";?>

    <h1>Pista Academy | PHP</h1>
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Create</h1>
            <form action="index.php" method="POST">
                <div class="form-group mt-3">
                    <label for="username">Username</label>
                    <input type="text" autocomplete="off" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="password" class="form-control">
                </div>
                <input type="submit" name="submit" value="Create" class="btn btn-primary  mt-3">
            </form>
        </div>

<?php include "includes/footer.php"; ?>


