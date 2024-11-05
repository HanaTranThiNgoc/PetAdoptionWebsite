<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $id_card = $_POST["id_card"];
    $place = $_POST["place"];
    
require_once("config.php");
 
    // Cập nhật thông tin vào bảng user_info
    $user_id = $_SESSION['Id'];
    $sql1 = "UPDATE user_info SET user_name='$name', address='$address' WHERE id='$user_id'";
    if ($conn->query($sql1) === FALSE) {
        echo "Error updating user info: " . $conn->error;
    }

    // Thêm thông tin vào bảng contact_info
    $sql2 = "INSERT INTO contact_info (user_id, phonenumber, id_card, place) VALUES ( $user_id,'$phone', '$id_card', '$place')";
    if ($conn->query($sql2) === FALSE) {

        echo "Error adding contact info: " . $conn->error;
    }
    $_SESSION["Phone"] = $row["phonenumber"];

    header("Location: sucessful.php?pet_id=$pet_id&user_id=$user_id");
    exit;
}


mysqli_close($conn);
?>
