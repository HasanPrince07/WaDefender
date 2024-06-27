<?php

require "connect.php";

if ($_POST["action"] == "show_cardpage") {
    $query = "SELECT * FROM `cards_table`";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
