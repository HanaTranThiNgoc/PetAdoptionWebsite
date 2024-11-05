<?php
session_start(); 
    require_once("config.php");
    $id= $_SESSION['Pet_id'];        
    $user_id = $_SESSION['Id'];
    
    if(isset($_POST["sent"])) {
    if (empty($_POST['answers1'][0]) || empty($_POST['answers2'][0]) || empty($_POST['answers4'][0]) || empty($_POST['answers5'][0]) || empty($_POST['answers6'][0]) || empty($_POST['answers9'][0]) || empty($_POST['text3']) || empty($_POST['text7']) || empty($_POST['text8'])) {
        
        echo "bạn cần điền đầy đủ thông tin!";
    } else {   
        $answer1 = $_POST['answers1'][0];
        $answer2 = $_POST['answers2'][0];
        $answer3 = $_POST['text3'];
        $answer4 = $_POST['answers4'][0];
        $answer5 = $_POST['answers5'][0];
        $answer6 = $_POST['answers6'][0];
        $answer7 = $_POST['text7'];
        $answer8 = $_POST['text8'];
        $answer9 = $_POST['answers9'][0];
    
    $sql2 = "INSERT INTO adoption (user_id, pet_id, answer1, answer2, answer3,answer4,answer5,answer6,answer7,answer8,answer9) 
    VALUES ('$user_id', '$id', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
        if ($conn->query($sql2) === TRUE) {
        header("Location: interview.php?id=$id");
    } else {
        echo "Lỗi: " . $sql2 . "<br>" . $conn->error;
    }
    }    
    // Đóng kết nối
    
} 
$conn->close(); 

?> 