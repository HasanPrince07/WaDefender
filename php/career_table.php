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
                        				<th>Title</th>
                                        <th>Image</th>
                                        <th>Text</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `career_table_one` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["title"] . '</td>
                                        <td><img style="width:100px" src="images/' . $row["img"] . '" alt="..."/></td>
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
                        				<th>Offer Text</th>
                                        <th>Button Text</th>
                                        <th>Text One</th>
                                        <th>Text Two</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `career_table_two` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["otext"] . '</td>
                                        <td>' . $row["btext"] . '</td>
                                        <td>' . $row["text1"] . '</td>
                                        <td>' . $row["text2"] . '</td>
                                        <td><button class="btn btn-success edit2" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="6">No Data Found</td></tr>';
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
    $title = $_POST["title"];
    $img = $_POST["img"];
    $text = $_POST["text"];
    $id = $_POST["id"];
    if ($id == "") {
        $insert_query = "INSERT INTO `career_table_one` (`title`,`img`,`text`) VALUES ('$title','$img','$text')";
    } else {
        $insert_query = "UPDATE `career_table_one` SET `title`='$title', `img`='$img', `text`='$text' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add2") {
    $otext = $_POST["otext"];
    $btext = $_POST["btext"];
    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];
    $id = $_POST["id"];
    $insert_query = "UPDATE `career_table_two` SET `otext`='$otext',`btext`='$btext',`text1`='$text1',`text2`='$text2' WHERE `id`='$id'";
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete1") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `career_table_one` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit1") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `career_table_one` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "edit2") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `career_table_two` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
