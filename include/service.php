<?php
require "php/connect.php";
$query = "SELECT * FROM `service_table_two`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$rprice = $row["rprice"];
$oprice = $row["oprice"];
$otext = $row["otext"];
$btext = $row["btext"];
$text = $row["text"];
?>

<section id="service">
    <div class="container_fluid">
        <div class="row m-0 py-4">
            <?php
            $query = "SELECT * FROM `service_table_one`";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($res)) {
                $output = '<div class="col-md-3 px-3 my-md-0 my-2">
                <div class="borderColor py-3 rounded serviceWallDiv">
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
            <div class="col-md-3"></div>
            <div class="col-md-6 text-white">
                <p class="m-0 text-center fs-1 fw-bold"><?php echo $rprice ?></p>
                <p class="m-0 text-center fs-2 fw-bold"><?php echo $oprice ?></p>
                <p class="text-white fw-bold text-center mt-3"><?php echo $otext ?></p>
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
                <p class="fw-bold fs-4 text-center my-2 text-white"><?php echo $text ?></p>
            </div>
        </div>
    </div>
</section>