<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <style>

        .footer{
            background: black;
            box-sizing: border-box;
            bottom: 0; 
            padding-top:1rem;           
        }

        .col-4 {
            color: white;
            display: inline-block;
            width:30%;
        }

        .col-4 ul{
            padding:0;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
        }

        .col-4 ul li:not(:last-child){
            margin-bottom:10px;
        }

        .col-4 ul li a{
            font-size: 14px;
            text-transform: capitalize;
            display: block;
            transition: all 0.3s ease;
        }

        .col-4 ul li a:hover{
            padding-left:5px;

        }
        .col-4 h4{
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            position: relative;
            text-transform: capitalize;
            margin-bottom:30px;
            font-weight:500;
            padding:0;
        }
        .col-4 .follow_us a{
           height:40px;
           width:40px;
           display: inline-block;
           background-color: #B2B2B2;   
           border-radius: 50%;
           text-align: center;
           line-height:40px; 
           color: black;

        }
        .follow_us a{
            margin: 0 0.3rem;
        }

        .col-4 .follow_us a:hover{
            background-color: white;
        }
        .footer ul {
            list-style: none;
        }
        
        .footer li a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="footer">
            <div class="row justify-content-center">
                    <div class="col-4 text-center p-0">
                    <h4>LIÊN KẾT NHANH</h4>
                        <ul>
                            <li><a href="adopt.php">Nhận nuôi</a></li>
                            <li><a href="rescue.php">Cứu hộ</a></li>
                            <li><a href="donate.php">Ủng hộ</a></li>
                            <li><a href="knowledge.php">Kiến thức</a></li>
                            <li><a href="contact.php">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-4 text-center p-0">
                        <h4>LIÊN HỆ</h4>
                        <ul>
                            <li>Phone:(+84)72 720 1220  </li>
                            <li>Địa chỉ: 11 đường Kha Vạn Cân , thành phố Thủ Đức</li>
                        </ul>
                    </div>

                    
                    <div class="col-4 text-center p-0">
                        <h4>MẠNG XÃ HỘI</h4>
                        <ul>
                            <div class="follow_us p-0">
                                <a href="https://www.facebook.com/profile.php?id=100087379351280" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/lfab_rezone/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://twitter.com/Rezone71147470" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                        </ul>
                    </div>
                    
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>