<?php
    session_start();

    if (isset($_SESSION['admin_login'])) {
        header("location: admin/admin_home.php");
    }

    if (isset($_SESSION['employee_login'])) {
        header("location: employee/employee_home.php");
    }

    if (isset($_SESSION['user_login'])) {
        header("location: user/user_home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Login PHP & PDO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <div class="container">
    <h1 class="mt-3 text-center">Login Form</h1>
    <hr>
    <?php if(isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
                <h3>
                    <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                </h3>
            </div>
            <?php endif ?>

            <?php if(isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger">
                <h3>
                    <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                </h3>
            </div>
            <?php endif ?>
        <form action="login_db.php" method="post" class="form-horizontal  mt-5">
           <div class="form-group">
           <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-12">
                <input type="text" name="txt_email" class="form-control" placeholder="Enter Email..." require>
            </div>
           </div>

          <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-12">
                <input type="password" name="txt_password" class="form-control" placeholder="Enter Password..." require>
            </div>
          </div>

            <div class="form-group">
                <label for="type" class="col-sm-3 control-label">Select Type</label>
                <div class="col-sm-12">
                    <select name="txt_role" class="form-control">
                        <option value="" selected="selected">- Selected -</option>
                        <option value="admin">Admin</option>
                        <option value="employee">Employee</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12 mt-3">
                    <input type="submit" name="btn_login" class="btn btn-success" style="width: 100%;" value="Login">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12 mt-3 text-center">
                        You don't have a account register here? 
                        <p><a href="register.php">Register Account</a></p>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>