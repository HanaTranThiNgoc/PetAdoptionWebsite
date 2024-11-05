<?php     
 session_start();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.svg" type="image/icon type">
    
        <?php if(isset($_GET["id"])){
            $id=$_GET["id"];
            $sql="select * from pet where id= $id";
            require_once("config.php");
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
                while($row = mysqli_fetch_assoc($result)) {
                    $_SESSION["Pet_id"] = $row["id"];
        ?> <title><?php echo $row['pet_name']?> </title>
            <?php
            }
            }
                }
                else echo '0 Result';
            ?>
    <style>
    body{
        overflow-x:hidden;
        font-family: 'Barlow', sans-serif !important;
    }
    .banner{
        display: flex;
        height:20rem;
        background-image: url(img/banner/banner-petdetail.jpg);
        background-size: cover; 
        background-position: center;
    }
    .banner-title{
        position:relative;
        top: 14rem;
        left: 14rem;
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
    .pet-detail-avt{
        background-image: url(img/card-bg.png);
        background-size: cover; 
        background-position: center;
        padding: 2rem 2rem;
    }
    .pet-detail-avt-img{
        width: 24rem;
        height: 24rem;
        border-radius: 50%;
        object-fit: cover;
    }
    .pet-detail-info-list li{
        list-style: none;
    }
    .list-group-item h2{
        color: #69594D;
        font-weight: bold;
    }
    .list-group-item {
        font-size: 1.05rem;
    }
    .ap-detail {
        padding:0;
    }
    .ap-detail li{
        list-style: none;
        padding:0 0 0.5rem 0;
    }
    .ap-title h4{
        padding-top: 2rem;
        color: #69594D;
        font-weight: 500;
    }
    .small-divider-left{
        width: 10rem;
        position: relative;
        top: 0.1rem;
        left:0;
        margin:0 0 0.5rem 0 ;
        border-width: 2px;
    }
    .ap-note p{
        color: #BD0505;
        font-weight:500;
        font-size:1.1rem;
        text-decoration:underline;
    }
    .condition{
        background-color: rgb(239, 228, 218, 0.5);
        padding: 1rem;
        position: relative;
        top: 2rem;
        border-radius: 1rem;
    }
    .condition p{
        font-size:1.3rem;
    }
    .condition-detail li{
        list-style-image: url(Paw.svg);
    }
    .badge-primary{
        background-color: #69594D !important;
        color: white;
    }
    .btn-primary{
        background-color: #69594D !important;
        color: white;
        border: 2px solid white !important;
    }
    .shopee-link img{ 
        width:100%;
        object-fit:cover;
    }

    .more-pet-gallery-title {
        display: flex;
        align-items: center;
        margin: 2rem 2rem;
    }
    .more-pet-gallery-title h3{
        margin:auto;
        color: #69594D;
        font-weight: 600;
    }
    .more-pet-card-img img{
        width: 100%;
        object-fit: cover;
        height: 210px;
        
    }
    .more-pet-adopt:hover .more-pet-card-img img{
        transform: scale(0.95); 
        transition: all 0.3s ease-in-out;

    }
    .more-pet-adopt:hover{
        background-image: url(img/card-bg-2.png);
        background-size: auto; 
        background-position: center;
        transition: all 0.3s ease-in-out;
    }
    .more-pet-card-img{
        height:100%;
    }
    .more-pet-card{
        margin: 0.5rem 0.5rem;
    }
    .more-pet-adopt{
        background-image: url(img/card-bg.png);
        background-size: auto; 
        background-position: center;
    }
    .more-pet-card-caption h4{
        margin-top: 0.5rem;
    }
    /* .more-img{
        min-height:100vh;
        position:relative;
    }
    .more-img .more-img-container{
        display: flex;
        flex:wrap;
        gap:15px;
        justify-content:center;
        padding:10px;
    }
    .more-img .more-img-container .image{ 
        height: 200px;
        width: 300px;
    } */
    #fav-icon{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height:50px;
        background-color: rgb(188,188,188,0.4);
        border-radius:50%;
        position: absolute;
        z-index: 1000;
        top: 1.5rem;
        right:2.5rem;
        cursor:pointer;
    }
    #fav-icon svg{
        padding:2px 1px 1px 1px;
        fill: rgb(255,255,255,0.8);
        width: 35px;
        height:35px;
    }
    #fav-icon:hover{
        background-color: rgb(222,0,67,0.1);
    }
    #fav-icon:hover svg{
        fill: rgb(222,0,67,0.5);
    }
    </style>
