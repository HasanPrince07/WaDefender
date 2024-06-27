<?php
require "php/connect.php";

$query = "SELECT * FROM `video_table_one`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$v1_heading_one = $row["heading_one"];
$v1_heading_two = $row["heading_two"];
$v1_offer_text = $row["offer_text"];
$v1_text = $row["text"];
$v1_url = $row["url"];

$query = "SELECT * FROM `video_table_four`";
$res = mysqli_query($conn, $query);
$row4 = mysqli_fetch_array($res);
$v4_otext = $row4["otext"];
$v4_btext = $row4["btext"];
$v4_text = $row4["text"];
$v4_htext = $row4["htext"];

$query = "SELECT * FROM `video_table_six`";
$res = mysqli_query($conn, $query);
$row6 = mysqli_fetch_array($res);
$v6_text1 = $row6["text1"];
$v6_text2 = $row6["text2"];
$v6_text3 = $row6["text3"];

?>

<section id="video">
    <div class="container_fluid">
        <div class="row m-0">
            <div class="col-md-12">
                <p style="color: <?php echo $section_heading_color ?>" class="fw-bold fs-2 text-center my-2"><?php echo $v1_heading_one ?></p>
                <iframe class="borderColor rounded" width="100%" height="696px" src="<?php echo $v1_url ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-12">
                <p class="text-white fs-5 mt-2 fw-bold text-center"><?php echo $v1_offer_text ?></p>
                <p class="text-white fs-4 fw-bold text-center"><?php echo $v1_text ?></p>
            </div>
        </div>
        <div class="row m-0">
            <?php
            $query = "SELECT * FROM `video_table_two`";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_array($res)) {
                    $output = '<div class="col-md-3 p-5">
                    <div class="borderColor rounded videoWallDiv">
                        <img src="images/' . $row["img"] . '" alt="...">
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
        <div class="row m-0">
            <div class="col-md-12">
                <p style="color: <?php echo $section_heading_color ?>" class="fs-2 fw-bold text-center"><?php echo $v1_heading_two ?></p>
            </div>
        </div>
        <div class="row m-0">
            <?php
            $query = "SELECT * FROM `video_table_three`";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_array($res)) {
                    $output = '<div class="col-md-6 p-3">
                    <div class="borderColor rounded videoWallDiv p-2">
                        <img src="images/' . $row["img"] . '" alt="...">
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
        <div class="row m-0">
            <div class="col-md-12">
                <p class="text-white fs-5 fw-bold text-center mt-3"><?php echo $v4_otext ?></p>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button class="btn px-5 text-black fw-bold border-0 rounded-pill">
                    <p class="m-0">
                        <?php echo $v4_btext ?>
                    </p>
                </button>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row m-0">
            <div class="col-md-12">
                <p class="fw-bold fs-4 text-center my-2 text-white"><?php echo $v4_text ?></p>
                <p style="color: <?php echo $section_heading_color ?>" class="fw-bold fs-2 text-center my-2"><?php echo $v4_htext ?></p>
            </div>
        </div>
        <div class="row m-0">
            <?php
            $query = "SELECT * FROM `video_table_five`";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_array($res)) {
                    $output = ' <div class="col-md-6 p-3">
                    <div class="borderColor rounded videoWallDiv p-2">
                        <img src="images/' . $row["img"] . '" alt="...">
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
        <div class="row m-0">
            <div class="col-md-12">
                <p class="mt-3"><?php echo $v6_text1 ?></p>
                <p class="my-2"><?php echo $v6_text2 ?></p>
                <p class="my-2"><?php echo $v6_text3 ?></p>
            </div>
        </div>
    </div>
</section>