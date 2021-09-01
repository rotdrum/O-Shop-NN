<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติการสั่งซื้อ</title>
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

    <section class="body-container-shop">

    <div class="bc-menu">
            <div class="bc-profile">
                <div class="bc-profile-img">
                    <img src="img/user.png">
                </div>
                <?php 
    $stmt = $pdo->query("select * from users where user_id = '".$_REQUEST['user_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                <p><?php echo $row['tname'].$row['fname']." ".$row['lname'] ; ?></p>
                <?php 
    }
    ?>      
            </div>
            <ul>
                <li><a href="history.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>" class="bc-menu-active">ประวัติการสั่งซื้อ</a></li>
                <li><a href="index.php">ออกจากระบบ</a></li>
            </ul>
        </div>

        <?php 
    $stmt = $pdo->query("select * from trading where user_id = '".$_REQUEST['user_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    if($row['status'] != 0){
    ?>
        <div class="bc-history">
            <h3 style="margin-bottom: 20px;">ประวัติการสั่งซื้อ</h3>

            <!-- items -->
            <div href="checkSuccess.php" class="bc-history-items">
                <div class="bc-history-shop">
                <div class="bc-history-items-img">
                <img src="upload2/<?php echo $row['trading_id'] ; ?>/<?php echo $row['name_file'] ; ?>" >

                    </div>
                    <div class="bc-history-detail">
                        <p><?php echo $row['names'] ; ?></p>
                        <?php
                            if($row['status'] == 1){
                        ?>
                                                <p class="color-danger">สถานะ : รอการตรวจสอบการชำระเงิน</p>

                        <?php
                            }
                        ?>

<?php
                            if($row['status'] == 2){
                        ?>
                        <p class="color-warning">สถานะ : ชำระเงินแล้ว รอการจัดส่ง</p>

                        <?php
                            }
                        ?>

<?php
                            if($row['status'] == 3){
                        ?>
                        <p class="color-success">สถานะ : จัดส่งเรียบร้อย</p>

                        <?php
                            }
                        ?>
                        <p><?php echo $row['address'] ; ?></p>
                    </div>
                </div>
                <p class="bc-history-price">฿<?php echo $row['price_sum'] ; ?></p>
            </div>

      
        </div>
        <?php 
        }
    }
    ?>
    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>