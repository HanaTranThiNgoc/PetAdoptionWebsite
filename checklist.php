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
    <title>Checklist</title>
</head>
<style>
    body{
            background-color: #f3f6f4 !important;
            overflow-x:hidden;
        }
        .banner{
            display: flex;
            width:100%;
            height: 25rem;
            background-image: url(img/banner/banner-checklist.png);
            background-size: cover; 
            background-position: bottom;
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
        .wrap-fqas{


        }
        .checklist-cover{
            margin:0.5rem 0.9rem 0.5rem 0.5rem;
            padding: 2rem;
            background-color: white !important; 
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            border-radius:10px;
        }
        .checklist-row{
            margin: 3rem 0;
            padding: 2rem 1rem;
        }
        .checklist-row h4{
            color:#69594D;
            font-weight:550;
            text-decoration: underline;
        }
        .checklist-row h5{
            padding-left: 20px;
        }
        .checklist-row h3{
            color:#69594D;
            font-weight:600;
        }
        .checklist-row p{
            font-size: 1.1rem;

        }
        .checklist-img{
            margin-bottom: 1rem;
        }
        .checklist-img img{
            width:100%;
        }
        .col-md-4{
            background-color: #f3f6f4 !important; 
        }
        .adopt-banner{
            margin-top:0.5rem;
            padding: 1rem 1rem 1rem 1rem;
            background-color: white !important; 
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            border-radius:10px;
        }
        .adopt-banner-img img{
            width:100%;
        }
        .adopt-banner-content-btn {
            background-color: #FEBB64;
            margin: 0 6rem;
            padding: 0.4rem 1rem;
            border-radius:10px;
        }
        .adopt-banner-content-btn a{
            color: white;
        }
        .adopt-banner-content-btn:hover a{
            text-decoration: none;
            color: white;
        }
        .adopt-banner-content-btn a:hover{
            text-decoration: none;
            color: white;
        }
        .adopt-banner-content-btn:hover {
            background-color: #FB336F;
        }
        .shopping-banner-img img{
            width:100%;
        }
        .shopping-banner{
            margin-top:1rem;
            padding:2rem;
            background-color: white !important;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            border-radius:10px;
        }
</style>
<body>
<!--Navigation-->
<?php require_once("navbar.php"); ?>
<!-- headerbottom -->
<div class="header-bottom">
    <div class="banner">
        <div class="banner-title">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active">Checklist</li>
            </ul>
        </div>
    </div>
</div> 
<!-- Checklist -->
<div class="wrap-checklist container p-0">
    <div class="checklist-row p-0">
        <div class="row p-0">
            <div class="col-md-8 p-0">
                <div class="checklist-cover">
                    <div class="checklist-title">
                        <h3>Danh sách kiểm tra khi nhận nuôi thú cưng</h3>
                        <p>Chúc mừng bạn đã nhận nuôi thú cưng! 
                            Bạn đang bắt tay vào một mối quan hệ tuyệt vời và bổ ích. 
                            Bởi vì việc nhận nuôi thú cưng mới mang lại rất nhiều thay 
                            đổi cho cả thú cưng và cha mẹ của thú cưng, chúng tôi đã biên 
                            soạn một danh sách kiểm tra để giúp quá trình chuyển đổi diễn ra suôn sẻ nhất có thể.
                        </p>
                    </div>
                    <div class="checklist-img">
                        <img src="img/plan/plan-checklist.jpg" alt="">
                    </div>
                    <div class="checklist-content">
                        <h4>Câu hỏi dành cho tất cả cha mẹ nhận nuôi:</h4>
                            <p>Kinh nghiệm trong việc chăm sóc/nuôi chó/mèo của bạn?</p>
                            <p>Nếu có thể, vui lòng liệt kê bất kỳ vật nuôi nào hiện đang sống trong nhà của bạn</p>
                            <p>Bạn đang muốn nhận nuôi ở độ tuổi nào? </p>
                            <p>Bạn nghĩ mèo có tính cách nào sẽ thích gia đình bạn nhất? </p>
                            <p>Mèo có tính cách nào phù hợp nhất với những gì bạn đang tìm kiếm?</p>
                            <p>Có rất nhiều lời khuyên chúng tôi có thể cung cấp để giúp bạn dễ dàng trong việc nuôi dưỡng.
                                 Bạn sẽ quan tâm đến việc tìm hiểu thêm về điều gì?</p>
                            <p>Điều gì đã thu hút bạn chọn nhận nuôi chó/mèo này?</p>
                            <p>Để giúp chúng tôi sắp xếp phù hợp nhất có thể,
                                vui lòng cho chúng tôi biết ai khác sống trong nhà của bạn và mối quan hệ của bạn với họ? Nếu có thể, 
                                vui lòng bao gồm tuổi của trẻ em trong nhà của bạn*.</p>
                            <p>Bạn biết đến PurrfectMatch như thế nào?</p>
                            <p>Nhiều vật nuôi tại Trung tâm nhận nuôi PM có các nhu cầu về y tế và/hoặc hành vi 
                                và yêu cầu một loại nhà nhất định, được nêu chi tiết trong tiểu sử của vật nuôi. 
                                Nếu bạn chưa đọc tiểu sử của thú cưng này, vui lòng nhấn nút quay lại và tìm hiểu tiểu sử trước khi tiếp tục.</p>

                        <h4>Những ý kiến ​​khác:</h4>
                            <p>Bạn mong đợi con vật cưng của bạn đóng góp gì cho cuộc sống của bạn? 
                                Ví dụ: bạn muốn có một người bạn chạy bộ và đi bộ đường dài hay ý tưởng tập 
                                thể dục của bạn là xem nó trên TV?</p>
                            <p>Nếu bạn đang nghĩ đến việc nhận nuôi một con vật nhỏ, bạn có thời gian 
                            và kiên nhẫn để làm việc với con vật cưng trong suốt thời kỳ thiếu niên của nó, 
                            tính đến việc phá nhà, nhai và mức năng lượng không?. </p>
                        
                        <h4>Cân nhắc về thời gian:</h4>
                            <p>Vật nuôi cần được cho ăn hai đến ba lần một ngày, thường xuyên hơn đối với chó con và cần được cung cấp nước sạch liên tục.</p>           
                            <p>Cha mẹ thú cưng có trách nhiệm nên dành ít nhất một giờ mỗi ngày để quan tâm trực tiếp đến thú cưng của mình. Điều này có thể bao gồm huấn luyện, tập thể dục, chải chuốt và chơi đùa, hoặc với mèo, có thể chỉ là nằm dài trên ghế dài. Chó sẽ cần được đưa ra ngoài bô nhiều lần trong ngày.</p>
                            <p>Thú cưng với nguồn năng lượng dồi dào cần có nhiều thời gian hơn để vận động và đồ chơi tương tác để giúp chúng giải trí.</p>
                            <p>Vật nuôi mắc một số tình trạng bệnh lý nhất định có thể cần được chú ý thêm, bao gồm cả việc tiêm thuốc theo thời gian cụ thể trong trường hợp động vật mắc bệnh tiểu đường.</p>
                            <p>Hãy nhớ rằng vật nuôi được nhận nuôi có thể cần thêm thời gian để gắn kết và trấn an trong những tuần đầu tiên.</p>
                        
                        <h4>Cân nhắc về mua sắm:</h4>
                            <h6>Bạn nên đợi cho đến khi chọn được thú cưng mới trước khi bắt đầu mua sắm vật dụng. Ví dụ: một số vật dụng, chẳng hạn như bát thức ăn và nước hoặc vòng cổ và dây nịt, phụ thuộc vào kích thước của thú cưng mà bạn sẽ nhận nuôi.</h6>           
                            <h6>Những vật dụng cần thiết</h6>
                                <ul>
                                    <li>Chổ ở: Chuồng, nhà, ổ đệm,</li>
                                    <li>Ăn uống: Bát đựng thức ăn - nước, hạt, pate, nước sạch... </li>
                                    <li>Đồ bảo hộ, phục kiện: Dây đeo, bảng tên, vòng cổ,túi vận chuyển,...</li>
                                    <li>Đồ chơi</li>
                                    <li>Sức khỏe: Lược chải, kìm bấm, sữa tắm,...</li>
                                    <li>Quần áo nếu cần thiết</li>
                                </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="adopt-banner" style="text-align: center;">
                            <div class="adopt-banner-img">
                                <img src="img/banner/banner-poster-adopt.png" alt="">
                            </div>
                            <div class="adopt-banner-content">
                                <div class="adopt-banner-content-title my-1">
                                    <h5>Tìm "Purrfect Match" của bạn</h5>
                                </div>
                                <div class="adopt-banner-content-btn ">
                                    <a href="adopt.php">Bắt đầu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                
                    <div class="col-12">
                       <div class="shopping-banner">
                            <div class="shopping-banner-img">
                                <img src="img/banner/donate-banner.png" alt="">
                            </div>
                       </div> 
                    </div>
                </div>
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