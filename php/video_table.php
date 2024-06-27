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
                        				<th>Heading One</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `video_table_one` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["heading_one"] . '</td>
                                        <td><a style="margin-right: 10px;" href="videopageshow.php?' . $row["id"] . '"><button class="btn btn-primary" id="' . $row["id"] . '" >SHOW MORE</button></a><a href="videopage.php?' . $row["id"] . '" ><button class="btn btn-success edit1" id="' . $row["id"] . '" >EDIT</button></a></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="3">No Data Found</td></tr>';
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
                        				<th>Image</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `video_table_two` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td><img src="images/' . $row["img"] . '" alt="..." /></td>
                                        <td><button style="margin-right: 10px" class="btn btn-danger delete2" id="' . $row["id"] . '" >DELETE</button><button class="btn btn-success edit2" id="' . $row["id"] . '" >EDIT</button></td>
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
                        				<th>Image</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `video_table_three` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td><img src="images/' . $row["img"] . '" alt="..." /></td>
                                        <td><button style="margin-right: 10px" class="btn btn-danger delete3" id="' . $row["id"] . '" >DELETE</button><button class="btn btn-success edit3" id="' . $row["id"] . '" >EDIT</button></td>
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
                        				<th>Offer Text</th>
                                        <th>Button Text</th>
                                        <th>Text</th>
                                        <th>Heading Text</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `video_table_four` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["otext"] . '</td>
                                        <td>' . $row["btext"] . '</td>
                                        <td>' . $row["text"] . '</td>
                                        <td>' . $row["htext"] . '</td>
                                        <td><button class="btn btn-success edit4" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="6">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}
function showfn5()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                        				<th>S.No.</th>
                        				<th>Image</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `video_table_five` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td><img src="images/' . $row["img"] . '" alt="..." /></td>
                                        <td><button style="margin-right: 10px" class="btn btn-danger delete5" id="' . $row["id"] . '" >DELETE</button><button class="btn btn-success edit5" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="3">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}
function showfn6()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                        				<th>S.No.</th>
                        				<th>Text One</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `video_table_six` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["text1"] . '</td>
                                        <td><a style="margin-right: 10px;" href="videopage6.php"><button class="btn btn-primary" >SHOW MORE</button></a><a href="videopage6.php?' . $row["id"] . '" ><button class="btn btn-success" >EDIT</button></a></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="5">No Data Found</td></tr>';
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
if ($_POST["action"] == "show3") {
    showfn3();
}
if ($_POST["action"] == "show4") {
    showfn4();
}
if ($_POST["action"] == "show5") {
    showfn5();
}
if ($_POST["action"] == "show6") {
    showfn6();
}

if ($_POST["action"] == "show_data") {
    $id = $_POST["id"];
    $query = "SELECT * FROM `video_table_one`";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "add") {
    $heading_one = $_POST["heading_one"];
    $heading_two = $_POST["heading_two"];
    $url = $_POST["video_url"];
    $offer_text = $_POST["offer_text"];
    $text = $_POST["text"];
    $id = $_POST["id"];
    $update_query = "UPDATE `video_table_one` SET `heading_one`='$heading_one', `heading_two`='$heading_two', `url`='$url', `offer_text`='$offer_text', `text`='$text' WHERE `id`='$id'";
    $res = mysqli_query($conn, $update_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add2") {
    $img = $_POST["img"];
    $id = $_POST["id"];
    if ($id == "") {
        $query = "INSERT INTO `video_table_two` (`img`) VALUES ('$img')";
    } else {
        $query = "UPDATE `video_table_two` SET `img`='$img' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add3") {
    $img = $_POST["img"];
    $id = $_POST["id"];
    if ($id == "") {
        $query = "INSERT INTO `video_table_three` (`img`) VALUES ('$img')";
    } else {
        $query = "UPDATE `video_table_three` SET `img`='$img' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add4") {
    $otext = $_POST["otext"];
    $btext = $_POST["btext"];
    $text = $_POST["text"];
    $htext = $_POST["htext"];
    $id = $_POST["id"];
    $update_query = "UPDATE `video_table_four` SET `otext`='$otext',`btext`='$btext',`text`='$text',`htext`='$htext' WHERE `id`='$id'";
    $res = mysqli_query($conn, $update_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add5") {
    $img = $_POST["img"];
    $id = $_POST["id"];
    if ($id == "") {
        $query = "INSERT INTO `video_table_five` (`img`) VALUES ('$img')";
    } else {
        $query = "UPDATE `video_table_five` SET `img`='$img' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "add6") {
    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];
    $text3 = $_POST["text3"];
    $id = $_POST["id"];
    $query = "UPDATE `video_table_six` SET `text1`='$text1',`text2`='$text2',`text3`='$text3' WHERE `id`='$id'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete2") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `video_table_two` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete3") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `video_table_three` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete5") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `video_table_five` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit2") {
    $id = $_POST["id"];
    $select_query = "SELECT * FROM `video_table_two` WHERE `id`='$id'";
    $res = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "edit3") {
    $id = $_POST["id"];
    $select_query = "SELECT * FROM `video_table_three` WHERE `id`='$id'";
    $res = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "edit4") {
    $id = $_POST["id"];
    $select_query = "SELECT * FROM `video_table_four` WHERE `id`='$id'";
    $res = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "edit5") {
    $id = $_POST["id"];
    $select_query = "SELECT * FROM `video_table_five` WHERE `id`='$id'";
    $res = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "show_data_by_id") {
    $id = $_POST["id"];
    if ($id == "empty") {
        $fetch_byid_query = "SELECT * FROM `video_table_six`";
    } else {
        $fetch_byid_query = "SELECT * FROM `video_table_six` WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}
