<?php

require "connect.php";

function showfn()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                        				<th>SR.NO.</th>
                        				<th>Page ID</th>
                                        <th>Image</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `addmore_table_one` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["page_id"] . '</td>
                                        <td><img src="images/' . $row["img"] . '" alt="..."/></td>
                                        <td><button class="btn btn-success edit_one" id="' . $row["id"] . '" >EDIT</button></a> || <button class="btn btn-danger delete_one" id="' . $row["id"] . '" >DELETE</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="4">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

if ($_POST["action"] == "show") {
    showfn();
}

if ($_POST["action"] == "add") {
    $img = $_POST["img"];
    $id = $_POST["id"];
    $page_id = $_POST["page_id"];
    if ($id == "") {
        $query = "INSERT INTO `addmore_table_one`(`page_id`,`img`) VALUES ('$page_id','$img')";
    } else {
        $query = "UPDATE `addmore_table_one` SET `img`='$img' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `addmore_table_one` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `addmore_table_one` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
