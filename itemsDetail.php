<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดสินค้า</title>
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
    <!-- body container -->
    <section class="body-container-shop">
        <div class="bc-menu">
            <h3>หมวดหมู่สินค้า</h3>
            <ul>
    <?php 

            if(isset($_REQUEST['user_id'])){
    ?> 
            <li><a href="index.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>">ย้อนกลับ</a></li>

    <?php 
    }
    else{
    ?> 
            <li><a href="index.php">ย้อนกลับ</a></li>
    <?php 
    }
    ?> 
            </ul>
        </div>

        <form class="bc-showDetail" method="post" action="p-itemsDetail.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>">

            <?php
                $stmt = $pdo->query("select * from product where product_id = ".$_REQUEST['product_id']." ");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="bc-showDetail-left">
                <div class="bc-showDetail-photo">
                <img src="upload/<?php echo $row['product_id'] ; ?>/<?php echo $row['namefile'] ; ?>" >
                </div>
            </div>

            <div class="bc-showDetail-right">
                <h1><?php echo $row['names'] ; ?></h1>
                <div class="bc-showDetail-price">
                    <h1>ราคา</h1>
                    <h1>฿<?php echo $row['price'] ; ?></h1>
                </div>
                <div class="bc-showDetail-count">
                    <p>จำนวน</p>
                    <input type="hidden" name="product_id" class="txt txt-count" value="<?php echo $row['product_id'] ; ?>">
                    <input type="number" name="size" class="txt txt-count" value="1">
                    <p>ชิ้น</p>
                </div>
                <div class="btn-control-buy">
                    <?php 
                    if(isset($_REQUEST['user_id'])){
                    ?> 
                        <button class="btn btn-cart" name="save" id="test">เพิ่มใส่ตะกร้า</button>
                        <button class="btn btn-buy" name="buy" >ซื้อสินค้า</button>
                    <?php 
                    }
                    else{
                    ?> 
                        <a href="login.php" class="btn btn-buy">ซื้อสินค้า</a>
                    <?php 
                    }
                    ?> 
                </div>
            </div>
            <?php
                }
            ?>
        </form>
    </section>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>

    
</body>
</html>