</head>
<body>
<!--Navigation-->
    <div class="header-top">
            <?php require_once("navbar.php"); ?>
    </div>
<!-- headerbottom -->
    <div class="header-bottom">
        <div class="banner">
            <div class="banner-title">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="adopt.php">Nhận nuôi</a></li>
                    <li class="breadcrumb-item active">
                        <?php if(isset($_GET["id"])){
                            $id=$_GET["id"];
                            $sql="select * from pet where id= $id";
                            require_once("config.php");
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)>0){ 
                                while($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <?php echo $row['pet_name']?>
                       </li>
                </ul>
            </div>
        </div>
    </div>
<!-- pet detail -->
    <div class="pet-detail container mt-5">
        <div class="wrap-pet-detail row">
            <div class="col-lg-5 p-0">
                <div  id="fav-icon" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
                    </svg>
                </div>
                <div class="pet-detail-avt d-flex justify-content-center">
                    <img class="pet-detail-avt-img" src="img/<?php echo $row['img']?>" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="pet-detail-info pl-3 pt-1">
                    <ul class="pet-detail-info-list list-group">
                        <li class="list-group-item border-0"><h2><?php echo $row['pet_name']?></h2></li>
                        <li class="list-group-item border-0"><strong>GIỚI TÍNH:</strong> <?php echo $row['sex']?></li>
                        <li class="list-group-item border-0"><strong>TUỔI: </strong><?php echo $row['age']?></li>
                        <li class="list-group-item border-0"><strong>GIỐNG: </strong><?php echo $row['breed']?></li>
                        <li class="list-group-item border-0"><strong>VẮC XIN: </strong><?php echo $row['vaccination']?></li>
                        <li class="list-group-item border-0"><strong>TRIỆT SẢN: </strong><?php echo $row['sterilization']?></li>
                        <li class="list-group-item border-0"><strong>MÃ SỐ: </strong><?php echo $row['Code']?></li>
                        <li class="list-group-item border-0"><strong>ĐỊA CHỈ: </strong><?php echo $row['address']?></li>
                        <li>
                            <?php if(isset($_SESSION["User_name"])) {
                                    ?>
                            <a class="btn btn-primary ml-3 mt-1 px-4" href="askforadoption.php?id=<?php echo $row["id"] ?>">Nhận nuôi</a>
                            <?php } else { ?>
                                <a class="btn btn-primary ml-3 mt-1 px-4" href="login.php">Nhận nuôi</a>
                            <?php } ?>
                            </li>
                    </ul>
                </div>
            </div>
            <?php
            }
            }
                }
                else echo '0 Result';
            ?> 
        </div>
    </div>

        <script>
            $(document).ready(function(){
                $("#fav-icon").click(function(){
                    var id_pet = "<?php echo $_SESSION["Pet_id"]?>";
                    var sessionid = "<?php echo $_SESSION["Id"]?>";
                    $.ajax({
                        type: "POST",
                        url: "fav.php",
                        data: { 
                            id_pet: id_pet,
                            sessionid: sessionid
                        },
                        success: function(data){
                            alert(data);
                        }
                    });
                });
            });
        </script> 

<!-- more pic -->
    <!-- <div class="more-img container">
        <div class="more-img-container">
            <div class="image"><img src="img/Be.jpg" alt=""></div>
            <div class="image"><img src="img/Bu.jpg" alt=""></div>
        </div>
    </div> -->

