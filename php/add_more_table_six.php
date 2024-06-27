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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `add_more_table_six` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["page_id"] . '</td>
                                        <td>' . $row["title"] . '</td>
                                        <td>' . $row["description"] . '</td>
                                        <td><button class="btn btn-success add_edit_six" id="' . $row["id"] . '" >EDIT</button></a> || <button class="btn btn-danger add_delete_six" id="' . $row["id"] . '" >DELETE</button></a></td>
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
    $description = $_POST["description"];
    $id = $_POST["id"];
    $page_id = $_POST["page_id"];
    if ($id == "") {
        $query = "INSERT INTO `add_more_table_six`(`page_id`,`title`,`description`) VALUES ('$page_id','$title','$description')";
    } else {
        $query = "UPDATE `add_more_table_six` SET `title`='$title',`description`='$description' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `add_more_table_six` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `add_more_table_six` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
