<?php

require_once 'config.php';

$id = $_POST['id_pet'];
$user_id = $_POST['sessionid'];
// Thực hiện insert dữ liệu vào database
$sql = "INSERT INTO fav_pet (user_id, pet_id) VALUES ('$user_id', '$id')";
if (mysqli_query($conn, $sql)) {
    echo "Thêm vào danh sách yêu thích thành công!";
} else {
    echo "Lỗi: ";
}

// Đóng kết nối database
mysqli_close($conn);
?>