<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แจ้งการชำระเงิน</title>

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
            <div class="progress-bar"></div>
            <div class="progress-items">
                <p>4</p>
                <p>รอการตรวจสอบ</p>
            </div>
            <div class="progress-bar"></div>
            <div class="progress-items">
                <p>5</p>
                <p>สำเร็จ</p>
            </div>
        </div>

        <div class="card-address" data-aos="fade-left">
            <h3  class="color-bg-primary">ช่องทางการชำระเงิน</h3>

            <div class="checkBill-bank">
                <div class="checkBill-bank-img">
                    <img src="img/KBank.png" alt="">
                </div>
                <div class="checkBill-bank-text">
                    <h3>ธนาคารกสิกรไทย</h3>
                    <p>นายสมคิด คำสิงห์</p>
                    <p>หมายเลขบัญชี 012-3-45678-9</p>
                </div>
            </div>

            <h3 class="color-bg-primary">ข้อมูลการจัดส่ง</h3>

            <div class="checkBill-status">
                <div class="checkBill-status-items">
                    <h3>หมายเลขคำสั่งซื้อ</h3>
                    <p><?php echo $row['trading_id'] ; ?></p>
                </div>

                <div class="checkBill-status-items">
                    <h3>สถานะการชำระเงิน</h3>
                    <p class="color-danger">ยังไม่ชำระเงิน</p>
                </div>

                <div class="checkBill-status-items">
                    <h3>ที่อยู่สำหรับการจัดส่ง</h3>
                    <p><?php echo $row['address'] ; ?></p>
                </div>

              
            </div>

            <h3 class="color-bg-primary">แจ้งการชำระเงิน</h3>


            <form class="confirm-bill" enctype="multipart/form-data"  action="p-checkBill.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&trading_id=<?php echo $_REQUEST['trading_id'] ; ?>" method="post">
                <div class="form-control">
                    <p>หมายเลขคำสั่งซื้อ</p>
                    <input type="text" value="<?php echo $row['trading_id'] ; ?>"  name="trading_id" id="" class="txt txt-login" value="0001" disabled>
                </div>

                <div class="form-control">
                    <p>ยอดเงินการโอน</p>
                    <input required type="number" value="<?php echo $row['price_sum'] ; ?>" name="price_tf" id="" class="txt txt-login" placeholder="กรุณากรอกจำนวนที่โอน">
                </div>

                <div class="form-control">
                    <p>เวลาในการโอน</p>
                    <input required type="time" name="time" id="" class="txt txt-login" >
                </div>

                <div class="form-upload">
                    <label for="file-upload-1">Upload File
                        <input required name="name_file" type="file" id="file-upload-1" class="file-upload" accept="image/*" >
                    </label>
                    <p id="filename-1" class="filename">อัพโหลดสลิปการโอน</p>
                </div>

                <div class="btn-control-buy">
                    <a href="address.php" class="btn btn-delete">ยกเลิก</a>
                    <button  class="btn btn-success">ต่อไป</button>
                </div>
            </form>

            <?php 
   }
    ?>
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