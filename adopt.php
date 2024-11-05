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
    <title>PURRFECT MATCH | Nhận nuôi</title>
    <style>
        body{
            overflow-x:hidden;
            font-family: 'Barlow', sans-serif !important;
        }
        .banner{
            display: flex;
            width:100%;
            height: 28rem;
            background-image: url(img/banner/banner-nhannuoi.jpg);
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
        .pet-gallery-title {
            display: flex;
            align-items: center;
            margin: 2rem 2rem;
        }
        .pet-gallery-title h3{
            margin:auto;
            color: #69594D;
            font-weight: 600;
        }
        .pet-card-img img{
            width: 100%;
            object-fit: cover;
            height: 210px;
            
        }
        .pet-adopt:hover .pet-card-img img{
            transform: scale(0.95); 
            transition: all 0.3s ease-in-out;

        }
        .pet-adopt:hover{
            background-image: url(img/card-bg-2.png);
            background-size: auto; 
            background-position: center;
            transition: all 0.3s ease-in-out;
        }
        .pet-card-img{
            height:100%;
        }
        .pet-card{
            margin: 0.5rem 0.5rem;
        }
        .pet-adopt{
            background-image: url(img/card-bg.png);
            background-size: auto; 
            background-position: center;
        }
        .pet-card-caption h4{
            margin-top: 0.5rem;
        }
        .wrap-banner-cantadopt{
            margin-top:3rem;
        }
        .banner-cantadopt{
            width:100%;
            height: 14rem;
            background-image: url(img/banner/banner-cantadopt.jpg);
            background-size: cover; 
            background-position: center;
            box-shadow: inset 0 14rem 0 rgba(0, 0, 0, 0.3);
        }
        .banner-cantadopt-title{
            margin-top: 3.5rem;
            font-size: 1.5rem;
            font-weight: 500;
            text-transform: uppercase;
            color: white;
        }
        .banner-cantadopt-btn a{
            background-color: #EFE4DA;
            border-radius: 1rem;
            padding: 0.7rem 2rem;
            color: #69594D;
            font-size: 1.1rem;
            font-weight: 500;
        }
        .banner-cantadopt-btn a:hover{
            color: #69594D; 
            text-decoration: none;
            background-color: white;
        }
        .pagination .page-item .page-link {
            color: #69594D;
            background-color: white;
            border-color: #69594D;
            font-size: 16px;
            
        }

        .pagination .page-item.active .page-link {
            color: #fff;
            background-color: #69594D;
            border-color: #69594D;
        }

        .page-link {
            margin: 10px;
        }

        .fav-icon{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height:45px;
            background-color: rgb(188,188,188,0.4);
            border-radius:50%;
            position: absolute;
            z-index: 1000;
            top: 1.5rem;
            right:1.5rem;
            cursor:pointer;
        }
        .fav-icon svg{
            padding:2px 1px 1px 1px;
            fill: rgb(255,255,255,0.8);
            width: 30px;
            height:30px;
        }
        .fav-icon:hover{
            background-color: rgb(222,0,67,0.1);
        }
        .fav-icon:hover svg{
            fill: rgb(222,0,67,0.5);
        }
        
    </style>
</head>
<body>
<!--Navigation-->
    <div class="header-top">
        <?php require_once("navbar.php");?>
    </div>
<!-- headerbottom -->
    <div class="header-bottom">
        <div class="banner">
            <div class="banner-title">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Nhận nuôi</li>
                </ul>
            </div>
        </div>
    </div>
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
                    <div class="condition">
                        <p class="text-center font-weight-bold">Điều kiện nhận nuôi</p>
                        <ul class="condition-detail ">
                            <li>Tài chính tự chủ và ổn định.</li>
                            <li>Chỗ ở cố định, ưu tiên tại TP Hồ Chí Minh.</li>
                            <li>Cam kết tiêm phòng và triệt sản.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- filter-pet -->
<!-- <div class="filter-form">
    <form method="GET" action="">
        <div class="form-group">
            <label for="pet_type">Loại thú cưng:</label>
            <select name="pet_type" id="pet_type">
                <option value="">-- Chọn loại thú cưng --</option>
                <option value="Chó">Chó</option>
                <option value="Mèo">Mèo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sex">Giới tính:</label>
            <select name="sex" id="sex">
                <option value="">-- Chọn giới tính --</option>
                <option value="Đực">Đực</option>
                <option value="Cái">Cái</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Lọc">
        </div>
    </form>
</div> -->

<!-- pet -->
    <div class="pet-gallery container">
        <div class="pet-gallery-title">
            <h3>Tìm "Purrfect Match" của bạn</h3>
        </div>
       
        <div class="wrap-petlist container-fluid">
            <div class="row">
            <?php
            //Số lượng thú cưng trên mỗi trang
            $num_per_page = 8;

            //Tính tổng số lượng thú cưng trong cơ sở dữ liệu
            $sql = "SELECT COUNT(*) as total FROM pet";
            require_once "config.php";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $total_pages = ceil($row['total'] / $num_per_page);

            //Xác định trang hiện tại
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }

            //Tính vị trí bắt đầu và số lượng thú cưng trên mỗi trang
            $start = ($page - 1) * $num_per_page;
            $sql = "SELECT * from pet LIMIT $start, $num_per_page";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="pet-card">   
  
                    <div class="pet-adopt row p-3">
                        <div class="col-12 p-0 ">
                            <div class="pet-card-img">
                                <a href="petdetail.php?id=<?php echo $row["id"] ?>"><img src="img/<?php echo $row["img"];?>"/></a>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="pet-card-caption">
                                <h4><?php echo $row["pet_name"];?></h4>
                                <strong>Giới tính:</strong><?php echo $row["sex"];?><br>
                                <strong>Loài:</strong><?php echo $row["animal"];?>
                            </div>
                        </div>
                    </div>         
                </div>
                
            </div>
            <?php
                }
                }
                else {
                echo "0 results";
                }
                mysqli_close($conn);                                 
            ?> 
            
            </div>
            <div class="pagination justify-content-center mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                        //Hiển thị các nút phân trang
                        for ($i = 1; $i <= $total_pages; $i++) {
                            //Xác định class của nút trang hiện tại
                            $active = $page == $i ? "active" : "";
                            ?>
                            <li class="page-item <?php echo $active ?>"><a class="page-link" href="?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div>  
    <!-- <script>
        $(document).ready(function(){
            $('.filter-form').submit(function(){
                var pet_type = $('#pet_type').val();
                var sex = $('#sex').val();
                $.ajax({
                    url: 'filter.php',
                    type: 'GET',
                    data: {animal: pet_type, sex: sex},
                    success: function(data){
                        $('.wrap-petlist').html(data);
                    }
                });
                return false;
            });
        });
    </script> -->
<!-- can't adopt -->
    <div class="wrap-banner-cantadopt container-fluid p-0">
        <div class="row banner-cantadopt m-0">
            <div class=" col-12 banner-cantadopt-title text-center">
                <p> Bạn chưa đủ điều kiện để đưa các bé về nhà? Hãy tham gia chương trình ủng hộ nhé. </p>
            </div>
            <div class=" col-12 banner-cantadopt-btn text-center">
                <a href="ungho.php">ỦNG HỘ</a>
            </div>
        </div>
    </div>
<!-- footer -->
<div>
        <?php require_once("footer.php"); ?>
    </div>
</body>
</html>