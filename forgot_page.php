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
                        <h3 class="text-center">Forgot Your Password</h3>
                        <label class="mt-3">Email</label>
                        <input required type="email" class="form-control bg-white" name="email" id="email" placeholder="Enter Your Email">
                        <button class="mt-3 btn bg-success form-control" type="submit" name="submit">Login</button>
                    </form>
                    <!-- <form action="send.php" method="post">
                        <h3 class="text-center">Forgot Your Password</h3>
                        <label class="mt-3">Email</label>
                        <input required type="email" class="form-control bg-white" name="email" id="email" placeholder="Enter Your Email">
                        <label class="mt-3">subject</label>
                        <input required type="text" class="form-control bg-white" name="subject" id="subject" placeholder="Enter Your Subject">
                        <label class="mt-3">message</label>
                        <input required type="text" class="form-control bg-white" name="message" id="message" placeholder="Enter Your Message">
                        <button class="mt-3 btn bg-success form-control" type="submit" name="submit">Login</button>
                    </form> -->
                    <a style="text-decoration: underline" href="index.php" class="text-center d-block mt-2 text-decoration-underline">Back To Login Page</a>
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
                var email = $("#email").val();
                var action = "check_email";
                $.ajax({
                    url: "php/user_table.php",
                    method: "POST",
                    data: {
                        email: email,
                        action: action
                    },
                    success: function(data) {
                        if (data == "match") {
                            window.location.href = "reset.php";
                        } else {
                            alert("email not matched");
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