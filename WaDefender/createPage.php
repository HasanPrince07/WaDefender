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
        include_once("include/createPage_content.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#open_modal").on("click", function() {
                    window.location.href = "http://localhost/WaDefender/createPage_add.php";
                    // $("#image_file").empty();
                    // $("#id").val("");
                    // $("#createPage_form")[0].reset();
                    // $("#createPage_text").html("Insert Data");
                    // $("#form_button").html("SUBMIT");
                    // $("#formemodal").modal("show");
                })

                function showdata() {
                    var action = "show";
                    $.ajax({
                        url: "php/createPage_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#createPage_table").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                showdata();

                $(document).on("click", ".delete", function() {
                    var id = $(this).attr("id");
                    var action = "delete";

                    $.ajax({
                        url: "php/createPage_table.php",
                        method: "POST",
                        data: {
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

                $(document).on("click", "#all_delete_btn", function() {
                    var action = "all_delete";

                    $.ajax({
                        url: "php/createPage_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function() {
                            showdata();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                $(document).on("click", ".edit", function() {
                    var id = $(this).attr("id");
                    window.location.href = `http://localhost/WaDefender/createPage_add.php?${id}`;
                })

                $(document).on("click", ".page_status", function() {
                    var id = $(this).attr("id");
                    var action = "page_status";
                    $.ajax({
                        url: "php/createPage_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function() {
                            showdata();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                $(document).on("click", ".product_status", function() {
                    var id = $(this).attr("id");
                    var action = "product_status";
                    $.ajax({
                        url: "php/createPage_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function() {
                            showdata();
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