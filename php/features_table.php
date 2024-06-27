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
    $query = "SELECT * FROM `features_table` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["title"] . '</td>
                                        <td><img style="width:100px" src="images/' . $row["img"] . '" alt="..."/></td>
                                        <td>' . $row["text"] . '</td>
                                        <td><button class="btn btn-danger delete" id="' . $row["id"] . '" >DELETE</button> || <button class="btn btn-success edit" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="5">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

if ($_POST["action"] == "show") {
    showfn();
}

if ($_POST["action"] == "add") {
    $title = $_POST["title"];
    $img = $_POST["img"];
    $text = $_POST["text"];
    $id = $_POST["id"];
    if ($id == "") {
        $insert_query = "INSERT INTO `features_table` (`title`,`img`,`text`) VALUES ('$title','$img','$text')";
    } else {
        $insert_query = "UPDATE `features_table` SET `title`='$title', `img`='$img', `text`='$text' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `features_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `features_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
