

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link rel="icon" href="logo.svg" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
    
    <style>
        body{
            font-family: 'Barlow', sans-serif;
        }
        .container{
            width: 1700px;

        }
        .navbar{
            font-weight: 400;
            font-size: 1.1rem;
            background: rgba(0,0,0,0.5) !important;
        }
        .navbar-nav{
            position:relative;
        }
        .navbar-nav .nav-link{
            color:white;
        }
        .nav-item {
            padding: 0;
        }
        .navbar-brand {
            color:white;
        }
        .navbar-brand a{
            color:white;
            font-size: 28px;
            font-weight: bold;
        }
        .navbar-brand:hover{
            color:#EFE4DA;
        }
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        .nav-link:hover {
            color: #EFE4DA;
            font-weight: 400;
        }
        .nav-item:hover .img-nav-link{
            opacity: 0.5;
        }
        .nav-item .nav-link.btn.btn-light.btn-sm{
            color: #EFE4DA;
            background: transparent;
            padding: 0.5rem 0.5rem !important;
        }
        .nav-link.btn.btn-light.btn-sm {
            border-color: #EFE4DA;
        }
        .nav-item p{
            margin:0 0.1rem 0 2rem;
            font-weight:600;
            font-size:1.2rem;
            color: white;
        }
        
        .img-nav-link {
            top:5%;
            left:50%;
            position: relative;
            opacity: 0;
            z-index:-10;
            transition: opacity 0.2s ease-in-out;
        }
        .nav-link.btn.btn-light.btn-sm {
            /* margin-left: 6rem !important;  */
            border:none; 
            position: absolute;
            right:-5rem;
        }
        .nav-link.btn.btn-light.btn-sm img{
            width:25px;
            height:25px;
        }
        .nav-item {
            display: flex;
            align-items: center;
        }
        .dropdown-item:hover{
            background-color: rgb(112,101,94,0.5) !important    ;
        }
            /* scroll */
            ::-webkit-scrollbar{
            width: 10px;
            height: 10px;
        }
        ::-webkit-scrollbar-track{
            background: white;
        }
        ::-webkit-scrollbar-thumb{
            background: #D9D9D9;
            border-radius: 10px; 
        }
    </style>
</head>
<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg  fixed-top ">
        <div class="container ">
            <a class="navbar-brand " href="index.php">
                <img src="logo.svg" width="48" height="48" alt="Logo">   PURRFECT MATCH
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item active ">
                                    <img class="img-nav-link" src="navlinkhover.svg">
                                    <a class="nav-link " href="index.php" >Trang chủ<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <img class="img-nav-link" src="navlinkhover.svg">
                                    <a class="nav-link " href="adopt.php" >Nhận nuôi</a>
                                </li>
                                <li class="nav-item">
                                    <img class="img-nav-link" src="navlinkhover.svg">
                                    <a class="nav-link " href="rescue.php">Cứu hộ</a>
                                </li>
                                <li class="nav-item">
                                    <img class="img-nav-link" src="navlinkhover.svg">
                                    <a class="nav-link " href="donate.php" >Ủng hộ</a>
                                </li>
                                <li class="nav-item">
                                    <img class="img-nav-link" src="navlinkhover.svg">
                                    <a class="nav-link " href="knowledge.php">Kiến thức</a>
                                </li>
                                <li class="nav-item">
                                    <img class="img-nav-link" src="navlinkhover.svg">
                                    <a class="nav-link " href="contact.php">Liên hệ</a>
                                </li>
                                <li class="nav-item">
                                   <div class="nav-hello">
                                    <?php if(isset($_SESSION["User_name"])) {
                                    ?>
                                    <p>
                                        <?php 
                                            echo "Chào ".$_SESSION["name"];                                
                                        ?>!
                                    </p>
                                    <?php                                              
                                }?></div> 
                    </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle btn btn-light btn-sm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="user.svg" alt="">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php if (isset($_SESSION['User_name'])) { ?>
                                            <a class="dropdown-item" href="profile.php">Hồ sơ</a>
                                            <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                                            <?php } else { ?>
                                            <a class="dropdown-item" href="login.php">Đăng nhập</a>
                                            <?php } ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
        </div>
    </nav>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>