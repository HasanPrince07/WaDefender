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
        include_once("include/addsection_content.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#open_modal").on("click", function() {
                    $("#id").val("");
                    $("#addsection_form")[0].reset();
                    $("#addsection_text").html("Add Section Data");
                    $("#form_button").html("Add");
                    $("#formemodal").modal("show");
                });
                $("#close_modal").on("click", function() {
                    $("#formemodal").modal("hide");
                });

                $(document).on("submit", "#addsection_form", function(event) {
                    event.preventDefault();
                    var section_name = $("#section_name").val();
                    var section_title = $("#section_title").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    $.ajax({
                        url: "php/addsection_table.php",
                        method: "POST",
                        data: {
                            section_name: section_name,
                            section_title: section_title,
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
                        url: "php/addsection_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#addsection_table").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                showdata();

                function show_sectiondata() {
                    var action = "show";
                    $.ajax({
                        url: "php/addsection_data.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#addsection_data").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                show_sectiondata();

                $(document).on("click", ".delete", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/addsection_table.php",
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

                $(document).on("click", ".edit", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/addsection_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#section_name").val(data.section_name);
                            $("#section_title").val(data.section_title);
                            $("#id").val(data.id);
                            $("#addsection_text").html("Update Section Data");
                            $("#form_button").html("Update");
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