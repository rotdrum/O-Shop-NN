<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตระกร้าสินค้า</title>

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

    <form class="body-container" action="p-buyitems.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>" method="post">

        <div class="progress">
            <div class="progress-items">
                <p class="progress-active">1</p>
                <p class="color-success">ตรวจสอบสินค้า</p>
            </div>
            <div class="progress-bar"></div>
            <div class="progress-items">
                <p>2</p>
                <p>ข้อมูลจัดส่ง</p>
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

        <div class="card-buyItemsHeader">
            <p>สินค้า</p>
            <p>ราคาต่อชิ้น</p>
            <p>จำนวน</p>
            <p>ราคารวม</p>
            <p>จัดการ</p>
        </div>
<?php
        $count = 1 ;
        $sum = 0 ;
        $comment = "" ;
        $sim_id = 0 ;
        $stmt = $pdo->query("select * from sim where user_id = ".$_REQUEST['user_id']." ");
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
$sim_id = $row['sim_id'];
                            for ($x = 1; $x <= 5; $x++) {
                            if($row['product_id'.$x] != NULL){
                            $stmt2 = $pdo->query("select * from product where product_id = ".$row['product_id'.$x]." ");
                            while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                    
                    ?>
        <!-- items -->
        <div class="card-buyItems">
            <div class="card-buyItems-product">
                <div class="buyItems-items-img">
                <img src="upload/<?php echo $row2['product_id'] ; ?>/<?php echo $row2['namefile'] ; ?>" >
                </div>
                <p><?php echo $row2['names'] ; ?></p>
            </div>
            <p class="card-buyItems-perproduct">฿<?php echo $row2['price'] ; ?></p>
            <div class="card-buyItems-coutproduct">
            <p><?php echo $row['size'.$x] ; ?></p>
                
              <!--  <input type="number" value="<?php echo $row['size'.$x] ; ?>" required> -->
            </div>
            <p class="card-buyItems-sum">฿<?php echo $row['size'.$x] * $row2['price'] ; ?></p>
            <div class="card-buyItems-action">
                <a href="p-DeleteProduct2.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&sim_id=<?php echo $row['sim_id'] ; ?>&product_address=<?php echo $x ; ?>" class="btn btn-delete">ลบ</a>

            </div>
        </div>

        <?php
                $comment = $comment . " ". $row2['names']."x".$row['size'.$x]. " " . $row2['price'] . "฿ " ;
                $sum = $sum + ($row['size'.$x] * $row2['price']) ;

        }
                            }
                        }
    }
                    ?>
                    


        <div class="card-buyItemsFooter">
            <div class="buyItemsFooter-sum">
                <p>รวมราคาทั้งสิ้น</p>
                <input type="hidden" name="comment" value="<?php echo $comment ; ?>" required>
                <input type="hidden" name="sum" value="<?php echo $sum ; ?>" required>
                <input type="hidden" name="sim_id" value="<?php echo $sim_id ; ?>" required>
                <p>฿<?php echo $sum ; ?></p>
            </div>
            
            <button class="btn btn-delete">ชำระเงิน</button>
        </div>

    </form>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>