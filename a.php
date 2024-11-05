<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Đây là khối mã PHP
echo "Hello World!";

// Biến trong PHP được khai báo bằng dấu $.
$name = "Han";
echo "My name is " . $name;

// Hàm trong PHP được định nghĩa bằng từ khóa function.
function add($a, $b) {
    return $a + $b;
  }
  
  echo add(2, 3); // Output: 5

// Lệnh điều kiện và vòng lặp, bao gồm if, else, elseif, while, for, foreach và switch.
  $score = 80;
  if ($score >= 90) {
    echo "A";
  } elseif ($score >= 80) {
    echo "B";
  } else {
    echo "C";
  }
?>



</body>
</html>