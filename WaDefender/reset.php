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
                    <form id="login_form" method="post">
                        <h3 class="text-center">Enter Your New Password</h3>
                        <label class="mt-3">Enter Password</label>
                        <input required type="text" class="form-control bg-white" name="password" id="password" placeholder="Enter Your Password">
                        <label class="mt-3">Re Enter Password</label>
                        <input required type="text" class="form-control bg-white" name="repassword" id="repassword" placeholder="Re Enter Your Password">
                        <button class="mt-3 btn bg-success form-control" type="submit" name="submit">Login</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $(document).on("submit", "#login_form", function(event) {
                event.preventDefault();
                var password = $("#password").val();
                var repassword = $("#repassword").val();
                var action = "reset";
                $.ajax({
                    url: "php/user_table.php",
                    method: "POST",
                    data: {
                        password: password,
                        repassword: repassword,
                        action: action
                    },
                    success: function(data) {
                        if (data == "not_match") {
                            alert("password and re password must be same");
                        } else {
                            alert("password change succesfilly");
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>

</body>

</html>