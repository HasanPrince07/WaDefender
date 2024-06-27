<?php
require "php/connect.php";
$query = "SELECT * FROM `services_table_two`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$bonus = $row["bonus"];
$offer = $row["offer"];
$text1 = $row["text1"];
$text2 = $row["text2"];
?>

<section id="services">
    <div class="container_fluid">
        <div class="row m-0">
            <?php
            $query = "SELECT * FROM `services_table_one`";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($res)) {
                $output = '<div class="col-md-4 p-3">
                <div class="borderColor py-3 rounded servicesWallDiv">
                    <div class="d-flex justify-content-center">
                        <img src="images/' . $row["img"] . '" alt="...">
                    </div>
                    <div>
                        <p class="text-white fw-bold text-center m-0 mt-2">' . $row["title"] . '</p>
                    </div>
                </div>
            </div>';
                echo $output;
            }
            ?>
        </div>
        <div class="row m-0">
            <div class="col-md-12">
                <p class="fw-bold fs-4 text-center my-2 text-white"><?php echo $bonus ?></p>
            </div>
        </div>
        <div class="row m-0 mt-4">
            <div class="col-md-12">
                <p class="text-white m-0 fs-5 fw-bold text-center"><?php echo $offer ?></p>
                <p class="text-white m-0 fs-3 fw-bold text-center"><?php echo $text1 ?></p>
                <p style="color: <?php echo $section_heading_color ?>" class="m-0 fs-2 fw-bold text-center"><?php echo $text2 ?></p>
            </div>
        </div>
    </div>
</section>