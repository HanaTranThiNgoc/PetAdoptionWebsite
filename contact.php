<?php     
 session_start();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURRFECT MATCH | Liên hệ</title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.svg" type="image/icon type">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
    body{
        font-family: 'Barlow', sans-serif !important;
        overflow-x:hidden;
    }
    .banner{
        display: flex;
        width:100%;
        height: 28rem;
        background-image: url(img/banner/banner-contact.jpg);
        background-size: cover; 
        background-position: center;
    }
    .banner-title{
        position: relative;
        top: 14rem;
        left: 17rem;
    }
    .breadcrumb{
        background-color: rgb(0, 0, 0,0.3) !important;
    }
    .breadcrumb-item {
        color: rgb(239, 228, 218, 0.8) !important;
        font-weight: 400;
    }
    .breadcrumb-item a{
        color:  #EFE4DA !important;
        font-weight: 500;
    }
    .contact-info li{
        list-style:none;
        margin: 0.7rem;
    }
    .contact-row{
        margin: 3rem 0;
    }
    .contact-row h2{
        color:#69594D;
        font-weight:600;
        margin-bottom:1rem;
    }
    .text-center button{
        padding: 0.5rem 5rem !important;
        background-color: #69594D;
        border:none;
    }
    .notification{
        position:absolute;
        bottom:0;
    }
    #contact-form button{
        background-color: #69594D;
        border: none;
        padding-left:5rem;
        padding-right:5rem;
    }
       
    </style>
</head>
<body>
<!--Navigation-->
<?php require_once("navbar.php"); ?>
<!-- headerbottom -->
<div class="header-bottom">
    <div class="banner">
        <div class="banner-title">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active">FAQs</li>
            </ul>
        </div>
    </div>
</div>
<!-- contact -->
<div class="wrap-contact container">
    <div class="contact-row">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="contact-info">
                    <h2>Thông tin liên hệ</h2>
                    <ul class="info-icon p-0">  
                        <li><i class="fa-solid fa-phone"></i> (+84)72 720 1220</li>
                        <li><i class="fa-solid fa-envelope"></i> nhannuoithucungpurrfectmatch@gmail.com</li>
                        <li><i class="fa-solid fa-location-dot"></i> Thủ Đức ,Việt Nam</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="contact-mail">
                    <h2>Gửi góp ý cho chúng tôi</h2>
                    <form id="contact-form" method="post">
                        <label for="name">Họ và tên:</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Nhập họ và tên" required>
                        
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Nhập email" required>
                        
                        <label for="title">Tiêu đề:</label>
                        <input class="form-control" type="text" name="title" id="title" placeholder="Nhập tiêu đề" required>

                        <label for="content">Nội dung:</label>
                        <textarea class="form-control" name="content" id="content" rows="5" placeholder="Nhập nội dung" required></textarea>
                        <br>
                        <div id="error_msg"></div>
                        <br>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Gửi</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $('#contact-form').submit(function(e) {
        e.preventDefault()

        $.ajax({
            url: 'contactprocess.php',
            data: $(this).serialize(),
            method: 'POST',
            success: function(resp) {
                $('#error_msg').html(resp);
            }
        })
    })
})
</script>
    <!-- footer -->
    <div>
    <?php require_once("footer.php"); ?>
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>