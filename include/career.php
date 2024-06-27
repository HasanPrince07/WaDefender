<?php
require "php/connect.php";
$query = "SELECT * FROM `career_table_two`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$otext = $row["otext"];
$btext = $row["btext"];
$text1 = $row["text1"];
$text2 = $row["text2"];
?>

<section id="career">
    <div class="container_fluid">
        <div class="row m-0 py-4">
            <?php
            $query = "SELECT * FROM `career_table_one`";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($res)) {
                $output = '<div class="col-md-4 px-3 my-md-3 my-2">
                <div class="borderColor py-3 rounded careerWallDiv">
                    <div class="bg-danger">
                        <p class="text-white fs-5 fw-bold text-center">' . $row["title"] . '</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="images/' . $row["img"] . '" alt="...">
                    </div>
                    <div>
                        <p class="text-white px-2 fw-bold text-center m-0 mt-2">' . $row["text"] . '</p>
                    </div>
                </div>
            </div>';
                echo $output;
            }
            ?>
        </div>
        <div class="row m-0">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-white">
                <p class="text-white fw-bold px-1 text-center mt-3"><?php echo $otext ?></p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row m-0">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button class="btn px-5 text-black fw-bold border-0 rounded-pill">
                    <p class="m-0">
                        <?php echo $btext ?>
                    </p>
                </button>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row m-0">
            <div class="col-md-12">
                <p class="fw-bold fs-4 text-center my-2 text-white"><?php echo $text1 ?></p>
                <p  style="color: <?php echo $section_heading_color ?>" class="fw-bold fs-1 text-center my-2"><?php echo $text2 ?></p>
            </div>
        </div>
    </div>
</section>