<?php

$target_dir = "C:/xampp/htdocs/Build/Assorted Project/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// echo $imageFileType;
if (isset($_POST["submit"])) {
    $check = getimagesize(($_FILES["filesToUpload"]["tmp_name"]));
    if ($check !== false) {
        echo "File is an Image -" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "file Is Not an Image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry File already exist.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry your file is to Large.";
    $uploadOk = 0;
}

if (
    $imageFileType != "jpg" && $imageFileType != "png" &&
    $imageFileType != "jpeg" && $imageFileType = "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "sorry your file was not Uploaded";
} else {
    if (move_uploaded_file(
        $_FILES["fileToUpload"]["tmp_name"],
        $target_file
    )) {
        echo "the file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded";
    } else {
        echo "<br>";
        echo " Sorry , there was an error uploading your file";
    }
}
