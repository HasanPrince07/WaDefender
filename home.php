<?php
require "php/connect.php";

$query = "SELECT * FROM `header_table`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$header_warning_color = $row["header_warning_color"];

$query = "SELECT * FROM `web_color`";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$bg_color = $row["bg_color"];
$btn_color1 = $row["btn_color1"];
$btn_color2 = $row["btn_color2"];
$btn_txt_color = $row["btn_txt_color"];
$shadow_color = $row["shadow_color"];
$hover_btn_color_before = $row["hover_btn_color_befor"];
$hover_btn_color_after = $row["hover_btn_color_after"];
$hover_btn_txt_color_before = $row["hover_btn_txt_color_befor"];
$hover_btn_txt_color_after = $row["hover_btn_txt_color_after"];
$section_heading_color = $row["section_heading_color"];
$border_color = $row["border_color"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wa Defender</title>
    <!-- bootstrap_css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap_icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --bg-color: <?php echo $bg_color ?>;
            --btn_color: <?php echo $btn_color1 ?>, <?php echo $btn_color2 ?>;
            --btn_txt_color: <?php echo $btn_txt_color ?>;
            --shadow_color: <?php echo $shadow_color ?>;
            --hover_btn_color_befor: <?php echo $hover_btn_color_before ?>;
            --hover_btn_color_after: <?php echo $hover_btn_color_after ?>;
            --hover_btn_txt_color_befor: <?php echo $hover_btn_txt_color_before ?>;
            --hover_btn_txt_color_after: <?php echo $hover_btn_txt_color_after ?>;
            --border_color: <?php echo $border_color?>;
        }

        /* .bg_main_blue {
            background-color: #181a40;
        } */
        /* #181a40, #F38B28, #f2295b, #3d428a */

        #header {
            position: fixed;
            top: 0px;
            right: 0px;
            left: 0px;
            background-color: var(--bg-color);
        }

        #header .borderColor {
            border-bottom: 2px solid var(--border_color);
        }


        #empty_div {
            background-color: var(--bg-color);
        }


        #option {
            background-color: var(--bg-color);
        }

        #option img {
            width: 60px;
        }


        #banner {
            background-color: var(--bg-color);
        }

        #banner .borderColor{
            border: 2px solid var(--border_color);
        }

        #banner img {
            width: 100%;
        }

        #banner .bannerWallDiv {
            box-shadow: 0px 0px 30px 2px var(--shadow_color);
        }

        #banner .banner_btn_div {
            height: 80px;
        }

        #banner button {
            background: linear-gradient(to right, var(--btn_color));
            color: var(--btn_txt_color);
            width: 300px;
        }

        #banner button:hover {
            font-size: 14px;
            width: 270px;
            transition-duration: 0.3s;
            transition-property: width, font-size;
        }


        #cards {
            background-color: var(--bg-color);
        }

        #cards img {
            width: 100%;
        }


        #service {
            background-color: var(--bg-color);
        }

        #service .borderColor{
            border: 2px solid var(--border_color);
        }

        #service .serviceWallDiv {
            box-shadow: 0px 0px 20px 2px var(--shadow_color);
        }

        #service img {
            width: 100px;
        }

        #service button {
            background: linear-gradient(to right, var(--btn_color));
            color: var(--btn_txt_color);
            font-size: 25px;
        }

        #service button:hover {
            margin: 4.5px 20px;
            font-size: 22px;
            transition-duration: 0.3s;
            transition-property: margin, font-size;
        }


        #services {
            background-color: var(--bg-color);
        }

        #services .borderColor{
            border: 2px solid var(--border_color);
        }

        #services .servicesWallDiv {
            box-shadow: 0px 0px 20px 2px var(--shadow_color);
        }

        #services img {
            height: 90px;
        }


        #career {
            background-color: var(--bg-color);
        }

        #career .borderColor{
            border: 2px solid var(--border_color);
        }

        #career .careerWallDiv {
            box-shadow: 0px 0px 20px 2px var(--shadow_color);
        }

        #career img {
            height: 200px;
        }

        #career button {
            background: linear-gradient(to right, var(--btn_color));
            color: var(--btn_txt_color);
            font-size: 25px;
        }

        #career button:hover {
            margin: 4.5px 20px;
            font-size: 22px;
            transition-duration: 0.3s;
            transition-property: margin, font-size;
        }


        #features {
            background-color: var(--bg-color);
        }

        #features .borderColor{
            border: 2px solid var(--border_color);
        }

        #features .featureWallDiv {
            box-shadow: 0px 0px 20px 2px var(--shadow_color);
        }

        #features img {
            width: 100px;
        }


        #video {
            background-color: var(--bg-color);
        }

        #video .borderColor{
            border: 2px solid var(--border_color);
        }

        #video img {
            width: 100%;
        }

        #video .videoWallDiv {
            box-shadow: 0px 0px 20px 2px var(--shadow_color);
        }

        #video button {
            background: linear-gradient(to right, var(--btn_color));
            color: var(--btn_txt_color);
            font-size: 25px;
        }

        #video button:hover {
            margin: 4.5px 20px;
            font-size: 22px;
            transition-duration: 0.3s;
            transition-property: margin, font-size;
        }


        #bonus {
            background-color: var(--bg-color);
        }

        #bonus .borderColor{
            border: 2px solid var(--border_color);
        }

        #bonus .borderColor2{
            border-bottom: 2px solid var(--border_color);
        }

        #bonus .borderColor3{
            border: 2px dotted var(--border_color);
        }

        #bonus .bonusWallDiv {
            box-shadow: 0px 0px 20px 2px var(--shadow_color);
        }

        #bonus img {
            width: 100%;
        }

        #bonus button {
            background-color: var(--hover_btn_color_befor);
            color: var(--hover_btn_txt_color_befor);
        }

        #bonus button:hover {
            background-color: var(--hover_btn_color_after);
            color: var(--hover_btn_txt_color_after);
        }


        #footer {
            background-color: var(--bg-color);
            position: fixed;
            bottom: 0px;
            left: 0px;
            right: 0px;
        }

        #footer .borderColor{
            border-top: 2px solid var(--border_color);
        }

        #footer .borderColor2{
            border: 2px solid var(--border_color);
        }

        #footer button {
            background: linear-gradient(to right, var(--btn_color));
            color: var(--btn_txt_color);
        }
    </style>
</head>

<body onload="setInterval(myFun,100)">

    <?php
    include_once("include/header.php");
    include_once("include/upperEmptyDiv.php");
    include_once("include/option.php");
    include_once("include/banner.php");
    include_once("include/cards.php");
    include_once("include/service.php");
    include_once("include/services.php");
    include_once("include/career.php");
    include_once("include/features.php");
    include_once("include/video.php");
    include_once("include/bonus.php");
    include_once("include/downEmptyDiv.php");
    include_once("include/footer.php");
    ?>

</body>

<?php
require "php/connect.php";
$fetch_query = "SELECT * FROM `banner_table_two`";
$res = mysqli_query($conn, $fetch_query);
$row = mysqli_fetch_array($res);
$main_title = $row["main_title"];
?>

<script>
    a = "<?php echo $main_title ?>";
    b = "";
    i = 0;

    function myFun() {
        if (i == a.length) {
            b = ""
            document.getElementById("floating_txt").innerText = b
            i = 0
        } else {
            b = b + a.charAt(i)
            document.getElementById("floating_txt").innerText = b
            i++
        }
    }
</script>

</html>