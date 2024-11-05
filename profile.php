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
    <title>Hồ sơ</title>
    <style>
        body{
            height:75vh;
            background-color:#F5F5F5 !important;
        }
        .profile{
            height:50vh;
            margin-top: 10rem;
        }
        .user-info{
            background-color: white;
            padding: 2rem 4rem 0 4rem;
            border-radius: 10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
        }
        form input{
            border:1px solid lightgrey;
            border-radius:5px;
            width: 100%;
            padding: 0.3rem;
            color: grey;
        }
        form label{
            margin: 1rem 0 0.5rem 0;
        }
        .btn{
            margin: 2rem 0;
            width: 30%;
        }
        .fav-list{
            background-color: white;
            padding: 2rem 4rem 1rem 4rem;
            border-radius: 10px;
            box-shadow: rgba(36, 55, 78, 0.08) 0px 8px 40px;
        }
        .fav-list-pet{
            display: flex;
        }
        .list-img{
            margin:1rem;
            width:4rem;
            height:4rem;
            border-radius:50%;
            overflow: hidden;
            border: 5px solid rgb(222,0,67,0.2);
        }
        .list-img img{
            width:100%;
        }
    </style>
</head>
<body>
<!--Navigation-->
<?php require_once("navbar.php"); ?>
<!-- profile -->
<div class="wrap">
    <div class="wrap-profile container">
        <div class="profile">
            <div class="row">
                <div class="col-lg-6">
                    <div class="user-info">
                        <div class="icon_user text-center">
                            <img src="user_profile.svg" alt="">
                        </div>
                        <div class="title text-center mt-2 mb-0">
                            <h5>Thông tin cá nhân</h5>
                        </div>
                        <div class="form_user">  
                        
                        
                            <form action="updateprofile.php" method="POST">
                                <input type="hidden" name="id" value="<?php  echo $_SESSION["Id"] ?>" readonly><br>
                                <label for="name">Họ tên</label><br>
                                <input type="text" name="name" value="<?php  echo $_SESSION["User_name"] ?>"readonly><br>
                                <label for="email">Email</label><br>
                                <input type="email" name="email" value="<?php  echo $_SESSION["Email"] ?>"readonly><br>
                                
                                <label for="phone">Địa chỉ</label><br>
                                <input type="tel" name="phone" value="<?php  echo $_SESSION["Address"] ?>"readonly><br>
                                <?php require_once 'config.php';
                                
                                    $id = $_SESSION["Id"];
                                $sql = "SELECT user_info.id, user_info.user_name, user_info.email, user_info.address, contact_info.phonenumber
                                FROM user_info
                                INNER JOIN contact_info ON user_info.id = contact_info.user_id
                                WHERE user_info.id = $id  ";                        
                                 $result = mysqli_query($conn, $sql);
                                 if(mysqli_num_rows($result)>0){ 
                                     while($row = mysqli_fetch_assoc($result)) {
                                        $_SESSION["Phone"] = $row["phonenumber"];
                                    ?>
                                    <label for="phone">Số điện thoại</label><br>
                                    <input type="tel" name="phone" value="<?php  echo $row["phonenumber"] ?>" readonly><br>
                                <?php
                                    }
                                }
                                    else {
                                        echo " " . $conn->error;
                                    }
                                
                                ?>
                                <div class="text-center">
                                <input class = "btn" type="submit" name="submit" value="Chỉnh sửa"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="list col-lg-6">
                    <div class="fav-list">
                        <div class="fav-list-icon text-center">
                            <img src="heart.svg" alt="">
                        </div>
                        <div class="title text-center mt-2 mb-0">
                            <h5>Danh sách yêu thích</h5>
                        </div>
                        <div class="fav-list-pet">
                        <?php
                            $id = $_SESSION["Id"];
                            require_once 'config.php';
                            // Thực hiện select dữ liệu vào database
                            $sql2 = "SELECT pet.img 
                                    FROM pet JOIN fav_pet ON pet.id = fav_pet.pet_id 
                                             JOIN user_info ON user_info.id = fav_pet.user_id
                                    WHERE user_info.id = $id ";
                            $result2 = mysqli_query($conn, $sql2);
                            if (mysqli_num_rows($result2) > 0) {
                                // output data of each row
                                    while($row = mysqli_fetch_assoc($result2)) {

                                ?>
                            <div class="list-img">
                                <img src="img/<?php echo $row['img']?>" alt="">
                            </div>

                                <?php
                                    }
                            } else {
                                echo "";
                            }

                            // Đóng kết nối database
                            mysqli_close($conn);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
</body>
</html>