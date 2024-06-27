<?php
require "php/connect.php";

$query = "SELECT * FROM `bonus_table_two`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$b2_title = $row["title"];
$b2_desc = $row["desc"];
$b2_bg_color = $row["bg_color"];
$b2_rate = $row["rate"];
$b2_text = $row["text"];

$query = "SELECT * FROM `bonus_table_four`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$b4_btn_text = $row["btn_text"];
$b4_hone = $row["hone"];
$b4_htwo = $row["htwo"];
$b4_descone = $row["descone"];
$b4_desctwo = $row["desctwo"];

?>

<section id="bonus">
    <div class="container_fluid">
        <div class="row m-0">
            <?php
            $query = "SELECT * FROM `bonus_table_one`";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_array($res)) {
                    $output = '<div class="col-md-3 my-md-3 my-2">
                <div class="borderColor p-2 rounded bonusWallDiv">
                    <div class="bg-danger">
                        <p class="text-white fs-5 fw-bold text-center">' . $row["title"] . '</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="images/' . $row["img"] . '" alt="...">
                    </div>
                    <div style="height:60px" class="d-flex align-items-center justify-content-center">
                        <p class="text-white px-2 fw-bold text-center m-0 mt-2 fs-5">' . $row["text"] . '</p>
                    </div>
                </div>
            </div>';
                    echo $output;
                }
            } else {
                $output = '<h2 class="text-center text-white" >No Data Here</h2>';
                echo $output;
            }
            ?>
        </div>
        <div class="row m-0 p-3">
            <div style="background-color: <?php echo $b2_bg_color ?>" class="col-md-12 text-white py-3 fw-bold">
                <p class="mb-0 mt-2"><?php echo $b2_title ?></p>
                <p><?php echo $b2_desc ?></p>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-12">
                <p class="text-warning text-center fs-1 fw-bold m-0"><?php echo $b2_rate ?></p>
                <p class="text-white text-center fs-5 fw-bold"><?php echo $b2_text ?></p>
            </div>
        </div>
        <div class="row m-0 px-3">
            <div class="col-md-12">
                <?php
                $query = "SELECT * FROM `bonus_table_three`";
                $res = mysqli_query($conn, $query);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $output = '' . $row["title"] . '';
                        echo $output;
                    }
                } else {
                    $output = '<h2 class="text-center text-white" >No Data Here</h2>';
                    echo $output;
                }
                ?>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <button class="btn form-control"><?php echo $b4_btn_text ?></button>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row m-0 px-3">
            <div class="col-md-12 borderColor2 pb-2">
                <p class="text-center fs-4 fw-bold text-white my-2"><?php echo $b4_hone ?></p>
            </div>
        </div>
        <div class="row m-0 px-3">
            <div class="col-md-12 borderColor3 my-3 rounded-pill">
                <p class="my-2"><?php echo $b4_htwo ?></p>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-12 text-center text-white">
                <p class="m-0"><?php echo $b4_descone ?></p>
                <p class="mt-3"><?php echo $b4_desctwo ?></p>
            </div>
        </div>
    </div>
</section>