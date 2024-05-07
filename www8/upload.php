<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Проверка, является ли файл изображением
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<center/>File ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " is uploaded.";
            echo "<br><a href='view.php?image=" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "'>Look img</a>";
        } else {
            echo "Error";
        }
    } else {
        echo "Not image.";
    }
}
?>