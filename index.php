<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <?php include('root.php'); ?>
    <?php include('import.php'); ?>

</head>
<body>

    <!-- if not login -->

    
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
            <h3>หมวดหมู่สินค้า</h3>
            <ul>
                <li><a id="mode8">แสดงทั้งหมด</a></li>
                <li><a id="mode1">เสื้อผ้า</a></li>
                <li><a id="mode2">กางเกง</a></li>
                <li><a id="mode3">กระโปรง</a></li>
                <li><a id="mode4">ชุดเดรส</a></li>
                <li><a id="mode5">รองเท้า</a></li>
                <li><a id="mode6">กระเป๋า</a></li>
                <li><a id="mode7">เครื่องประดับ</a></li>
            </ul>
        </div>

        <div class="bc-show">

        <?php
                    $stmt = $pdo->query("select * from product");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>


        <?php 
    if(isset($_REQUEST['user_id'])){
    ?> 
           <a href="itemsDetail.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&product_id=<?php echo $row['product_id'] ; ?>" class="bc-show-items <?php echo $row['types'] ; ?>">
                <div class="bc-show-items-img">
                <img src="upload/<?php echo $row['product_id'] ; ?>/<?php echo $row['namefile'] ; ?>" width="100">
                </div>
                <p><?php echo $row['names'] ; ?></p>
                <h5><?php echo $row['price'] ; ?> ฿</h5>
            </a>
    <?php 
    }
    else{
    ?> 
          <a href="itemsDetail.php?product_id=<?php echo $row['product_id'] ; ?>" class="bc-show-items <?php echo $row['types'] ; ?>">
                <div class="bc-show-items-img">
                <img src="upload/<?php echo $row['product_id'] ; ?>/<?php echo $row['namefile'] ; ?>" width="100">
                </div>
                <p><?php echo $row['names'] ; ?></p>
                <h5><?php echo $row['price'] ; ?> ฿</h5>
            </a>
    <?php 
    }
    ?> 

<?php
                    }
                ?>

    <!--
            <a href="itemsDetail.php" class="bc-show-items mode1">
                <div class="bc-show-items-img">
                    <img src="img/dress.jpg">
                </div>
                <p>ชุดเดรสสีแดง สุดสวย</p>
                <h5>100 ฿</h5>
            </a>

            <a href="itemsDetail.php" class="bc-show-items mode2">
                <div class="bc-show-items-img">
                    <img src="img/notebook.jpg">
                </div>
                <p>โน๊ตบุ๊คสเปคพกพาไปทำงานได้สะดวกมาก ๆ</p>
                <h5>100 ฿</h5>
            </a>

            <a href="itemsDetail.php" class="bc-show-items mode3">
                <div class="bc-show-items-img">
                    <img src="img/phone.jpg">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, maxime.</p>
                <h5>100 ฿</h5>
            </a>

            <a href="itemsDetail.php" class="bc-show-items mode4">
                <div class="bc-show-items-img">
                    <img src="img/tv.png">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, maxime.</p>
                <h5>100 ฿</h5>
            </a>

            <a href="itemsDetail.php" class="bc-show-items mode2">
                <div class="bc-show-items-img">
                    <img src="img/notebook.jpg">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, maxime.</p>
                <h5>100 ฿</h5>
            </a>

            <a href="itemsDetail.php" class="bc-show-items mode1">
                <div class="bc-show-items-img">
                    <img src="img/dress.jpg">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, maxime.</p>
                <h5>100 ฿</h5>
            </a>
    -->
        </div>
    </section>

    <?php include('footer.php'); ?>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>