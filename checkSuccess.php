<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชำระเงินเรียบร้อย</title>

    <?php include('import.php'); ?>

</head>
<body>

    <!-- if not login -->
    <?php include('navbarNotLogin.php'); ?>

    <!-- if has login -->
    <!-- <?php include('navbarLogin.php'); ?> -->

    <section class="body-container">

        <div class="progress">
            <div class="progress-items">
                <p class="progress-active">1</p>
                <p class="color-success">ตรวจสอบสินค้า</p>
            </div>
            <div class="progress-bar-active"></div>
            <div class="progress-items">
                <p class="progress-active">2</p>
                <p class="color-success">ข้อมูลจัดส่ง</p>
            </div>
            <div class="progress-bar-active"></div>
            <div class="progress-items">
                <p class="progress-active">3</p>
                <p class="color-success">ยืนยันการชำระเงิน</p>
            </div>
            <div class="progress-bar-active"></div>
            <div class="progress-items">
                <p class="progress-active">4</p>
                <p class="color-success">รอการตรวจสอบ</p>
            </div>
            <div class="progress-bar-active"></div>
            <div class="progress-items">
                <p class="progress-active">5</p>
                <p class="color-success">สำเร็จ</p>
            </div>
        </div>

        <div class="card-address" data-aos="fade-left">
            <div class="checkBill-Success">
                <i class="fas fa-check-circle"></i>
                <p>คุณชำระเงินเรียบร้อยแล้ว</p>
            </div>
            
            <h3 class="color-bg-primary">รายการสินค้า</h3>

            <div class="checkBill-status">
                <div class="checkBill-status-items">
                    <h3>หมายเลขคำสั่งซื้อ</h3>
                    <p>0001</p>
                </div>

                <div class="checkBill-status-items">
                    <h3>สถานะการชำระเงิน</h3>
                    <p class="color-success">ชำระเงินเรียบร้อยแล้ว</p>
                </div>

                <div class="checkBill-status-items">
                    <h3>ชื่อ-สกุล</h3>
                    <p>ณัฐเกียรติ ขุนแก้ว</p>
                </div>

                <div class="checkBill-status-items">
                    <h3>ที่อยู่</h3>
                    <p>6/8 ถ.พัฒนาการคูขวาง ต.ในเมือง</p>
                </div>

                <div class="checkBill-status-items">
                    <h3>ราคาสินค้า</h3>
                    <p>50 บาท</p>
                </div>

                <div class="checkBill-status-items">
                    <h3>เวลาโอน</h3>
                    <p>07.50 น.</p>
                </div>

                <img src="img/bill.jpg" width="400">
            </div>
            </div>
        </div>
    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
    <script src="js/uploadfile.js"></script>

</body>
</html>