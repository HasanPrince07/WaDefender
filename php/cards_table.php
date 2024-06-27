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
                        				<th>Title1</th>
                                        <th>Action</th>
                        			</tr>
                        		</thead>
                        		<tbody>';
    $query = "SELECT * FROM `cards_table` ORDER BY 1 DESC";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($res)) {
            $output .= '<tr>
                        				<td>' . $i++ . '</td>
                        				<td>' . $row["title1"] . '</td>
                                        <td><a style="margin-right: 10px;" href="cardspageshow.php?' . $row["id"] . '"><button class="btn btn-primary" id="' . $row["id"] . '" >SHOW MORE</button></a><a href="cardspage.php?' . $row["id"] . '"><button class="btn btn-success" id="' . $row["id"] . '" >EDIT</button></a></td>
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