<!-- adoption-process -->
    <div class="container adoption-process">
        <div class="ap-content container-fluid">
            <div class="row">
                <div class="ap-title col-lg-8">
                    <h4>Quy trình nhận nuôi</h4>
                    <hr class="small-divider-left">
                    <ul class="ap-detail list-group">
                        <li class="list-group-item d-flex align-items-center border-0">
                            <span class="badge badge-primary badge-pill mr-2">1</span>Tìm hiểu thông tin các bé đang cần nhận nuôi.</li>
                        <li class="list-group-item d-flex align-items-center border-0">
                            <span class="badge badge-primary badge-pill mr-2">2</span>Đăng nhập và cung cấp thông tin người nhận nuôi: thông tin cá nhân như họ tên, số điện thoại, địa chỉ, email.</li>
                        <li class="list-group-item d-flex align-items-center border-0">
                            <span class="badge badge-primary badge-pill mr-2">3</span>Liên hệ tnv để biết thêm thông tin về các bé hay bé muốn nhận nuôi.</li> 
                        <li class="list-group-item d-flex align-items-center border-0">
                            <span class="badge badge-primary badge-pill mr-2">4</span>Trả lời các câu hỏi để gửi yêu cầu nhận nuôi.</li>
                        <li class="list-group-item d-flex align-items-center border-0">
                            <span class="badge badge-primary badge-pill mr-2">5</span>Tham gia phỏng vấn.</li>
                        <li class="list-group-item d-flex align-items-center border-0">
                            <span class="badge badge-primary badge-pill mr-2">6</span>Ký hợp đồng và thanh toán chi phí nhận nuôi.</li>
                        <li class="list-group-item d-flex align-items-center border-0">
                            <span class="badge badge-primary badge-pill mr-2">7</span>Chăm sóc và bảo vệ thú cưng: người nhận nuôi sẽ được hướng dẫn về cách chăm sóc và bảo vệ thú cưng, bao gồm cách cho ăn, sinh hoạt và điều trị bệnh tật.
                            Thường xuyên cập nhật về tình hình của thú cưng.
                    </ul>
                
                    <div class="ap-note">
                        <p>Lưu ý:</p>
                        <ul class="ap-detail">
                            <li>Khi bắt đầu nhận nuôi, chắc chắn bạn đã sẵn sàng. </li>
                            <li>Phần gửi yêu cầu nhận nuôi phải trả lời những câu hỏi riêng tư, mong bạn hãy kiên nhẫn.</li>
                            <li>Phỏng vấn, ký hợp đồng và thanh toán chi phí nhận nuôi (nếu phỏng vấn được chấp nhận) sẽ được thực hiện trực tiếp tại cơ sở Purrfect Match.</li>
                            <li>Chi phí nhận nuôi của từng bé sẽ khác nhau phụ thuộc vào chi phí y tế trước đây khi giải cứu (chi phí sẽ khác nhau tùy vào tình trạng khi giải cứu), và hỗ trợ 1 phần chi phí giải cứu và nuôi các bé khác.</li>
                            <li>Chi phí nhận nuôi cũng bao gồm chi phí dịch vụ (tiêm phòng, triệt sản) đã thực hiện.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row-lg-12">
                        <div class="condition mb-5">
                            <p class="text-center font-weight-bold">Điều kiện nhận nuôi</p>
                            <ul class="condition-detail ">
                                <li>Tài chính tự chủ và ổn định.</li>
                                <li>Chỗ ở cố định, ưu tiên tại TP Hồ Chí Minh.</li>
                                <li>Cam kết tiêm phòng và triệt sản.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row-lg-12">
                        <div class="shopee-link">
                            <a href="https://shp.ee/gdjkp2u" target="_blank"><img class="shopee-link-img" src="img/banner/donate-banner.png"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- more-pet -->
<div class="more-pet container my-5">
    <div class="wrap-more-pet">
        <div class="more-pet-gallery-title">
            <h3>Bé ngoan chờ chủ</h3>
        </div>
        <div class="more-pet-card-container">
            <div class="row">
                <?php
                    if(isset($_GET["id"])){
                        $id=$_GET["id"];
                        $sql = "SELECT * from pet where id != $id limit 4";
                    require_once "config.php";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                ?> 
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="more-pet-card">    
                        <div class="more-pet-adopt row p-3">
                            <div class="col-12 p-0 ">
                                <div class="more-pet-card-img">
                                    <a href="petdetail.php?id=<?php echo $row["id"] ?>"><img src="img/<?php echo $row["img"];?>"/></a>
                                </div>
                            </div>
                            <div class="col-12 p-0">
                                <div class="more-pet-card-caption">
                                    <h4><?php echo $row["pet_name"];?></h4>
                                    <strong>Giới tính:</strong><?php echo $row["sex"];?><br>
                                    <strong>Tuổi:</strong><?php echo $row["age"];?>
                                </div>
                            </div>
                        </div>         
                    </div>
                </div>
                <?php
                    }
                    }
                }
                    else {
                    echo "0 results";
                    }
                    mysqli_close($conn);                                 
                ?>   
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div>
        <?php require_once("footer.php"); ?>
    </div>
</body>
</html>