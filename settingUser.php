<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

</head>
<body>

    <!-- if not login -->
    <?php include('navbarNotLogin.php'); ?>

    <!-- if has login -->
    <!-- <?php include('navbarLogin.php'); ?> -->

    <section class="body-container-shop">

    <div class="bc-menu">
            <div class="bc-profile">
                <div class="bc-profile-img">
                    <img src="img/14915653_1217321345005092_1534399749723770058_n.jpg">
                </div>
                <p>ณัฐเกียรติ ขุนแก้ว</p>
            </div>
            <ul>
                <li><a href="settingUser.php" class="bc-menu-active">ตั้งค่าบัญชีผู้ใช้</a></li>
                <li><a href="history.php">ประวัติการสั่งซื้อ</a></li>
                <li><a href="#">ออกจากระบบ</a></li>
            </ul>
        </div>

        <div class="bc-settingUser">
            <h3>ตั้งค่าบัญชีผู้ใช้</h3>

            <div class="form-control">
                <p>บัญชีผู้ใช้</p>
                <input type="text" name="" id="" class="txt txt-login" placeholder="กรอกบัญชีผู้ใช้">
            </div>

            <div class="form-control">
                <p>รหัสผ่าน</p>
                <input type="password" name="" id="" class="txt txt-login" placeholder="กรอกรหัสผ่าน">
            </div>
            
            <div class="btn-control-buy">
                <a href="#" class="btn btn-delete">ยกเลิก</a>
                <button class="btn btn-success">บันทึก</button>
            </div>
            
        </div>


    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>