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
        include_once("include/pagedata_addmore_content.php");
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

                $("#open_modal_one").on("click", function() {
                    $("#image_file_one").empty();
                    $("#id").val("");
                    $("#addmore_text_one").html("Add More Data");
                    $("#form_button_one").html("Add");
                    $("#addmore_form_one")[0].reset();
                    $("#formemodal_one").modal("show");
                })
                $("#open_modal_two").on("click", function() {
                    $("#image_file_two").empty();
                    $("#id").val("");
                    $("#addmore_text_two").html("Add More Data");
                    $("#form_button_two").html("Add");
                    $("#addmore_form_two")[0].reset();
                    $("#formemodal_two").modal("show");
                })
                $("#open_modal_three").on("click", function() {
                    $("#image_file_three").empty();
                    $("#id").val("");
                    $("#addmore_text_three").html("Add More Data");
                    $("#form_button_three").html("Add");
                    $("#addmore_form_three")[0].reset();
                    $("#formemodal_three").modal("show");
                })
                $("#open_modal_four").on("click", function() {
                    $("#image_file_four").empty();
                    $("#id").val("");
                    $("#addmore_text_four").html("Add More Data");
                    $("#form_button_four").html("Add");
                    $("#addmore_form_four")[0].reset();
                    $("#formemodal_four").modal("show");
                })
                $("#open_modal_five").on("click", function() {
                    $("#id").val("");
                    $("#addmore_text_five").html("Add More Data");
                    $("#form_button_five").html("Add");
                    $("#addmore_form_five")[0].reset();
                    $("#formemodal_five").modal("show");
                })
                $("#open_modal_six").on("click", function() {
                    $("#id").val("");
                    $("#addmore_text_six").html("Add More Data");
                    $("#form_button_six").html("Add");
                    $("#addmore_form_six")[0].reset();
                    $("#formemodal_six").modal("show");
                })
                $(document).on("click",".add_btn_six", function() {
                    var page_id=$(this).attr("id");
                    $("#id").val("");
                    $("#page_id").val(page_id);
                    $("#add_more_text_six").html("Add More Data");
                    $("#add_form_button_six").html("Add");
                    $("#add_more_form_six")[0].reset();
                    $("#add_formemodal_six").modal("show");
                })
                $("#open_modal_seven").on("click", function() {
                    $("#image_file_seven").empty();
                    $("#id").val("");
                    $("#addmore_text_seven").html("Add More Data");
                    $("#form_button_seven").html("Add");
                    $("#addmore_form_seven")[0].reset();
                    $("#formemodal_seven").modal("show");
                })
                $(document).on("click",".add_btn_seven", function() {
                    var page_id=$(this).attr("id");
                    $("#id").val("");
                    $("#page_id").val(page_id);
                    $("#add_more_text_seven").html("Add More Data");
                    $("#add_form_button_seven").html("Add");
                    $("#add_more_form_seven")[0].reset();
                    $("#add_formemodal_seven").modal("show");
                })
                $("#close_modal_one").on("click", function() {
                    $("#formemodal_one").modal("hide");
                })
                $("#close_modal_two").on("click", function() {
                    $("#formemodal_two").modal("hide");
                })
                $("#close_modal_three").on("click", function() {
                    $("#formemodal_three").modal("hide");
                })
                $("#close_modal_four").on("click", function() {
                    $("#formemodal_four").modal("hide");
                })
                $("#close_modal_five").on("click", function() {
                    $("#formemodal_five").modal("hide");
                })
                $("#close_modal_six").on("click", function() {
                    $("#formemodal_six").modal("hide");
                })
                $("#close_add_modal_six").on("click", function() {
                    $("#add_formemodal_six").modal("hide");
                })
                $("#close_modal_seven").on("click", function() {
                    $("#formemodal_seven").modal("hide");
                })
                $("#close_add_modal_seven").on("click", function() {
                    $("#add_formemodal_seven").modal("hide");
                })

                $(document).on("submit", "#addmore_form_one", function(event) {
                    event.preventDefault();
                    var url = window.location.href;
                    var page_id = url.split("?")[1];
                    var img = $("#img").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/addmore_table_one.php",
                            method: "POST",
                            data: {
                                img: img,
                                page_id: page_id,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file_one").empty();
                                $("#addmore_form_one")[0].reset();
                                showdataone();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/addmore_table_one.php",
                            method: "POST",
                            data: {
                                img: img,
                                id: id,
                                action: action
                            },
                            success: function() {
                                showdataone();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
                $(document).on("submit", "#addmore_form_two", function(event) {
                    event.preventDefault();
                    var url = window.location.href;
                    var page_id = url.split("?")[1];
                    var title = $("#title").val();
                    var img = $("#img").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/addmore_table_two.php",
                            method: "POST",
                            data: {
                                img: img,
                                page_id: page_id,
                                title: title,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file_two").empty();
                                $("#addmore_form_two")[0].reset();
                                showdatatwo();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/addmore_table_two.php",
                            method: "POST",
                            data: {
                                img: img,
                                title: title,
                                id: id,
                                action: action
                            },
                            success: function() {
                                showdatatwo();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
                $(document).on("submit", "#addmore_form_three", function(event) {
                    event.preventDefault();
                    var url = window.location.href;
                    var page_id = url.split("?")[1];
                    var title = $("#title_three").val();
                    var description = $("#description").val();
                    var img = $("#img").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    console.log(title);
                    if (id == "") {
                        $.ajax({
                            url: "php/addmore_table_three.php",
                            method: "POST",
                            data: {
                                img: img,
                                page_id: page_id,
                                title: title,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file_three").empty();
                                $("#addmore_form_three")[0].reset();
                                showdatathree();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/addmore_table_three.php",
                            method: "POST",
                            data: {
                                img: img,
                                title: title,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function() {
                                showdatathree();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
                $(document).on("submit", "#addmore_form_four", function(event) {
                    event.preventDefault();
                    var url = window.location.href;
                    var page_id = url.split("?")[1];
                    var title = $("#title_four").val();
                    var img = $("#img").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/addmore_table_four.php",
                            method: "POST",
                            data: {
                                img: img,
                                page_id: page_id,
                                title: title,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file_four").empty();
                                $("#addmore_form_four")[0].reset();
                                showdatafour();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/addmore_table_four.php",
                            method: "POST",
                            data: {
                                img: img,
                                title: title,
                                id: id,
                                action: action
                            },
                            success: function() {
                                showdatafour();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
                $(document).on("submit", "#addmore_form_five", function(event) {
                    event.preventDefault();
                    var url = window.location.href;
                    var page_id = url.split("?")[1];
                    var description = $("#description_five").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/addmore_table_five.php",
                            method: "POST",
                            data: {
                                page_id: page_id,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#addmore_form_five")[0].reset();
                                showdatafive();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/addmore_table_five.php",
                            method: "POST",
                            data: {
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function() {
                                showdatafive();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
                $(document).on("submit", "#addmore_form_six", function(event) {
                    event.preventDefault();
                    var url = window.location.href;
                    var page_id = url.split("?")[1];
                    var title = $("#title_six").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/addmore_table_six.php",
                            method: "POST",
                            data: {
                                page_id: page_id,
                                title: title,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#addmore_form_six")[0].reset();
                                showdatasix();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/addmore_table_six.php",
                            method: "POST",
                            data: {
                                title: title,
                                id: id,
                                action: action
                            },
                            success: function() {
                                showdatasix();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
                $(document).on("submit", "#add_more_form_six", function(event) {
                    event.preventDefault();
                    var page_id = $("#page_id").val();
                    var title = $("#add_title_six").val();
                    var description = $("#add_description_six").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/add_more_table_six.php",
                            method: "POST",
                            data: {
                                page_id: page_id,
                                title: title,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#add_more_form_six")[0].reset();
                                add_showdatasix();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/add_more_table_six.php",
                            method: "POST",
                            data: {
                                title: title,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function() {
                                add_showdatasix();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
                $(document).on("submit", "#addmore_form_seven", function(event) {
                    event.preventDefault();
                    var url = window.location.href;
                    var page_id = url.split("?")[1];
                    var title = $("#title_seven").val();
                    var description = $("#description_seven").val();
                    var img = $("#img").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    console.log(title);
                    if (id == "") {
                        $.ajax({
                            url: "php/addmore_table_seven.php",
                            method: "POST",
                            data: {
                                img: img,
                                page_id: page_id,
                                title: title,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file_seven").empty();
                                $("#addmore_form_seven")[0].reset();
                                showdataseven();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/addmore_table_seven.php",
                            method: "POST",
                            data: {
                                img: img,
                                title: title,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function() {
                                showdataseven();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })
                $(document).on("submit", "#add_more_form_seven", function(event) {
                    event.preventDefault();
                    var page_id = $("#page_id").val();
                    var title = $("#add_title_seven").val();
                    var description = $("#add_description_seven").val();
                    var id = $("#id").val();
                    var action = $("#action").val();
                    if (id == "") {
                        $.ajax({
                            url: "php/add_more_table_seven.php",
                            method: "POST",
                            data: {
                                page_id: page_id,
                                title: title,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#add_more_form_seven")[0].reset();
                                add_showdataseven();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/add_more_table_seven.php",
                            method: "POST",
                            data: {
                                title: title,
                                description: description,
                                id: id,
                                action: action
                            },
                            success: function() {
                                add_showdataseven();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    }
                })

                function showdataone() {
                    var action = "show";
                    $.ajax({
                        url: "php/addmore_table_one.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#addmore_table_one").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                function showdatatwo() {
                    var action = "show";
                    $.ajax({
                        url: "php/addmore_table_two.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#addmore_table_two").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                function showdatathree() {
                    var action = "show";
                    $.ajax({
                        url: "php/addmore_table_three.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#addmore_table_three").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                function showdatafour() {
                    var action = "show";
                    $.ajax({
                        url: "php/addmore_table_four.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#addmore_table_four").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                function showdatafive() {
                    var action = "show";
                    $.ajax({
                        url: "php/addmore_table_five.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#addmore_table_five").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                function showdatasix() {
                    var action = "show";
                    $.ajax({
                        url: "php/addmore_table_six.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#addmore_table_six").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                function add_showdatasix() {
                    var action = "show";
                    $.ajax({
                        url: "php/add_more_table_six.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#add_more_table_six").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                function showdataseven() {
                    var action = "show";
                    $.ajax({
                        url: "php/addmore_table_seven.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#addmore_table_seven").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
                function add_showdataseven() {
                    var action = "show";
                    $.ajax({
                        url: "php/add_more_table_seven.php",
                        method: "POST",
                        data: {
                            action: action,
                        },
                        success: function(data) {
                            $("#add_more_table_seven").html(data);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }

                showdataone();
                showdatatwo();
                showdatathree();
                showdatafour();
                showdatafive();
                showdatasix();
                add_showdatasix();
                showdataseven();
                add_showdataseven();

                $(document).on("click", ".delete_one", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/addmore_table_one.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdataone();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".delete_two", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/addmore_table_two.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdatatwo();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".delete_three", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/addmore_table_three.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdatathree();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".delete_four", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/addmore_table_four.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdatafour();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".delete_five", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/addmore_table_five.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdatafive();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".delete_six", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/addmore_table_six.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdatasix();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".add_delete_six", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/add_more_table_six.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            add_showdatasix();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".delete_seven", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/addmore_table_seven.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            showdataseven();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".add_delete_seven", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "delete";
                    $.ajax({
                        url: "php/add_more_table_seven.php",
                        method: "POST",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            add_showdataseven();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                $(document).on("click", ".edit_one", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/addmore_table_one.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#image_file_one").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="${data.img}"/>`);
                            $("#id").val(data.id);
                            $("#addmore_text_one").html("Update More Data");
                            $("#form_button_one").html("Update");
                            $("#formemodal_one").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".edit_two", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/addmore_table_two.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#image_file_two").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="${data.img}"/>`);
                            $("#id").val(data.id);
                            $("#title").val(data.title);
                            $("#addmore_text_two").html("Update More Data");
                            $("#form_button_two").html("Update");
                            $("#formemodal_two").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".edit_three", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/addmore_table_three.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#image_file_three").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="${data.img}"/>`);
                            $("#id").val(data.id);
                            $("#title_three").val(data.title);
                            $("#description").val(data.description);
                            $("#addmore_text_three").html("Update More Data");
                            $("#form_button_three").html("Update");
                            $("#formemodal_three").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".edit_four", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/addmore_table_four.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#image_file_four").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="${data.img}"/>`);
                            $("#id").val(data.id);
                            $("#title_four").val(data.title);
                            $("#addmore_text_four").html("Update More Data");
                            $("#form_button_four").html("Update");
                            $("#formemodal_four").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".edit_five", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/addmore_table_five.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#id").val(data.id);
                            tinyMCE.get('description_five').setContent(data.description);
                            $("#addmore_text_five").html("Update More Data");
                            $("#form_button_five").html("Update");
                            $("#formemodal_five").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".edit_six", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/addmore_table_six.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#id").val(data.id);
                            $("#title_six").val(data.title);
                            $("#addmore_text_six").html("Update More Data");
                            $("#form_button_six").html("Update");
                            $("#formemodal_six").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".add_edit_six", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/add_more_table_six.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#id").val(data.id);
                            $("#add_title_six").val(data.title);
                            tinyMCE.get('add_description_six').setContent(data.description);
                            $("#add_more_text_six").html("Update More Data");
                            $("#add_form_button_six").html("Update");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".edit_seven", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/addmore_table_seven.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#image_file_seven").html(`<img  src="images/${data.img}" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="${data.img}"/>`);
                            $("#id").val(data.id);
                            $("#title_seven").val(data.title);
                            $("#description_seven").val(data.description);
                            $("#addmore_text_seven").html("Update More Data");
                            $("#form_button_seven").html("Update");
                            $("#formemodal_seven").modal("show");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })
                $(document).on("click", ".add_edit_seven", function(event) {
                    event.preventDefault();
                    var id = $(this).attr("id");
                    var action = "edit";
                    $.ajax({
                        url: "php/add_more_table_seven.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                            id: id,
                            action: action
                        },
                        success: function(data) {
                            $("#id").val(data.id);
                            $("#add_title_seven").val(data.title);
                            tinyMCE.get('add_description_seven').setContent(data.description);
                            $("#add_more_text_seven").html("Update More Data");
                            $("#add_form_button_seven").html("Update");
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

                // $(document).on("click", "#remove_img", function() {
                //     $("#file_one").val("");
                //     $("#image_file_one").empty();
                // })

                // Start of Image Upload //
                $(document).on('change', '#file_one', function() {
                    var name = document.getElementById("file_one").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file_one").files[0]);
                    var f = document.getElementById("file_one").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file_one').files[0]);
                        form_data.append('action', 'ajax_image_upload');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file_one').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file_one').html(data);
                            }
                        });

                    }
                });
                $(document).on('change', '#file_two', function() {
                    var name = document.getElementById("file_two").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file_two").files[0]);
                    var f = document.getElementById("file_two").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file_two').files[0]);
                        form_data.append('action', 'ajax_image_upload');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file_two').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file_two').html(data);
                            }
                        });

                    }
                });
                $(document).on('change', '#file_three', function() {
                    var name = document.getElementById("file_three").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file_three").files[0]);
                    var f = document.getElementById("file_three").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file_three').files[0]);
                        form_data.append('action', 'ajax_image_upload');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file_three').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file_three').html(data);
                            }
                        });

                    }
                });
                $(document).on('change', '#file_four', function() {
                    var name = document.getElementById("file_four").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file_four").files[0]);
                    var f = document.getElementById("file_four").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file_four').files[0]);
                        form_data.append('action', 'ajax_image_upload');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file_four').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file_four').html(data);
                            }
                        });

                    }
                });
                $(document).on('change', '#file_seven', function() {
                    var name = document.getElementById("file_seven").files[0].name;
                    var form_data = new FormData();
                    var ext = name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert("Invalid Image File");
                    }
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("file_seven").files[0]);
                    var f = document.getElementById("file_seven").files[0];
                    var fsize = f.size || f.fileSize;
                    if (fsize > 2000000) {
                        alert("Image File Size is very big");
                    } else {

                        form_data.append("file", document.getElementById('file_seven').files[0]);
                        form_data.append('action', 'ajax_image_upload');

                        $.ajax({
                            url: "php/image_upload.php",
                            method: "POST",
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            beforeSend: function() {
                                $('#image_file_seven').html("<label class='text-success'>Image Uploading...</label>");
                            },
                            success: function(data) {
                                $('#image_file_seven').html(data);
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