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
                        				<th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `user_table` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["username"] . '</td>
                                        <td>' . $row["password"] . '</td>
                                        <td>' . $row["email"] . '</td>
                                        <td><button class="btn btn-success edit" id="' . $row["id"] . '" >EDIT</button></td>
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
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $id = $_POST["id"];
    $insert_query = "UPDATE `user_table` SET `username`='$username', `password`='$password', `email`='$email' WHERE `id`='$id'";
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "edit") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `user_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "check_email") {
    $email = $_POST["email"];
    $query = "SELECT * FROM `user_table`";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    $dbemail = $row["email"];
    if ($dbemail == $email) {
        echo "match";
    } else {
        echo "not_match";
    }
}

if ($_POST["action"] == "reset") {
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    if ($password == $repassword) {
        $query = "UPDATE `user_table` SET `password`='$password'";
        mysqli_query($conn, $query);
    } else {
        echo "not_match";
    }
}
