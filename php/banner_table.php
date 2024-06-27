<?php

require "connect.php";

function showfn1()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                        				<th>S.No.</th>
                        				<th>Icon</th>
                                        <th>Icon Text</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `banner_table_one` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["icon"] . '</td>
                                        <td>' . $row["icon_text"] . '</td>
                                        <td><button class="btn btn-danger delete1" id="' . $row["id"] . '" >DELETE</button> || <button class="btn btn-success edit1" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="4">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

function showfn2()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                        				<th>S.No.</th>
                        				<th>Main Title</th>
                                        <th>Title</th>
                                        <th>Button Text</th>
                                        <th>Offer Text</th>
                                        <th>Image</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `banner_table_two` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["main_title"] . '</td>
                                        <td>' . $row["title"] . '</td>
                                        <td>' . $row["btn_text"] . '</td>
                                        <td>' . $row["offer_text"] . '</td>
                                        <td><img style="width: 100px" src="images/' . $row["img"] . '" alt="..."/></td>
                                        <td><button class="btn btn-success edit2" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="7">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

if ($_POST["action"] == "show1") {
    showfn1();
}

if ($_POST["action"] == "show2") {
    showfn2();
}

if ($_POST["action"] == "add1") {
    $icon = $_POST["icon"];
    $icon_text = $_POST["icon_text"];
    $id = $_POST["id"];
    if ($id == "") {
        $insert_query = "INSERT INTO `banner_table_one` (`icon`,`icon_text`) VALUES ('$icon','$icon_text')";
    } else {
        $insert_query = "UPDATE `banner_table_one` SET `icon`='$icon', `icon_text`='$icon_text' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add2") {
    $main_title = $_POST["main_title"];
    $title = $_POST["title"];
    $btn_text = $_POST["btn_text"];
    $offer_text = $_POST["offer_text"];
    $img = $_POST["img"];
    $id = $_POST["id"];
    $insert_query = "UPDATE `banner_table_two` SET `main_title`='$main_title',`title`='$title',`btn_text`='$btn_text',`offer_text`='$offer_text',`img`='$img' WHERE `id`='$id'";
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete1") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `banner_table_one` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit1") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `banner_table_one` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "edit2") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `banner_table_two` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
