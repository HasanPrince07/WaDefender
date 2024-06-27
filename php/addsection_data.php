<?php

require "connect.php";

function showfn()
{

    require "connect.php";

    $output = "";
    $output .= "<label>Section Name</label>
    <select class='form-control' name='section_name' id='section_name'>";
    $select_query = "SELECT `page_name` FROM `pagedata_table`";
    $res = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
            $output .= '
    <option>' . $row[0] . '</option>';
        }
    }
    $output .= "</select>";
    echo $output;
}

if ($_POST["action"] == "show") {
    showfn();
}