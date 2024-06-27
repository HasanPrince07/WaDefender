<?php

require "php/connect.php";
$query = "SELECT * FROM `cards_table`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$title1 = $row["title1"];
$title2 = $row["title2"];
$title3 = $row["title3"];
$text1 = $row["text1"];
$text2 = $row["text2"];
$text3 = $row["text3"];
$img1 = $row["img1"];
$img2 = $row["img2"];

?>

<section id="cards">
    <div class="container_fluid">
        <div class="row m-0 py-2">
            <div class="col-md-6">
                <p class="fw-bold my-2"><?php echo $title1 ?></p>
            </div>
            <div class="col-md-6">
                <p class="fw-bold my-2"><?php echo $title2 ?></p>
            </div>
        </div>
        <div class="row m-0 py-2">
            <div class="col-md-6">
                <p class="fw-bold my-2"><?php echo $title3 ?></span></p>
            </div>
            <div class="col-md-6">
                <img src="images/<?php echo $img1 ?>" alt="...">
            </div>
        </div>
        <div class="row m-0 py-4">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <img src="images/<?php echo $img2 ?>" alt="...">
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row m-0">
            <P class="text-white fw-bold text-center"><?php echo $text1 ?></P>
            <p class="text-white fw-bold text-center"><?php echo $text2 ?></p>
            <p class="text-white fw-bold text-center"><?php echo $text3 ?></p>
        </div>
    </div>
</section>