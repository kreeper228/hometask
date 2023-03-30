<h3>Сторінка завантаження файлу</h3>

<form action="../upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
<?php
$path = $_SERVER["DOCUMENT_ROOT"] . "/uploads/";
$filesList = scandir($path);
$filesList = array_filter($filesList, fn($file) => $file != "." && $file != "..");
if (!empty($filesList)) {
    foreach ($filesList as $file) {
        echo "<a href='/uploads/$file'>$file</a><br>";
    }
} else {
    echo "Папка порожня";
}
?>
