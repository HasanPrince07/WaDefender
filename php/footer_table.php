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
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `footer_table` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["title"] . '</td>
                                        <td><a style="margin-right: 10px;" href="footerpage.php"><button class="btn btn-primary" >SHOW MORE</button></a><a href="footerpage.php?' . $row["id"] . '" ><button class="btn btn-success" >EDIT</button></a></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="3">No Data Found</td></tr>';
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
    $tone = $_POST["tone"];
    $ttwo = $_POST["ttwo"];
    $tthree = $_POST["tthree"];
    $btn_text = $_POST["btn_text"];
    $id = $_POST["id"];
    $query = "UPDATE `footer_table` SET `title`='$title',`tone`='$tone',`ttwo`='$ttwo',`tthree`='$tthree',`btn_text`='$btn_text' WHERE `id`='$id'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "showbyid") {
    $id = $_POST["id"];
    if ($id == "empty") {
        $fetch_byid_query = "SELECT * FROM `footer_table`";
    } else {
        $fetch_byid_query = "SELECT * FROM `footer_table` WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
