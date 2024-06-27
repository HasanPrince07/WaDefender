<?php
require "php/connect.php";

$query = "SELECT * FROM `footer_table`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$title = $row["title"];
$tone = $row["tone"];
$ttwo = $row["ttwo"];
$tthree = $row["tthree"];
$btn_text = $row["btn_text"];

?>

<section id="footer">
    <div class="container_fluid borderColor py-3">
        <div class="row m-0">
            <div class="col-md-4">
                <div class="d-flex justify-content-center">
                    <div class="bg-warning rounded-top"><?php echo $title ?></div>
                </div>
                <div class="borderColor2 d-flex justify-content-evenly py-1 rounded-pill">
                    <div class="col-md-4">
                        <p class="text-danger text-center m-0 fs-5 fw-bold">00</p>
                        <p class="text-white text-center m-0">Hours</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-danger text-center m-0 fs-5 fw-bold">00</p>
                        <p class="text-white text-center m-0">Minutes</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-danger text-center m-0 fs-5 fw-bold">00</p>
                        <p class="text-white text-center m-0">Seconds</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-md-flex d-none justify-content-center align-items-center">
                <div>
                    <p class="my-2"><?php echo $tone ?></p>
                    <p class="my-2"><?php echo $ttwo ?></p>
                    <p class="my-2"><?php echo $tthree ?></p>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-2 d-flex justify-content-center align-items-center">
                <button class="btn text-black rounded-pill px-5"><?php echo $btn_text ?></button>
            </div>
        </div>
    </div>
</section>