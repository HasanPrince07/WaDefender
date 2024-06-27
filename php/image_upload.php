<?php
//Image Upload
if ($_FILES["file"]["name"] != '' && $_POST["action"] == 'ajax_image_upload') {
     $test = explode('.', $_FILES["file"]["name"]);
     $ext = end($test);
     $name = rand(1, 9999999) . '.' . $ext;
     $location = '../images/' . $name;
     move_uploaded_file($_FILES["file"]["tmp_name"], $location);
     echo '<img  src="images/' . $name . '" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img" value="' . $name . '"/>';
}

//Image Upload
if ($_FILES["file"]["name"] != '' && $_POST["action"] == 'ajax_image_upload2') {
     $test = explode('.', $_FILES["file"]["name"]);
     $ext = end($test);
     $name = rand(1, 9999999) . '.' . $ext;
     $location = '../images/' . $name;
     move_uploaded_file($_FILES["file"]["tmp_name"], $location);
     echo '<img  src="images/' . $name . '" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img2" value="' . $name . '"/>';
}

//Image Upload
if ($_FILES["file"]["name"] != '' && $_POST["action"] == 'ajax_image_upload3') {
     $test = explode('.', $_FILES["file"]["name"]);
     $ext = end($test);
     $name = rand(1, 9999999) . '.' . $ext;
     $location = '../images/' . $name;
     move_uploaded_file($_FILES["file"]["tmp_name"], $location);
     echo '<img  src="images/' . $name . '" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img3" value="' . $name . '"/>';
}

//Image Upload
if ($_FILES["file"]["name"] != '' && $_POST["action"] == 'ajax_image_upload5') {
     $test = explode('.', $_FILES["file"]["name"]);
     $ext = end($test);
     $name = rand(1, 9999999) . '.' . $ext;
     $location = '../images/' . $name;
     move_uploaded_file($_FILES["file"]["tmp_name"], $location);
     echo '<img  src="images/' . $name . '" class="img img-responsive img-thumbnail" width="200" height="100" />
                <input type="text" name="img" id="img5" value="' . $name . '"/>';
}

// <br><button id="remove_img" class="btn px-5 btn-danger mt-2">remove</button>


//Image Remove
if (!empty($_POST["path"])) {
     if (unlink($_POST["path"])) {
          echo 'Image Deleted';
     }
}
