<?php
require "php/connect.php";
?>

<section id="option">
    <div class="container_fluid">
        <div class="row m-0">
            <div class="col-md-12">
                <p class="fw-bold fs-3 text-center my-3 text-warning">WaDefender - WhatsApp Account Strongness Checker For Bulk Sending - Full Reseller Rights</p>
            </div>
        </div>
        <div class="row m-0">
            <?php
            $fetch_query = "SELECT * FROM `option_table`";
            $res = mysqli_query($conn, $fetch_query);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_array($res)) {
                    $output = "";
                    $output .= '<div class="col-md-3 py-md-0 py-3 d-flex align-items-center justify-content-center">
                    <img src="images/' . $row["img"] . '" alt="...">
                    <p class="text-white fs-5 fw-bold m-0 ps-2">' . $row["title"] . '</p>
                </div>';
                    echo $output;
                }
            }
            ?>
        </div>
    </div>
</section>