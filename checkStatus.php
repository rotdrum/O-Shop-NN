<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รอการตรวจสอบ</title>
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

<?php 
    $stmt = $pdo->query("select * from trading where trading_id = '".$_REQUEST['trading_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   
    ?>

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
            <div class="progress-bar"></div>
            <div class="progress-items">
                <p>5</p>
                <p>สำเร็จ</p>
            </div>
        </div>

        <div class="card-address" data-aos="fade-left">
            <h3 class="color-bg-primary">รายการสินค้า</h3>

            <div class="checkBill-status">
                <div class="checkBill-status-items">
                    <h3>หมายเลขคำสั่งซื้อ</h3>
                    <p><?php echo $row['trading_id'] ; ?></p>
                </div>

                <div class="checkBill-status-items">
                    <h3>สถานะการชำระเงิน</h3>
                    <p class="color-warning">รอการตรวจสอบ</p>
                </div>

                <div class="checkBill-status-items">
                    <h3>ที่อยู่จัดส่ง</h3>
                    <p><?php echo $row['address'] ; ?></p>
                </div>

                <div class="checkBill-status-items">
                    <h3>ราคาสินค้า</h3>
                    <p><?php echo $row['price_tf'] ; ?> บาท</p>
                </div>

                <div class="checkBill-status-items">
                    <h3>เวลาโอน</h3>
                    <p><?php echo $row['time'] ; ?> น.</p>
                </div>

                <img src="upload2/<?php echo $row['trading_id'] ; ?>/<?php echo $row['name_file'] ; ?>" width="400">

            </div>
            </div>
        </div>
    </section>
    <?php 
 }
    ?>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
    <script src="js/uploadfile.js"></script>

</body>
</html>