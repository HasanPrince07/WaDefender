<section id="features">
    <div class="container_fluid">
        <div class="row m-0">
            <?php
            $query = "SELECT * FROM `features_table`";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($res)) {
                $output = '<div class="col-md-6 px-3 my-md-3 my-2">
                <div class="borderColor p-3 d-flex align-items-center rounded featureWallDiv">
                    <div class="me-3">
                        <img src="images/' . $row["img"] . '" alt="...">
                    </div>
                    <div>
                        <p class="text-primary fs-5 fw-bold m-0">' . $row["title"] . '</p>
                        <p class="text-white">' . $row["text"] . '</p>
                    </div>
                </div>
            </div>';
                echo $output;
            }
            ?>
        </div>
    </div>
</section>