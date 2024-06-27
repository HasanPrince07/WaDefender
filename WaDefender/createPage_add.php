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
        include_once("include/createPage_add_content.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {

                $(document).on("click", "#back_btn", function() {
                    window.location.href = "http://localhost/WaDefender/createPage.php";
                })

                $(document).on("submit", "#createPage_form", function(event) {
                    event.preventDefault();
                    var page_title = $("#page_title").val();
                    var page_sub_title = $("#page_sub_title").val();
                    var page_meta_tag = $("#page_meta_tag").val();
                    var page_keyword = $("#page_keyword").val();
                    var page_seo_description = $("#page_seo_description").val();
                    var product_name = $("#product_name").val();
                    var background_color = $("#background_color").val();
                    var text_color = $("#text_color").val();
                    var first_color = $("#first_color").val();
                    var second_color = $("#second_color").val();
                    var third_color = $("#third_color").val();
                    var img = $("#img").val();
                    var id = $("#id").val();
                    var action = $("#action").val();

                    if (id == "") {
                        $.ajax({
                            url: "php/createPage_table.php",
                            method: "POST",
                            data: {
                                page_title: page_title,
                                page_sub_title: page_sub_title,
                                page_meta_tag: page_meta_tag,
                                page_keyword: page_keyword,
                                page_seo_description: page_seo_description,
                                product_name: product_name,
                                background_color: background_color,
                                text_color: text_color,
                                first_color: first_color,
                                second_color: second_color,
                                third_color: third_color,
                                img: img,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file").empty();
                                $("#createPage_form")[0].reset();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/createPage_add_table.php",
                            method: "POST",
                            data: {
                                page_title: page_title,
                                page_sub_title: page_sub_title,
                                page_meta_tag: page_meta_tag,
                                page_keyword: page_keyword,
                                page_seo_description: page_seo_description,
                                product_name: product_name,
                                background_color: background_color,
                                text_color: text_color,
                                first_color: first_color,
                                second_color: second_color,
                                third_color: third_color,
                                img: img,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                console.log("data update");
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })

                var action = "show_data_by_id";
                var url = window.location.href;
                var id = url.split("?")[1];
                $.ajax({
                    url: "php/createPage_add_table.php",
                    method: "POST",
                    data: {
                        action: action,
                        id: id
                    },
                    dataType: "json",
                    success: function(data) {
                        $("#page_title").val(data.page_title);
                        $("#page_sub_title").val(data.page_sub_title);
                        $("#page_meta_tag").val(data.page_meta_tag);
                        $("#page_keyword").val(data.page_keyword);
                        $("#page_seo_description").val(data.page_seo_description);
                        $("#product_name").val(data.product_name);
                        $("#background_color").val(data.background_color);
                        $("#text_color").val(data.text_color);
                        $("#first_color").val(data.first_color);
                        $("#second_color").val(data.second_color);
                        $("#third_color").val(data.third_color);
                        $("#image_file").html(`<img  src="images/${data.icon}" class="img img-responsive img-thumbnail" width="200" height="100" />
                    <input type="text" name="img" id="img" value="${data.icon}"/>`);
                        $("#form_btn").html("Update");
                        $("#id").val(data.id);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })

                //Start of Image Upload//
                $(document).on('change', '#file', function() {
                    var name = document.getElementById("file").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file").files[0]);
                    var f = document.getElementById("file").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file').files[0]);
                        form_data.append('action', 'ajax_image_upload');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file').html(data);
                            }
                        });

                    }
                });

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