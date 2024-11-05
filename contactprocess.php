<?php
$name = $_POST["name"];
$email = $_POST["email"];
$title = $_POST["title"];
$content = $_POST["content"];
require_once "config.php";
$sql = "INSERT INTO contacts (contact_name, email, title, content) VALUES ('$name', '$email', '$title', '$content')";
$results = mysqli_query($conn, $sql);

if($results) {
    echo "Cảm ơn bạn đã góp ý";
} else {
    echo "Góp ý không thành công";
}

?>