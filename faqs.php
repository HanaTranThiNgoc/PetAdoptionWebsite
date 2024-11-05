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
    <title>FAQs</title>
    <style>
        body{
            background-color: #f3f6f4 !important;
            overflow-x:hidden;
        }
        .banner{
            display: flex;
            width:100%;
            height: 25rem;
            background-image: url(img/banner/banner-faqs.png);
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
        .fqas-cover{
            margin:0.5rem 0.9rem 0.5rem 0.5rem;
            padding: 2rem;
            background-color: white !important; 
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            border-radius:10px;
        }
        .fqas-row{
            margin: 3rem 0;
            padding: 2rem 1rem;
        }
        .fqas-row h4{
            color:#69594D;
            font-weight:550;
            text-decoration: underline;
        }
        .faqs-row h5{
            padding-left: 20px;
        }
        .fqas-row h3{
            color:#69594D;
            font-weight:600;
        }
        .fqas-row p{
            font-size: 1.1rem;
            text-indent: 20px;
        }
        .fqas-img{
            margin-bottom: 1rem;
        }
        .fqas-img img{
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
<!-- FQAs -->
<div class="wrap-fqas container p-0">
    <div class="fqas-row p-0">
        <div class="row p-0">
            <div class="col-md-8 p-0">
                <div class="fqas-cover">
                    <div class="fqas-title">
                        <h3>Câu hỏi thường gặp về việc nhận nuôi thú cưng</h3>
                        <p>Cảm ơn bạn đã đến với Purrfect Match! Chúng tôi ở đây để giúp bạn 
                            từng bước để có thể nhận nuôi, đến việc đưa thú cưng của bạn về nhà, 
                            đến việc sống một cuộc sống lâu dài và hạnh phúc với thành viên mới trong gia đình bạn.
                            Một số câu hỏi thường gặp nhất về việc nhận nuôi thú cưng mà bạn thấy 
                            trên Purrfect Match. Nếu bạn không thể tìm thấy câu trả lời bên dưới, vui lòng liên hệ với chúng tôi (gửi góp ý tại “Liên hệ”) nếu bạn có thêm bất kỳ câu hỏi nào.
                        </p>
                    </div>
                    <div class="fqas-img">
                        <img src="img/plan/plan-faqs.jpg" alt="">
                    </div>
                    <div class="fqas-content">
                        <h4>Làm cách nào để tìm kiếm thú cưng?</h4>
                            <p>Để tìm thú cưng có thể nhận nuôi, 
                                bạn có thể bắt đầu tìm kiếm bằng cách sử dụng 
                                “Nhận nuôi” ở trên. Vì Perfect Match được cập nhật 
                                thường xuyên, chúng tôi khuyên bạn nên tiếp tục kiểm tra 
                                lại hoặc tạo một góp ý cho chúng tôi để được nhận thông 
                                báo khi những thú cưng mới phù hợp với tiêu chí tìm kiếm 
                                của bạn được thêm vào trang web.</p>
                            <h5>Thú cưng tôi thấy trên trang web có còn được nhận nuôi không?</h5>
                                <p>Mỗi nhóm chịu trách nhiệm cập nhật danh sách 
                                thú cưng có thể nhận nuôi. Để tìm hiểu về một con 
                                vật cưng cụ thể, vui lòng liên hệ trực tiếp tình 
                                nguyện viên bằng “Thông tin liên hệ” ở trang hồ sơ thú cưng đó.</p>
                            <h5>Purrfect Match được cập nhật thường xuyên như thế nào?</h5>
                                <p>Bởi vì mỗi nhóm cứu hộ chịu trách nhiệm cập nhật danh sách 
                                vật nuôi có thể nhận nuôi của mình, PurrfectMatch được cập nhật liên tục.</p>

                        <h4>Làm cách nào để nhận nuôi thú cưng mà tôi thấy trên Purrfect Match?</h4>
                            <p>Chúng tôi đều có các chính sách và quy trình nhận nuôi riêng. 
                                Để nhận nuôi thú cưng mà bạn thấy được liệt kê trên Purrfect Match,
                                vui lòng xem thông tin “liên hệ” trên hồ sơ của thú cưng. Sau đó, 
                                bạn sẽ được cung cấp thông tin liên hệ của nhóm và nếu có email cho nhóm
                                đó, bạn sẽ có thể gửi góp ý cho chúng tôi tại “Liên hệ”.</p>
                            <h5>Tôi có cần có tài khoản của Purrfect Match để nhận nuôi không?</h5>
                                <p>Có, bạn cần tạo tài khoản để gửi yêu cầu nhận nuôi trong “Nhận nuôi” 
                                trong trang hồ sơ thú cưng mà bạn muốn nhận nuôi. </p>
                            <h5>Làm sao tôi biết nếu tôi đã được chấp thuận nhận nuôi thú cưng?</h5>
                                <p>Sau khi gửi yêu cầu nhận con nuôi, nhóm cứu thú cưng mà bạn quan 
                                tâm sẽ liên hệ với bạn. Bạn cũng có thể liên hệ trực tiếp với nhóm cứu hộ để theo dõi.</p>
                            <h5>Sẽ mất bao lâu để nhận được phản hồi từ nhóm nhận nuôi?</h5>
                                <p>Một số ngày bạn có thể gửi yêu cầu và nhận được phản hồi trong 
                                vòng vài phút và cũng có thể mất vài ngày hoặc một tuần. Đừng ngại theo dõi và liên lạc với chúng tôi.</p>

                        <h4>Các yêu cầu để nhận nuôi thú cưng là gì?</h4>
                            <p>Nếu bạn quan tâm đến một con thú cưng cụ thể, vui lòng liên hệ với tnv 
                                nhận nuôi đã tạo danh sách thú cưng để tìm hiểu chính sách của họ.</p>           
                            <h5>Tôi có thể nhận nuôi thú cưng khi ở ngoài các quận lân cận không?</h5>
                                <p>Cảm ơn bạn đã quan tâm đến việc nhận nuôi thú cưng!
                                Mỗi thú cưng đều có các quy tắc và yêu cầu riêng đối với 
                                việc nhận nuôi tùy vào địa điểm cũng như tình trạng của thú cưng và việc theo dõi sau nhận nuôi.</p>
                            <h5>Tại sao tôi không được chọn để nhận nuôi?</h5>
                                <p>Cảm ơn bạn đã nghĩ đến việc nhận con nuôi! 
                                Chúng tôi khuyến khích làm mọi thứ có thể để tạo điều kiện tìm được những ngôi nhà 
                                tốt cho vật nuôi có thể nhận nuôi của họ. Chúng tôi hy vọng bạn sẽ không để trải nghiệm này 
                                thay đổi suy nghĩ của mình về việc cung cấp một ngôi nhà yêu thương cho thú cưng đang cần. 
                                Có rất nhiều nơi trú ẩn cho động vật và các nhóm cứu hộ với nhiều thú cưng có thể nhận nuôi hơn 
                                đang chờ những ngôi nhà mãi mãi của chúng! Cảm ơn bạn đã giúp đỡ một con vật cưng có thể nhận nuôi 
                                và chúng tôi chúc bạn gặp nhiều may mắn trong quá trình tìm kiếm một thành viên mới trong gia đình 
                                mình. Nếu bạn có câu hỏi hoặc thắc mắc cụ thể về nơi trú ẩn, vui lòng liên hệ với chúng tôi.</p>
                            <i><h5>Bạn vẫn còn có một câu hỏi? Liên hệ với chúng tôi <a href="contact.php">tại đây</a> và chúng tôi sẽ sẵn lòng trợ giúp.</h5></i>
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