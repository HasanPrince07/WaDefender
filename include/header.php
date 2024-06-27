<?php
require "php/connect.php";
$fetch_query = "SELECT * FROM `header_table`";
$res = mysqli_query($conn, $fetch_query);
$row = mysqli_fetch_array($res);
$header_title = $row["header_title"];
?>

<section id="header">
    <div class="container_fluid borderColor">
        <div class="row m-0">
            <div class="col-md-12">
                <p class="fw-bold fs-2 text-center my-2 text-white"><?php echo $header_title ?></p>
            </div>
        </div>
    </div>
</section>