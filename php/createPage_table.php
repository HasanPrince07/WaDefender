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
                        				<th>Page Title</th>
                        				<th>Page Sub Title</th>
                                        <th>Page Meta Tag</th>
                                        <th>Page Keyword</th>
                                        <th>Page Seo Description</th>
                                        <th>Product Name</th>
                                        <th>Background Color</th>
                                        <th>Text Color</th>
                                        <th>First Color</th>
                                        <th>Second Color</th>
                                        <th>Third Color</th>
                                        <th>Icon</th>
                                        <th>Product Status</th>
                                        <th>Page Status</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `createpage` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            if ($row["page_status"] == 0) {
                $page_status = "INACTIVE";
                $page_color = "btn-danger";
            } else {
                $page_status = "ACTIVE";
                $page_color = "btn-success";
            }
            if ($row["product_status"] == 0) {
                $product_status = "PAID";
                $product_color = "btn-danger";
            } else {
                $product_status = "FREE";
                $product_color = "btn-success";
            }
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["page_title"] . '</td>
                        				<td>' . $row["page_sub_title"] . '</td>
                                        <td>' . $row["page_meta_tag"] . '</td>
                                        <td>' . $row["page_keyword"] . '</td>
                                        <td>' . $row["page_seo_description"] . '</td>
                                        <td>' . $row["product_name"] . '</td>
                                        <td>' . $row["background_color"] . '</td>
                                        <td>' . $row["text_color"] . '</td>
                                        <td>' . $row["first_color"] . '</td>
                                        <td>' . $row["second_color"] . '</td>
                                        <td>' . $row["third_color"] . '</td>
                                        <td><img style="width:100px;" src="images/' . $row["icon"] . '" alt="..."/></td>
                                        <td><button class="btn ' . $product_color . ' product_status" id="' . $row["id"] . '">' . $product_status . '</button></td>
                                        <td><button class="btn ' . $page_color . ' page_status" id="' . $row["id"] . '">' . $page_status . '</button></td>
                                        <td><button class="btn btn-danger delete" id="' . $row["id"] . '" >DELETE</button> || <button class="btn btn-success edit" id="' . $row["id"] . '" >EDIT</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="16">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

if ($_POST["action"] == "show") {
    showfn();
}

if ($_POST["action"] == "add") {
    $page_title = $_POST["page_title"];
    $page_sub_title = $_POST["page_sub_title"];
    $page_meta_tag = $_POST["page_meta_tag"];
    $page_keyword = $_POST["page_keyword"];
    $page_seo_description = $_POST["page_seo_description"];
    $product_name = $_POST["product_name"];
    $background_color = $_POST["background_color"];
    $text_color = $_POST["text_color"];
    $first_color = $_POST["first_color"];
    $second_color = $_POST["second_color"];
    $third_color = $_POST["third_color"];
    $third_color = $_POST["third_color"];
    $img = $_POST["img"];
    $id = $_POST["id"];
    $insert_query = "INSERT INTO `createpage` (`page_title`,`page_sub_title`,`page_meta_tag`,`page_keyword`,`page_seo_description`,`product_name`,`background_color`,`text_color`,`first_color`,`second_color`,`third_color`,`icon`) VALUES ('$page_title','$page_sub_title','$page_meta_tag','$page_keyword','$page_seo_description','$product_name','$background_color','$text_color','$first_color','$second_color','$third_color','$img')";
    $res = mysqli_query($conn, $insert_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `createpage` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "all_delete") {
    $all_delete_query = "DELETE FROM `createpage`";
    $res = mysqli_query($conn, $all_delete_query);
    if ($res) {
        echo "ALL DATA DELETE";
    }
}

if ($_POST["action"] == "page_status") {
    $id = $_POST["id"];
    $fetch_page_query = "SELECT page_status FROM `createpage` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_page_query);
    $row = mysqli_fetch_array($res);
    $page_status = $row["page_status"];
    if ($page_status == 0) {
        $new_page_status = 1;
    } else {
        $new_page_status = 0;
    }
    $update_query = "UPDATE `createpage` SET `page_status`='$new_page_status' WHERE `id`='$id'";
    mysqli_query($conn, $update_query);
}

if ($_POST["action"] == "product_status") {
    $id = $_POST["id"];
    $fetch_product_query = "SELECT product_status FROM `createpage` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_product_query);
    $row = mysqli_fetch_array($res);
    $product_status = $row["product_status"];
    if ($product_status == 0) {
        $new_product_status = 1;
    } else {
        $new_product_status = 0;
    }
    $update_query = "UPDATE `createpage` SET `product_status`='$new_product_status' WHERE `id`='$id'";
    mysqli_query($conn, $update_query);
}
