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
                                        <th>Section Heading Color</th>
                                        <th>Update</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `web_color` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                                        <td>' . $row["section_heading_color"] . '</td>
                                        <td><a style="margin-right: 10px;" href="webcolor_page.php"><button class="btn btn-primary" >SHOW MORE</button></a><a href="webcolor_page.php?' . $row["id"] . '" ><button class="btn btn-success" >EDIT</button></a></td>
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
    $bg_color = $_POST["bg_color"];
    $btn_color1 = $_POST["btn_color1"];
    $btn_color2 = $_POST["btn_color2"];
    $btn_text_color = $_POST["btn_text_color"];
    $shadow_color = $_POST["shadow_color"];
    $hover_btn_color_before = $_POST["hover_btn_color_before"];
    $hover_btn_color_after = $_POST["hover_btn_color_after"];
    $hover_txt_btn_color_before = $_POST["hover_btn_text_color_before"];
    $hover_txt_btn_color_after = $_POST["hover_btn_text_color_after"];
    $section_heading_color = $_POST["section_heading_color"];
    $border_color = $_POST["border_color"];
    $id = $_POST["id"];
    $insert_query = "UPDATE `web_color` SET `bg_color`='$bg_color',`btn_color1`='$btn_color1',`btn_color2`='$btn_color2',`btn_txt_color`='$btn_text_color',`shadow_color`='$shadow_color',`hover_btn_color_befor`='$hover_btn_color_before',`hover_btn_color_after`='$hover_btn_color_after',`hover_btn_txt_color_befor`='$hover_txt_btn_color_before',`hover_btn_txt_color_after`='$hover_txt_btn_color_after',`section_heading_color`='$section_heading_color',`border_color`='$border_color' WHERE `id`='$id'";
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "show_data_by_id") {
    $id = $_POST["id"];
    if ($id == "empty") {
        $fetch_byid_query = "SELECT * FROM `web_color`";
    } else {
        $fetch_byid_query = "SELECT * FROM `web_color` WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
