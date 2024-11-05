<?php
 session_start(); 
    require_once("config.php");
        $user_id = $_SESSION['Id'];
        // $_SESSION["Pet_id"] = $_GET['id'];
        // $id=$_SESSION["Pet_id"];
        if(isset($_POST["sent"])) {
            $id = $_POST['id'];
            $answer1 = $_POST['answers1'];
            // $answer2 = $_POST['answers2'];
            // $answer3 = $_POST['text3'];
            // $answer4 = $_POST['answers4'];
            // $answer5 = $_POST['answers5'];
            // $answer6 = $_POST['answers6'];
            // $answer7 = $_POST['text7'];
            // $answer8 = $_POST['text8'];
            // $answer9 = $_POST['answers9'];
        // $sql2 = "INSERT INTO adoption (user_id, pet_id, answer1, answer2, answer3,answer4,answer5,answer6,answer7,answer8,answer9) 
        // VALUES ('$user_id', '$id', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9')";
        //   if ($conn->query($sql2) === TRUE) {
            var_dump($answer1);
        // } else {
        //     echo "Lỗi: " . $sql2 . "<br>" . $conn->error;
        // }
        
        // Đóng kết nối
        $conn->close();
    }   
        ?>