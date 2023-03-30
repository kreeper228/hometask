<?php
if (isset($_FILES['file'])) {
    $upload_path = "uploads/";

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $file_pref = strtolower(pathinfo($file_name, PATHINFO_FILENAME));
    $new_file_name = $file_pref . '_' . uniqid() . '.' . $file_ext;

    if (move_uploaded_file($file_tmp, $upload_path . $new_file_name)) {
        echo "Файл додано";
    } else {
        echo "Невдалось додати";
    }
} else {
    echo "Розмір не підходить";

}
echo "<a href='index.php'>Назад</a>";


