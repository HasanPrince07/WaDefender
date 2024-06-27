<?php
session_start();
if (isset($_SESSION['user_id'])) {
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
        table td {
            vertical-align: middle !important;
        }
    </style>

    <body>
        <?php
        include_once("include/admin_topbar.php");
        include_once("include/admin_sidebar.php");
        include_once("include/user_content.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#close_modal").on("click", function() {
                    $("#formemodal").modal("hide");
                })

                $(document).on("submit", "#user_form", function(event) {
                    event.preventDefault();
                    var username = $("#username").val();
                    var password = $("#password").val();
                    var email = $("#email").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    $.ajax({
                        url: "php/user_table.php",
                        method: "POST",
                        data: {
                            username: username,
                            password: password,
                            email: email,
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdata();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                function showdata() {
                    var action = "show";
                    $.ajax({
                        url: "php/user_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#user_table").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                showdata();

                $(document).on("click", ".edit", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";

                    $.ajax({
                        url: "php/user_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#username").val(data.username);
                            $("#password").val(data.password);
                            $("#email").val(data.email);
                            $("#id").val(data.id);
                            $("#formemodal").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

            })
        </script>

        <?php
        include_once("include/admin_links.php");
        ?>

    </body>

    </html>

<?php } else {
    header("location:index.php");
} ?>