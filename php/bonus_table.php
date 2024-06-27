<?php

require "connect.php";

function showfn()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                        				<th>S.No.</th>
                        				<th>Title</th>
                                        <th>Image</th>
                                        <th>Text</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `bonus_table_one` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["title"] . '</td>
                                        <td><img style="width:100px;" src="images/' . $row["img"] . '" alt="..."/></td>
                                        <td>' . $row["text"] . '</td>
                                        <td><button class="btn btn-danger delete1" id="' . $row["id"] . '" >DELETE</button> || <button class="btn btn-success edit1" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="5">No Data Found</td></tr>';
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
                        				<th>Title</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `bonus_table_two` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["title"] . '</td>
                                        <td><a style="margin-right: 10px;" href="bonuspage2.php"><button class="btn btn-primary" >SHOW MORE</button></a><a href="bonuspage2.php?' . $row["id"] . '" ><button class="btn btn-success" >EDIT</button></a></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="3">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

function showfn3()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                        				<th>S.No.</th>
                        				<th>Title</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `bonus_table_three` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["title"] . '</td>
                                        <td><button class="btn btn-danger delete3" id="' . $row["id"] . '" >DELETE</button> || <button class="btn btn-success edit3" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="3">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

function showfn4()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                        				<th>S.No.</th>
                        				<th>First Heading</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `bonus_table_four` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["hone"] . '</td>
                                        <td><a style="margin-right: 10px;" href="bonuspage4.php"><button class="btn btn-primary" >SHOW MORE</button></a><a href="bonuspage4.php?' . $row["id"] . '" ><button class="btn btn-success" >EDIT</button></a></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="3">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

if ($_POST["action"] == "show1") {
    showfn();
}

if ($_POST["action"] == "show2") {
    showfn2();
}

if ($_POST["action"] == "show3") {
    showfn3();
}

if ($_POST["action"] == "show4") {
    showfn4();
}

if ($_POST["action"] == "add1") {
    $title = $_POST["title"];
    $img = $_POST["img"];
    $text = $_POST["text"];
    $id = $_POST["id"];
    if ($id == "") {
        $insert_query = "INSERT INTO `bonus_table_one` (`title`,`img`,`text`) VALUES ('$title','$img','$text')";
    } else {
        $insert_query = "UPDATE `bonus_table_one` SET `title`='$title', `img`='$img',`text`='$text' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add2") {
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $bg_color = $_POST["bg_color"];
    $rate = $_POST["rate"];
    $text = $_POST["text"];
    $id = $_POST["id"];
    $query = "UPDATE `bonus_table_two` SET `title`='$title',`desc`='$desc',`bg_color`='$bg_color',`rate`='$rate',`text`='$text' WHERE `id`='$id'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add3") {
    $title = $_POST["title"];
    $id = $_POST["id"];
    if ($id == "") {
        $insert_query = "INSERT INTO `bonus_table_three` (`title`) VALUES ('$title')";
    } else {
        $insert_query = "UPDATE `bonus_table_three` SET `title`='$title' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add4") {
    $btn_text = $_POST["btn_text"];
    $hone = $_POST["hone"];
    $htwo = $_POST["htwo"];
    $descone = $_POST["descone"];
    $desctwo = $_POST["desctwo"];
    $id = $_POST["id"];
    $query = "UPDATE `bonus_table_four` SET `btn_text`='$btn_text',`hone`='$hone',`htwo`='$htwo',`descone`='$descone',`desctwo`='$desctwo' WHERE `id`='$id'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete1") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `bonus_table_one` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete3") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `bonus_table_three` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit1") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `bonus_table_one` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "edit3") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `bonus_table_three` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "showbyid2") {
    $id = $_POST["id"];
    if ($id == "empty") {
        $fetch_byid_query = "SELECT * FROM `bonus_table_two`";
    } else {
        $fetch_byid_query = "SELECT * FROM `bonus_table_two` WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "showbyid4") {
    $id = $_POST["id"];
    if ($id == "empty") {
        $fetch_byid_query = "SELECT * FROM `bonus_table_four`";
    } else {
        $fetch_byid_query = "SELECT * FROM `bonus_table_four` WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
