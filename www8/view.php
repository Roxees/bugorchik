
<form action="index.php" method="post">
<?php
if(isset($_GET['image'])) {
    $image = $_GET['image'];
    $imagePath = 'uploads/' . $image;

    // Проверяем, существует ли файл и является ли он изображением
    if(file_exists($imagePath) && in_array(strtolower(pathinfo($imagePath, PATHINFO_EXTENSION)), ['jpg', 'png', 'jpeg'])) {
        echo "<img src='" . htmlspecialchars($imagePath) . "' />";
    } else {
        echo "Image not founded";
    }
}
?>