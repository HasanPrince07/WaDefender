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
                        				<th>Section Name</th>
                                        <th>Section Name</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `addsection_table` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["section_name"] . '</td>
                                        <td>' . $row["section_title"] . '</td>
                                        <td><button class="btn btn-success edit" id="' . $row["id"] . '" >EDIT</button> || <button class="btn btn-danger delete" id="' . $row["id"] . '" >DELETE</button></td>
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
    $section_name = $_POST["section_name"];
    $section_title = $_POST["section_title"];
    $id = $_POST["id"];
    if ($id == "") {
        $query = "INSERT INTO `addsection_table`(`section_name`, `section_title`) VALUES ('$section_name','$section_title')";
    } else {
        $query = "UPDATE `addsection_table` SET `section_name`='$section_name',`section_title`='$section_title' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `addsection_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `addsection_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
