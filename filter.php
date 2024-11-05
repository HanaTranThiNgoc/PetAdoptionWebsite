<?php
// Lấy tham số bộ lọc và trang hiện tại
$pet_type = isset($_GET['pet_type']) ? $_GET['pet_type'] : '';
$sex = isset($_GET['sex']) ? $_GET['sex'] : '';

// Xử lý câu truy vấn dữ liệu dựa trên các tham số bộ lọc và trang hiện tại
require_once "config.php";
$sql = "SELECT * FROM pet ";

if ($pet_type && !$sex) {
    $sql .= " WHERE animal = '$pet_type'";
} elseif (!$pet_type && $sex) {
    $sql .= " WHERE sex = '$sex'";
} elseif ($pet_type && $sex) {
    $sql .= " WHERE animal = '$pet_type' AND sex = '$sex'";
}
// Thực hiện truy vấn SELECT với câu truy vấn được bổ sung điều kiện WHERE và phần LIMIT/OFFSET
$result = mysqli_query($conn, $sql);

// Trả về kết quả dưới dạng JSON
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
$result = array(
    'data' => $data // Dữ liệu truy vấn
);
header('Content-Type: application/json');
echo json_encode($result);
exit;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>