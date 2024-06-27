<?php
session_start();
require "php/connect.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WaDefender Admin Panel</title>
    <!--favicon-->
    <link rel="icon" href="admin/images/favicon.ico" type="image/x-icon" />
    <!-- Vector CSS -->
    <link href="admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="admin/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="admin/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="admin/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="admin/css/app-style.css" rel="stylesheet" />
</head>

<style>
    .row {
        display: flex;
        align-items: center;
        height: 100vh;
    }

    table td {
        vertical-align: middle !important;
    }
</style>

<body>

    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-white rounded p-4">
                    <form id="login_form" method="post" action="index.php">
                        <h3 class="text-center">Login Form</h3>
                        <label class="mt-3">Username</label>
                        <input required type="text" class="form-control bg-white" name="username" id="username">
                        <label class="mt-3">Password</label>
                        <input required type="text" class="form-control bg-white" name="password" id="password">
                        <button class="mt-3 btn bg-success form-control" type="submit" name="submit">Login</button>
                    </form>
                    <a style="text-decoration: underline" href="forgot_page.php" class="text-center d-block mt-2 text-decoration-underline">Click Here If You are Forgot your password?</a>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $u_name = mysqli_real_escape_string($conn, $_POST['username']);
    $u_pass = mysqli_real_escape_string($conn, $_POST['password']);

    $encrypt = md5($u_pass);

    $login_query = "select * from user_table where username='$u_name' AND password='$u_pass'";

    $run = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_array($run)) {
            $user_id = $row["id"];
            $user_name = $row["username"];

            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $user_name;

            echo "<script>window.open('admin.php','_self')</script>";
        }
    } else {
        // echo "<script>alert('User name Password is incorrect or User are Inactive')</script>";
        echo "<script>alert('Wrong Credentials')</script>";
    }
}

?>