<?php

require "connect.php";

if ($_POST["action"] == "show_data_by_id") {
    $id = $_POST["id"];
    $fetch_by_id_query = "SELECT * FROM `createpage` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_by_id_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "add") {
    $page_title = $_POST["page_title"];
    $page_sub_title = $_POST["page_sub_title"];
    $page_meta_tag = $_POST["page_meta_tag"];
    $page_keyword = $_POST["page_keyword"];
    $page_seo_description = $_POST["page_seo_description"];
    $product_name = $_POST["product_name"];
    $background_color = $_POST["background_color"];
    $text_color = $_POST["text_color"];
    $first_color = $_POST["first_color"];
    $second_color = $_POST["second_color"];
    $third_color = $_POST["third_color"];
    $third_color = $_POST["third_color"];
    $img = $_POST["img"];
    $id = $_POST["id"];
    $update_query = "UPDATE `createpage` SET `page_title`='$page_title', `page_sub_title`='$page_sub_title', `page_meta_tag`='$page_meta_tag', `page_keyword`='$page_keyword', `page_seo_description`='$page_seo_description', `product_name`='$product_name', `background_color`='$background_color', `text_color`='$text_color', `first_color`='$first_color', `second_color`='$second_color', `third_color`='$third_color', `icon`='$img' WHERE `id`='$id'";
    $res = mysqli_query($conn, $update_query);
    if($res){
        echo "DONE";
    }
}
