<?php

session_start();
require "connect.php";

if ($_POST["action"] == "show_username") {
    echo $_SESSION["username"];
}

if ($_POST["action"] == "destroy_session") {
    session_destroy();
}

if ($_POST["action"] == "check") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fetch_query = "SELECT * FROM `user_table` WHERE `username`='$username' && `password`='$password'";
    $res = mysqli_query($conn, $fetch_query);
    $row = mysqli_num_rows($res);
    if ($row == 1) {
        $_SESSION["username"] = $username;
        echo "DONE";
    } else {
        echo "NOT DONE";
    }
}

if ($_POST["action"] == "add") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];
    $insert_query = "UPDATE `user_table` SET `username`='$username', `password`='$password' WHERE `id`='$id'";
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}
