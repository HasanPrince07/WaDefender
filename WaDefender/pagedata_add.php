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
        include_once("include/pagedata_add_content.php");
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

                $(document).on("submit", "#pagedata_form", function(event) {
                    event.preventDefault();
                    var page_name = $("#page_name").val();
                    var tagline = $("#tagline").val();
                    var short_description = $("#short_description").val();
                    var long_description = $("#long_description").val();
                    var img = $("#img").val();
                    var lead_generate = $("#lead_generate").val();
                    var page_status = $("#page_status").val();
                    var button_label = $("#button_label").val();
                    var button_url = $("#button_url").val();
                    var button_success_url = $("#button_success_url").val();
                    var whatsapp_number = $("#whatsapp_number").val();
                    var facebook_page_url = $("#facebook_page_url").val();
                    var instagram_page_url = $("#instagram_page_url").val();
                    var youtube_channel_url = $("#youtube_channel_url").val();
                    var background_color_code = $("#background_color_code").val();
                    var text_color_code = $("#text_color_code").val();
                    var first_color_code = $("#first_color_code").val();
                    var second_color_code = $("#second_color_code").val();
                    var third_color_code = $("#third_color_code").val();
                    var meta_tag = $("#meta_tag").val();
                    var keywords = $("#keywords").val();
                    var meta_description = $("#meta_description").val();
                    var fevicon = $("#fevicon").val();
                    var page_type = $("#page_type").val();
                    var cost = $("#cost").val();
                    var discount = $("#discount").val();
                    var coupon_code = $("#coupon_code").val();
                    var id = $("#id").val();
                    var action = $("#action").val();

                    if (id == "") {
                        $.ajax({
                            url: "php/pagedata_table.php",
                            method: "POST",
                            data: {
                                page_name: page_name,
                                tagline: tagline,
                                short_description: short_description,
                                long_description: long_description,
                                img: img,
                                lead_generate: lead_generate,
                                page_status: page_status,
                                button_label: button_label,
                                button_url: button_url,
                                button_success_url: button_success_url,
                                whatsapp_number: whatsapp_number,
                                facebook_page_url: facebook_page_url,
                                instagram_page_url: instagram_page_url,
                                youtube_channel_url: youtube_channel_url,
                                background_color_code: background_color_code,
                                text_color_code: text_color_code,
                                first_color_code: first_color_code,
                                second_color_code: second_color_code,
                                third_color_code: third_color_code,
                                meta_tag: meta_tag,
                                keywords: keywords,
                                meta_description: meta_description,
                                fevicon: fevicon,
                                page_type: page_type,
                                cost: cost,
                                discount: discount,
                                coupon_code: coupon_code,
                                id: id,
                                action: action
                            },
                            success: function(data) {
                                $("#image_file").empty();
                                $("#youtube_channel_url_div").empty();
                                $("#pagedata_form")[0].reset();
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    } else {
                        $.ajax({
                            url: "php/pagedata_table.php",
                            method: "POST",
                            data: {
                                page_name: page_name,
                                tagline: tagline,
                                short_description: short_description,
                                long_description: long_description,
                                img: img,
                                lead_generate: lead_generate,
                                page_status: page_status,
                                button_label: button_label,
                                button_url: button_url,
                                button_success_url: button_success_url,
                                whatsapp_number: whatsapp_number,
                                facebook_page_url: facebook_page_url,
                                instagram_page_url: instagram_page_url,
                                youtube_channel_url: youtube_channel_url,
                                background_color_code: background_color_code,
                                text_color_code: text_color_code,
                                first_color_code: first_color_code,
                                second_color_code: second_color_code,
                                third_color_code: third_color_code,
                                meta_tag: meta_tag,
                                keywords: keywords,
                                meta_description: meta_description,
                                fevicon: fevicon,
                                page_type: page_type,
                                cost: cost,
                                discount: discount,
                                coupon_code: coupon_code,
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
                    url: "php/pagedata_table.php",
                    method: "POST",
                    data: {
                        action: action,
                        id: id
                    },
                    dataType: "json",
                    success: function(data) {
                        $("#page_name").val(data.page_name);
                        $("#tagline").val(data.tagline);
                        $("#short_description").val(data.short_description);
                        $("#long_description").val(data.long_description);
                        $("#image_file").html(`<img  src="images/${data.thumbnail_image}" alt="..." class="img img-responsive img-thumbnail" width="200" height="100" />
                    <input type="text" name="img" id="img" value="${data.thumbnail_image}"/>'`);
                        $("#background_color_code").val(data.background_color_code);
                        $("#text_color_code").val(data.text_color_code);
                        $("#first_color_code").val(data.first_color_code);
                        $("#second_color_code").val(data.second_color_code);
                        $("#third_color_code").val(data.third_color_code);
                        $("#meta_tag").val(data.meta_tag);
                        $("#keywords").val(data.keywords);
                        $("#meta_description").val(data.meta_description);
                        $("#fevicon").val(data.fevicon);
                        if (data.lead_generate == 0) {
                            $("#lead_generate").val("no");
                        }
                        if (data.page_status == 0) {
                            $("#page_status").val("private");
                        }
                        $("#button_label").val(data.button_label);
                        $("#button_url").val(data.button_url);
                        $("#button_success_url").val(data.button_success_url);
                        if (data.page_type == 0) {
                            $("#page_type").val("unpaid");
                        }
                        $("#cost").val(data.cost);
                        $("#discount").val(data.discount);
                        $("#coupon_code").val(data.coupon_code);
                        $("#whatsapp_number").val(data.whatsapp_number);
                        $("#facebook_page_url").val(data.facebook_page_url);
                        $("#instagram_page_url").val(data.instagram_page_url);
                        $("#youtube_channel_url").val(data.youtube_channel_url);
                        $("#youtube_channel_url_div").html(`<iframe width="100%" height="350" src="${data.youtube_channel_url}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`);
                        $("#submit_btn").html("Update");
                        $("#id").val(data.id);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })

                $(document).on("click", "#remove_img", function() {
                    $("#image_file").empty();
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

                // youtube channel url
                $(document).on("keyup", "#youtube_channel_url", function() {
                    var youtube_channel_url = $("#youtube_channel_url").val();
                    $("#youtube_channel_url_div").html(`<iframe width="100%" height="350" src="${youtube_channel_url}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`);
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