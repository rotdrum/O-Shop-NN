<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลจัดส่ง</title>

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
    $stmt = $pdo->query("select * from users where user_id = '".$_REQUEST['user_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

   
    ?>
    <form class="body-container" method="post" action="p-address.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&trading_id=<?php echo $_REQUEST['trading_id'] ; ?>">

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
            <div class="progress-bar"></div>
            <div class="progress-items">
                <p>3</p>
                <p>ยืนยันการชำระเงิน</p>
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

        <div class="card-address">
            <h3>ที่อยู่สำหรับการจัดส่ง</h3>

            <div class="form-control-address">
                <p>ชื่อ-สกุล</p>
                <input required  type="text" name="names" id="" value="<?php echo $row['tname'].$row['fname']." ".$row['lname']   ; ?>" class="txt txt-login" placeholder="กรอกชื่อ-สกุล">
            </div>

            <div class="form-control-address">
                <p>หมายเลขโทรศัพท์</p>
                <input required type="text" name="tel" id="" value="<?php echo $row['tel']  ; ?>" class="txt txt-login" placeholder="กรอกหมายเลขโทรศัพท์">
            </div>

            <div class="form-control-address">
                <p>ทีอยู่</p>
                <input required type="text" name="address" id=""  class="txt txt-login" placeholder="กรอกทีอยู่">
            </div>

            <div class="btn-control-buy">
                <a href="index.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>" class="btn btn-delete">ยกเลิก</a>
                <button  class="btn btn-success">ต่อไป</button>
            </div>
        </div>

       

    </form>
    
    <?php 
    }
    ?>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>