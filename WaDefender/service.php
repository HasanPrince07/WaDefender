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
        include_once("include/service_content.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#open_modal1").on("click", function() {
                    $("#image_file").empty();
                    $("#id").val("");
                    $("#form1")[0].reset();
                    $("#form_title1").html("Insert Data");
                    $("#form_btn1").html("SUBMIT");
                    $("#formemodal1").modal("show");
                });
                $("#close_modal1").on("click", function() {
                    $("#formemodal1").modal("hide");
                })
                $("#close_modal2").on("click", function() {
                    $("#formemodal2").modal("hide");
                })

                $(document).on("submit", "#form1", function(event) {
                    event.preventDefault();
                    var title = $("#title").val();
                    var img = $("#img").val();
                    var id = $("#id").val();
                    var action = $("#action1").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/service_table.php",
                            method: "POST",
                            data: {
                                title: title,
                                img: img,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file").empty();
                                $("#form1")[0].reset();
                                showdata1();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/service_table.php",
                            method: "POST",
                            data: {
                                title: title,
                                img: img,
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
                $(document).on("submit", "#form2", function(event) {
                    event.preventDefault();
                    var rprice = $("#rprice").val();
                    var oprice = $("#oprice").val();
                    var otext = $("#otext").val();
                    var btext = $("#btext").val();
                    var text = $("#text").val();
                    var id = $("#id").val();
                    var action = $("#action2").val();
                    $.ajax({
                        url: "php/service_table.php",
                        method: "POST",
                        data: {
                            rprice: rprice,
                            oprice: oprice,
                            otext: otext,
                            btext: btext,
                            text: text,
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdata2();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                function showdata1() {
                    var action = "show1";
                    $.ajax({
                        url: "php/service_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#service_table1").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                function showdata2() {
                    var action = "show2";
                    $.ajax({
                        url: "php/service_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#service_table2").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                showdata1();
                showdata2();

                $(document).on("click", ".delete1", function() {
                    var id = $(this).attr("id");
                    var action = "delete1";

                    $.ajax({
                        url: "php/service_table.php",
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

                $(document).on("click", ".edit1", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit1";

                    $.ajax({
                        url: "php/service_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#title").val(data.title);
                            $("#image_file").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="${data.img}"/>`);
                            $("#id").val(data.id);
                            $("#form_title1").html("Update Data");
                            $("#form_btn1").html("Update");
                            $("#formemodal1").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".edit2", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit2";

                    $.ajax({
                        url: "php/service_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#rprice").val(data.rprice);
                            $("#oprice").val(data.oprice);
                            $("#otext").val(data.otext);
                            $("#btext").val(data.btext);
                            $("#text").val(data.text);
                            $("#id").val(data.id);
                            $("#form_title2").html("Update Data");
                            $("#form_btn2").html("Update");
                            $("#formemodal2").modal("show");
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