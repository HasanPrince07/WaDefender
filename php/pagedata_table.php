<?php

require "connect.php";

function showfn()
{

    require "connect.php";

    $output = "";
    $output .= '<table class="table table-bordered text-center">
                        		<thead>
                        			<tr>
                                        <th>select</th>
                        				<th>S.No.</th>
                        				<th>Page Name</th>
                                        <th>Add More</th>
                                        <th>Lead Generate</th>
                                        <th>Page Status</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `pagedata_table` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            if ($row["lead_generate"] == 1) {
                $lead_generate = "yes";
                $lead_color = "btn-success";
            } else {
                $lead_generate = "no";
                $lead_color = "btn-danger";
            }
            if ($row["page_status"] == 1) {
                $page_status = "public";
                $page_color = "btn-danger";
            } else {
                $page_status = "private";
                $page_color = "btn-success";
            }
            $output .= '<tr>
                                        <td><input class="select_ids" value=' . $row["id"] . ' type="checkbox"/></td>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["page_name"] . '</td>
                                        <td><a href="pagedata_addmore.php?' . $row["id"] . '" ><button class="btn btn-primary">click</button></a></td>
                                        <td><button class="btn ' . $lead_color . ' lead_generate" id="' . $row["id"] . '">' . $lead_generate . '</button></td>
                                        <td><button class="btn ' . $page_color . ' page_status" id="' . $row["id"] . '">' . $page_status . '</button></td>
                                        <td><a href="pagedata_add.php?' . $row["id"] . '" ><button class="btn btn-success edit" id="' . $row["id"] . '" >EDIT</button></a> || <button class="btn btn-danger delete" id="' . $row["id"] . '" >DELETE</button></td>
                        			</tr>';
        }
    } else {
        $output .= '<tr><td style="text-align:center" colspan="6">No Data Found</td></tr>';
    }
    $output .= '</tbody>
                        	</table>';
    echo $output;
}

if ($_POST["action"] == "show") {
    showfn();
}

if ($_POST["action"] == "add") {
    $page_name = $_POST["page_name"];
    $tagline = $_POST["tagline"];
    $short_description = $_POST["short_description"];
    $long_description = $_POST["long_description"];
    $img = $_POST["img"];
    $lead_generate = $_POST["lead_generate"];
    $page_status = $_POST["page_status"];
    $button_label = $_POST["button_label"];
    $button_url = $_POST["button_url"];
    $button_success_url = $_POST["button_success_url"];
    $whatsapp_number = $_POST["whatsapp_number"];
    $facebook_page_url = $_POST["facebook_page_url"];
    $instagram_page_url = $_POST["instagram_page_url"];
    $youtube_channel_url = $_POST["youtube_channel_url"];
    $background_color_code = $_POST["background_color_code"];
    $text_color_code = $_POST["text_color_code"];
    $first_color_code = $_POST["first_color_code"];
    $second_color_code = $_POST["second_color_code"];
    $third_color_code = $_POST["third_color_code"];
    $meta_tag = $_POST["meta_tag"];
    $keywords = $_POST["keywords"];
    $meta_description = $_POST["meta_description"];
    $fevicon = $_POST["fevicon"];
    $page_type = $_POST["page_type"];
    $cost = $_POST["cost"];
    $discount = $_POST["discount"];
    $coupon_code = $_POST["coupon_code"];
    $id = $_POST["id"];
    if ($lead_generate == "yes") {
        $new_lead_generate = 1;
    } else {
        $new_lead_generate = 0;
    }
    if ($page_status == "public") {
        $new_page_status = 1;
    } else {
        $new_page_status = 0;
    }
    if ($page_type == "paid") {
        $new_page_type = 1;
    } else {
        $new_page_type = 0;
    }
    if ($id == "") {
        $query = "INSERT INTO `pagedata_table`(`page_name`, `tagline`, `short_description`, `long_description`, `thumbnail_image`, `background_color_code`, `text_color_code`, `first_color_code`, `second_color_code`, `third_color_code`, `meta_tag`, `keywords`, `meta_description`, `fevicon`, `lead_generate`, `page_status`, `button_label`, `button_url`, `button_success_url`, `page_type`, `cost`, `discount`, `coupon_code`, `whatsapp_number`, `facebook_page_url`, `instagram_page_url`, `youtube_channel_url`) VALUES ('$page_name','$tagline','$short_description','$long_description','$img','$background_color_code','$text_color_code','$first_color_code','$second_color_code','$third_color_code','$meta_tag','$keywords','$meta_description','$fevicon','$new_lead_generate','$new_page_status','$button_label','$button_url','$button_success_url','$new_page_type','$cost','$discount','$coupon_code','$whatsapp_number','$facebook_page_url','$instagram_page_url','$youtube_channel_url')";
    } else {
        $query = "UPDATE `pagedata_table` SET `page_name`='$page_name',`tagline`='$tagline',`short_description`='$short_description',`long_description`='$long_description',`thumbnail_image`='$img',`background_color_code`='$background_color_code',`text_color_code`='$text_color_code',`first_color_code`='$first_color_code',`second_color_code`='$second_color_code',`third_color_code`='$third_color_code',`meta_tag`='$meta_tag',`keywords`='$keywords',`meta_description`='$meta_description',`fevicon`='$fevicon',`lead_generate`='$new_lead_generate',`page_status`='$new_page_status',`button_label`='$button_label',`button_url`='$button_url',`button_success_url`='$button_success_url',`page_type`='$new_page_type',`cost`='$cost',`discount`='$discount',`coupon_code`='$coupon_code',`whatsapp_number`='$whatsapp_number',`facebook_page_url`='$facebook_page_url',`instagram_page_url`='$instagram_page_url',`youtube_channel_url`='$youtube_channel_url' WHERE `id`='$id'";
    }
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "delete") {
    $id = $_POST["id"];
    $delete_query = "DELETE FROM `pagedata_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $delete_query);
    if ($res) {
        echo "DONE";
    }
}

