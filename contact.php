<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ติดต่อ</title>

    <?php include('root.php'); ?>
    <?php include('import.php'); ?>

</head>
<body>
<?php 
    if(isset($_REQUEST['user_id'])){
        include('navbarLogin.php'); 
    }
    else{
        include('navbarNotLogin.php'); 
    }
?>

    <!-- if not login -->
    <!-- 
    <nav>
        <div class="nav-container">
            <div class="nav-top">
                <ul class="nav-top-contact">
                    <li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="#">ติดต่อ</a></li>
                </ul>
    
                <div class="nav-top-user">
                    <a href="register.php">สมัครสมาชิก</a>
                    <a href="login.php">เข้าสู่ระบบ</a>
                </div>
            </div>
    
            <div class="nav-bottom">
               <a href="index.php">SHOPPAY</a>
        
                <div class="nav-bottom-cart">
                </div>
            </div>
        </div>
    </nav>
    -->
    <!-- if login -->
    <!-- <nav>
        <div class="nav-container">

            <div class="nav-top">
                <ul class="nav-top-contact">
                    <li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="#">ติดต่อ</a></li>
                </ul>
    
                <div class="nav-top-user">
                    <div class="nav-top-user-profile">
                        <img src="img/14915653_1217321345005092_1534399749723770058_n.jpg">
                    </div>
                    <p id="navUserProfile">natthakiat_khunkaew</p>
                    <div id="navUserToggle" class="nav-top-user-toggle">
                        <a href="#">ตั้งค่าผู้ใช้</a>
                        <a href="#">ออกจากระบบ</a>
                    </div>
                </div>
            </div>
    
            <div class="nav-bottom">
                <a href="index.php">SHOPPAY</a>
        
                <div class="nav-bottom-cart">
                    <div id="cartShop" class="cart-shop">
                        <div class="cart-count">1</div>
                        <i class="fas fa-shopping-cart"></i>
                        <div id="cartShopToggle" class="cart-shop-toggle">
                            <div class="cart-shop-toggle-items">
                                <div class="cart-shop-toggle-items-img">
                                    <img src="img/phone.jpg">
                                </div>
                                <p>1 ชิ้น</p>
                                <p>฿500</p>
                            </div>
                            <div class="cart-shop-toggle-items">
                                <div class="cart-shop-toggle-items-img">
                                    <img src="img/phone.jpg">
                                </div>
                                <p>1 ชิ้น</p>
                                <p>฿500</p>
                            </div>
                            <div class="cart-shop-toggle-items">
                                <div class="cart-shop-toggle-items-img">
                                    <img src="img/phone.jpg">
                                </div>
                                <p>1 ชิ้น</p>
                                <p>฿500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav> -->

    <section class="body-container">

        <div class="card">
            <h1>ติดต่อ</h1>
            <p>โทร 012-345-6789</p>
            <p>อีเมล example@gmail.com</p>
        </div>

    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>