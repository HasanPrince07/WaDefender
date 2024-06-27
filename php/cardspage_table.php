<?php

require "connect.php";

if ($_POST["action"] == "show_data") {
    $id = $_POST["id"];
    $query = "SELECT * FROM `cards_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}


if ($_POST["action"] == "add") {
    $title1 = $_POST["title1"];
    $title2 = $_POST["title2"];
    $title3 = $_POST["title3"];
    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];
    $text3 = $_POST["text3"];
    $img1 = $_POST["img1"];
    $img2 = $_POST["img2"];
    $id = $_POST["id"];
    $update_query = "UPDATE `cards_table` SET `title1`='$title1',`title2`='$title2',`title3`='$title3',`text1`='$text1',`text2`='$text2',`text3`='$text3',`img1`='$img1',`img2`='$img2' WHERE `id`='$id'";
    $res = mysqli_query($conn, $update_query);
    if ($res) {
        echo "DONE";
    }
}