if ($_POST["action"] == "show_data_by_id") {
    $id = $_POST["id"];
    $fetch_byid_query = "SELECT * FROM `pagedata_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_byid_query);
    $row = mysqli_fetch_array($res);
    echo json_encode($row);
}

if ($_POST["action"] == "delete_all") {
    $delete_all_query = "DELETE FROM `pagedata_table`";
    $res = mysqli_query($conn, $delete_all_query);
}

if ($_POST["action"] == "delete_by_ids") {
    $ids = json_decode($_POST["ids"]);
    $delete_by_id = "DELETE FROM `pagedata_table` WHERE `id` IN (" . implode(",", $ids) . ")";
    $res = mysqli_query($conn, $delete_by_id);
    echo "DONE";
}

if ($_POST["action"] == "lead_generate") {
    $id = $_POST["id"];
    $fetch_page_query = "SELECT lead_generate FROM `pagedata_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_page_query);
    $row = mysqli_fetch_array($res);
    $lead_generate = $row["lead_generate"];
    if ($lead_generate == 0) {
        $new_lead_generate = 1;
    } else {
        $new_lead_generate = 0;
    }
    $update_query = "UPDATE `pagedata_table` SET `lead_generate`='$new_lead_generate' WHERE `id`='$id'";
    mysqli_query($conn, $update_query);
    echo "DONE";
}

if ($_POST["action"] == "page_status") {
    $id = $_POST["id"];
    $fetch_page_query = "SELECT page_status FROM `pagedata_table` WHERE `id`='$id'";
    $res = mysqli_query($conn, $fetch_page_query);
    $row = mysqli_fetch_array($res);
    $page_status = $row["page_status"];
    if ($page_status == 0) {
        $new_page_status = 1;
    } else {
        $new_page_status = 0;
    }
    $update_query = "UPDATE `pagedata_table` SET `page_status`='$new_page_status' WHERE `id`='$id'";
    mysqli_query($conn, $update_query);
    echo "DONE";
}
