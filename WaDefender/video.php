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

        table img {
            width: 100px;
        }
    </style>

    <body>
        <?php
        include_once("include/admin_topbar.php");
        include_once("include/admin_sidebar.php");
        include_once("include/video_content.php");
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function() {

                $("#open_modal2").on("click", function() {
                    $("#image_file2").empty();
                    $("#id2").val("");
                    $("#form2")[0].reset();
                    $("#form_text2").html("Insert Data");
                    $("#form_button2").html("SUBMIT");
                    $("#formemodal2").modal("show");
                })
                $("#close_modal2").on("click", function() {
                    $("#formemodal2").modal("hide");
                })
                $("#open_modal3").on("click", function() {
                    $("#image_file3").empty();
                    $("#id3").val("");
                    $("#form3")[0].reset();
                    $("#form_text3").html("Insert Data");
                    $("#form_button3").html("SUBMIT");
                    $("#formemodal3").modal("show");
                })
                $("#close_modal3").on("click", function() {
                    $("#formemodal3").modal("hide");
                })
                $("#close_modal4").on("click", function() {
                    $("#formemodal4").modal("hide");
                })
                $("#open_modal5").on("click", function() {
                    $("#image_file5").empty();
                    $("#id5").val("");
                    $("#form5")[0].reset();
                    $("#form_text5").html("Insert Data");
                    $("#form_button5").html("SUBMIT");
                    $("#formemodal5").modal("show");
                })
                $("#close_modal5").on("click", function() {
                    $("#formemodal5").modal("hide");
                })

                $(document).on("submit", "#form2", function(event) {
                    event.preventDefault();
                    var img = $("#img2").val();
                    var id = $("#id2").val();
                    var action = $("#action2").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/video_table.php",
                            method: "POST",
                            data: {
                                img: img,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file2").empty();
                                $("#form2")[0].reset();
                                showdata2();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/video_table.php",
                            method: "POST",
                            data: {
                                img: img,
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
                    }
                })

                $(document).on("submit", "#form3", function(event) {
                    event.preventDefault();
                    var img = $("#img3").val();
                    var id = $("#id3").val();
                    var action = $("#action3").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/video_table.php",
                            method: "POST",
                            data: {
                                img: img,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file3").empty();
                                $("#form3")[0].reset();
                                showdata3();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/video_table.php",
                            method: "POST",
                            data: {
                                img: img,
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

                $(document).on("submit", "#form4", function(event) {
                    event.preventDefault();
                    var otext = $("#otext4").val();
                    var btext = $("#btext4").val();
                    var text = $("#text4").val();
                    var htext = $("#htext4").val();
                    var id = $("#id4").val();
                    var action = $("#action4").val();
                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            otext: otext,
                            btext: btext,
                            text: text,
                            htext: htext,
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdata4();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                $(document).on("submit", "#form5", function(event) {
                    event.preventDefault();
                    var img = $("#img5").val();
                    var id = $("#id5").val();
                    var action = $("#action5").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/video_table.php",
                            method: "POST",
                            data: {
                                img: img,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file5").empty();
                                $("#form5")[0].reset();
                                showdata5();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/video_table.php",
                            method: "POST",
                            data: {
                                img: img,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                showdata5();
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
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#video_table1").html(data);
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
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#video_table2").html(data);
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
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#video_table3").html(data);
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
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#video_table4").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                showdata4();

                function showdata5() {
                    var action = "show5";
                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#video_table5").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                showdata5();

                function showdata6() {
                    var action = "show6";
                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            action: action
                        },
                        success: function(data) {
                            $("#video_table6").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                showdata6();

                $(document).on("click", ".delete2", function() {
                    var id = $(this).attr("id");
                    var action = "delete2";

                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
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

                $(document).on("click", ".delete3", function() {
                    var id = $(this).attr("id");
                    var action = "delete3";

                    $.ajax({
                        url: "php/video_table.php",
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

                $(document).on("click", ".delete5", function() {
                    var id = $(this).attr("id");
                    var action = "delete5";

                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdata5();
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
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#image_file2").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img2" value="${data.img}"/>`);
                            $("#id2").val(data.id);
                            $("#form_text2").html("Update Data");
                            $("#form_button2").html("UPDATE");
                            $("#formemodal2").modal("show");
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
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#image_file3").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img3" value="${data.img}"/>`);
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

                $(document).on("click", ".edit4", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit4";

                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#otext4").val(data.otext);
                            $("#btext4").val(data.btext);
                            $("#text4").val(data.text);
                            $("#htext4").val(data.htext);
                            $("#id4").val(data.id);
                            $("#form_text4").html("Update Data");
                            $("#form_button4").html("UPDATE");
                            $("#formemodal4").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                $(document).on("click", ".edit5", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit5";

                    $.ajax({
                        url: "php/video_table.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#image_file5").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img5" value="${data.img}"/>`);
                            $("#id5").val(data.id);
                            $("#form_text5").html("Update Data");
                            $("#form_button5").html("UPDATE");
                            $("#formemodal5").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

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

                $(document).on('change', '#file3', function() {
                    var name = document.getElementById("file3").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file3").files[0]);
                    var f = document.getElementById("file3").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file3').files[0]);
                        form_data.append('action', 'ajax_image_upload3');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file3').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file3').html(data);
                            }
                        });

                    }
                });

                $(document).on('change', '#file5', function() {
                    var name = document.getElementById("file5").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file5").files[0]);
                    var f = document.getElementById("file5").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file5').files[0]);
                        form_data.append('action', 'ajax_image_upload5');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file5').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file5').html(data);
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