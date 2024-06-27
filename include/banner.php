<?php
require "php/connect.php";

$fetch_query = "SELECT * FROM `banner_table_two`";
$res = mysqli_query($conn, $fetch_query);
$row = mysqli_fetch_array($res);
$title = $row["title"];
$img = $row["img"];
$btn_text = $row["btn_text"];
$offer_text = $row["offer_text"];

?>

<section id="banner">
    <div class="container_fluid">
        <div class="row m-0">
            <div class="col-md-12">
                <p class="fw-bold fs-4 text-center my-4 text-white">Latest Version <span id="floating_txt" class="text-info"></span> 1 Year Access</p>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-6 px-4">
                <div class="borderColor p-0 rounded bannerWallDiv">
                    <img src="images/<?php echo $img ?>" alt="...">
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-center text-warning fs-4 fw-bold mt-md-0 mt-2 px-5 mb-1">
                    <?php echo $title ?>
                </p>
                <?php
                $fetch_query = "SELECT * FROM `banner_table_one`";
                $res = mysqli_query($conn, $fetch_query);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $output = "";
                        $output .= '<p class="text-white fw-bold border-bottom border-white border-1 pb-2 my-1"><i class="' . $row["icon"] . ' text-warning fs-5 pe-2"></i> ' . $row["icon_text"] . '</p>';
                        echo $output;
                    }
                }
                ?>
                <div class="d-flex col-md-12 justify-content-center align-items-center banner_btn_div">
                    <button class="btn text-black fw-bold border-0 rounded-pill">
                        <p class="m-0">
                            <i class="bi bi-bag-fill"></i>
                            <?php echo $btn_text ?>
                        </p>
                    </button>
                </div>
                <div>
                    <p class="text-white fw-bold text-center"><?php echo $offer_text ?></p>
                </div>
                <div class="borderColor col-md-12 rounded-pill d-flex justify-content-evenly p-2 mb-md-0 mb-2">
                    <div class="col-md-4 d-flex justify-content-center">
                        <div>
                            <p class="text-danger fs-4 fw-bold m-0 text-center">00</p>
                            <p class="text-white m-0 fw-bold">Hours</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div>
                            <p class="text-danger fs-4 fw-bold m-0 text-center">00</p>
                            <p class="text-white m-0 fw-bold">Minutes</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div>
                            <p class="text-danger fs-4 fw-bold m-0 text-center">00</p>
                            <p class="text-white m-0 fw-bold">Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>