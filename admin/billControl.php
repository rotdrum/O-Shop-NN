<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <?php include('root.php'); ?>

    <?php include('import.php'); ?>

</head>
<body>

    

    <section class="body-container-shop">
        <?php include('navbar.php'); ?>

        <div class="bc-admin">
        <h3>ตรวจสอบการชำระเงิน</h3>


           <div class="bc-admin-bill">



           <?php 
    $stmt = $pdo->query("select * from trading where status = 1 ");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

   
    ?>

                <div class="bc-admin-bill-items">
                    <p>รหัสคำสั่งซื้อ <?php echo $row['trading_id'] ; ?></p>
                    <p>เวลาโอน <?php echo $row['time'] ; ?> น.</p>
                    <p>ยอดเงิน <?php echo $row['price_sum'] ; ?> บาท</p>
                    <p>ที่อยู่สำหรับการจัดส่ง <?php echo $row['address'] ; ?></p>
                    <div class="bc-admin-bill-img">
                <img src="../upload2/<?php echo $row['trading_id'] ; ?>/<?php echo $row['name_file'] ; ?>">
                    </div>
                    <div class="btn-control-buy">
                        <a href="p-billDelete.php?trading_id=<?php echo $row['trading_id'] ; ?>" class="btn btn-delete">ลบ</a>
                        <a href="p-billControl.php?trading_id=<?php echo $row['trading_id'] ; ?>" class="btn btn-success">อนุมัติ</a>
                    </div>
                </div>
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
</body>
</html>