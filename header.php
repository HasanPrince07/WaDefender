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
        include_once("include/header_content.php");
        ?>

        <script src="admin/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                height: 100,
                theme: 'modern',
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true,
                templates: [{
                        title: 'Test template 1',
                        content: 'Test 1'
                    },
                    {
                        title: 'Test template 2',
                        content: 'Test 2'
                    }
                ],
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'
                ]
            });
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#close_modal").on("click", function() {
                    $("#formemodal").modal("hide");
                })

                $(document).on("submit", "#header_form", function(event) {
                    event.preventDefault();
                    var header_title = $("#header_title").val();
                    var id = $("#id").val();
                    var action = $("#action").val();

                    $.ajax({
                        url: "php/header_table.php",
                        method: "POST",
                        data: {
                            header_title: header_title,
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
                        url: "php/header_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#header_table").html(data);
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
                        url: "php/header_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            tinyMCE.get("header_title").setContent(data.header_title);
                            $("#id").val(data.id);
                            $("#header_text").html("Update Data");
                            $("#form_button").html("UPDATE");
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