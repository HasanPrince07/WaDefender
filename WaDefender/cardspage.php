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
        include_once("include/cardspage_content.php");
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
                $(document).on("submit", "#form", function(event) {
                    event.preventDefault();
                    var title1 = $("#title1").val();
                    var title2 = $("#title2").val();
                    var title3 = $("#title3").val();
                    var text1 = $("#text1").val();
                    var text2 = $("#text2").val();
                    var text3 = $("#text3").val();
                    var img1 = $("#img").val();
                    var img2 = $("#img2").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    $.ajax({
                        url: "php/cardspage_table.php",
                        method: "POST",
                        data: {
                            title1: title1,
                            title2: title2,
                            title3: title3,
                            text1: text1,
                            text2: text2,
                            text3: text3,
                            img1: img1,
                            img2: img2,
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
                        url: "php/cardspage_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            tinyMCE.get("title1").setContent(data.title1);
                            tinyMCE.get("title2").setContent(data.title2);
                            tinyMCE.get("title3").setContent(data.title3);
                            tinyMCE.get("text1").setContent(data.text1);
                            tinyMCE.get("text2").setContent(data.text2);
                            tinyMCE.get("text3").setContent(data.text3);
                            $("#image_file1").html(`<img  src="images/${data.img1}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="${data.img1}"/>`);
                            $("#image_file2").html(`<img  src="images/${data.img2}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img2" id="img2" value="${data.img2}"/>`);
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

                //Start of Image Upload//
                $(document).on('change', '#file1', function() {
                    var name = document.getElementById("file1").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file1").files[0]);
                    var f = document.getElementById("file1").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file1').files[0]);
                        form_data.append('action', 'ajax_image_upload');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file1').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file1').html(data);
                            }
                        });

                    }
                });

                //Start of Image Upload//
                $(document).on('change', '#file2', function() {
                    var name = document.getElementById("file2").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file2").files[0]);
                    var f = document.getElementById("file2").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file2').files[0]);
                        form_data.append('action', 'ajax_image_upload2');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file2').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file2').html(data);
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