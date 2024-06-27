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
        include_once("include/videopage_content.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {

                $("#form_title").text("Update Video");
                $("#form_btn").text("Update");

                $(document).on("submit", "#form", function(event) {
                    event.preventDefault();
                    var heading_one = $("#heading_one").val();
                    var heading_two = $("#heading_two").val();
                    var video_url = $("#video_url").val();
                    var offer_text = $("#offer_text").val();
                    var text = $("#text").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            heading_one: heading_one,
                            heading_two: heading_two,
                            video_url: video_url,
                            offer_text: offer_text,
                            text: text,
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
                    var url = window.location.href;
                    var id = url.split("?")[1];
                    var action = "show_data";
                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#heading_one").val(data.heading_one);
                            $("#heading_two").val(data.heading_two);
                            $("#url").val(data.url);
                            $("#offer_text").val(data.offer_text);
                            $("#text").val(data.text);
                            $("#video_url").val(data.url);
                            $("#video_url_div").html(`<iframe width="100%" height="350" src="${data.url}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`);
                            $("#id").val(data.id);
                            $("#form_title").html("Update Data");
                            $("#form_btn").html("Update");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                showdata();

                // URL
                $(document).on("keyup", "#video_url", function() {
                    var video_url = $("#video_url").val();
                    $("#video_url_div").html(`<iframe width="100%" height="350" src="${video_url}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`);
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