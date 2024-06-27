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
        include_once("include/bonus_content.php");
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
                $("#open_modal1").on("click", function() {
                    $("#image_file1").empty();
                    $("#id1").val("");
                    $("#form1")[0].reset();
                    $("#form_text1").html("Insert Data");
                    $("#form_button1").html("SUBMIT");
                    $("#formemodal1").modal("show");
                })
                $("#open_modal3").on("click", function() {
                    $("#id3").val("");
                    $("#form3")[0].reset();
                    $("#form_text3").html("Insert Data");
                    $("#form_button3").html("SUBMIT");
                    $("#formemodal3").modal("show");
                })
                $("#close_modal1").on("click", function() {
                    $("#formemodal1").modal("hide");
                })
                $("#close_modal3").on("click", function() {
                    $("#formemodal3").modal("hide");
                })

                $(document).on("submit", "#form1", function(event) {
                    event.preventDefault();
                    var title = $("#title1").val();
                    var img = $("#img").val();
                    var text = $("#text1").val();
                    var id = $("#id1").val();
                    var action = $("#action1").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/bonus_table.php",
                            method: "POST",
                            data: {
                                title: title,
                                img: img,
                                text: text,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file1").empty();
                                $("#form1")[0].reset();
                                showdata1();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/bonus_table.php",
                            method: "POST",
                            data: {
                                title: title,
                                img: img,
                                text: text,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                showdata1();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })

                $(document).on("submit", "#form3", function(event) {
                    event.preventDefault();
                    var title = $("#title3").val();
                    var id = $("#id3").val();
                    var action = $("#action3").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/bonus_table.php",
                            method: "POST",
                            data: {
                                title: title,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#form3")[0].reset();
                                showdata3();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/bonus_table.php",
                            method: "POST",
                            data: {
                                title: title,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                showdata3();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })

                function showdata1() {
                    var action = "show1";
                    $.ajax({
                        url: "php/bonus_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#bonus_table1").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                showdata1();

                function showdata2() {
                    var action = "show2";
                    $.ajax({
                        url: "php/bonus_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#bonus_table2").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                showdata2();

                function showdata3() {
                    var action = "show3";
                    $.ajax({
                        url: "php/bonus_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#bonus_table3").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                showdata3();

                function showdata4() {
                    var action = "show4";
                    $.ajax({
                        url: "php/bonus_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#bonus_table4").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                showdata4();

                $(document).on("click", ".delete1", function() {
                    var id = $(this).attr("id");
                    var action = "delete1";

                    $.ajax({
                        url: "php/bonus_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdata1();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                $(document).on("click", ".delete3", function() {
                    var id = $(this).attr("id");
                    var action = "delete3";

                    $.ajax({
                        url: "php/bonus_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdata3();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                $(document).on("click", ".edit1", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit1";

                    $.ajax({
                        url: "php/bonus_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#title1").val(data.title);
                            $("#image_file1").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="${data.img}"/>`);
                            $("#text1").val(data.text);
                            $("#id1").val(data.id);
                            $("#form_text1").html("Update Data");
                            $("#form_button1").html("UPDATE");
                            $("#formemodal1").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                $(document).on("click", ".edit3", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit3";

                    $.ajax({
                        url: "php/bonus_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            tinyMCE.get("title3").setContent(data.title);
                            $("#id3").val(data.id);
                            $("#form_text3").html("Update Data");
                            $("#form_button3").html("UPDATE");
                            $("#formemodal3").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
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
                                $('#image_file1').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file1').html(data);
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