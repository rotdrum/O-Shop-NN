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

    
                
<?php
                    $stmt = $pdo->query("select * from product where product_id = ".$_REQUEST['product_id']." ");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
    <section class="body-container-shop">
        <?php include('navbar.php'); ?>

        <form class="bc-admin" action="p-stockEdit.php?product_id=<?php echo $row['product_id'] ; ?>" method="post">
            <h3>แก้ไขรายการสินค้า</h3>
            
            <div class="form-control">
                <p>รูปภาพ</p>
                <img src="../upload/<?php echo $row['product_id'] ; ?>/<?php echo $row['namefile'] ; ?>" width="100">
            </div>

            
            <div class="form-control">
                <p>ชื่อสินค้า</p>
                <input required value="<?php echo $row['names'] ?>" type="text" name="names" id="" class="txt txt-login" placeholder="กรอกชื่อสินค้า">
            </div>

            <div class="form-control">
                <p>ราคาสินค้า</p>
                <input required value="<?php echo $row['price'] ?>" type="number" name="price" id="" class="txt txt-login" placeholder="กรอกราคาสินค้า">
            </div>

            <div class="form-control">
                <p>หมวดหมู่</p>
                <select required name="types" class="sel">
                    <option value="<?php echo $row['types'] ?>">ประเภทเดิม</option>
                    <option value="mode1">เสื้อผ้า</option>
                    <option value="mode2">กางเกง</option>
                    <option value="mode3">กระโปรง</option>
                    <option value="mode4">ชุดเดรส</option>
                    <option value="mode5">รองเท้า</option>
                    <option value="mode6">กระเป๋า</option>
                    <option value="mode7">เครื่องประดับ</option>
                </select>
            </div>

   
            <div class="btn-control-buy">
                <a href="stockControl.php" class="btn btn-delete">ยกเลิก</a>
                <button class="btn btn-success">บันทึก</button>
            </div>
        </form>
    </section>
    <?php
                    }
                ?>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
    <script src="../js/uploadfile.js"></script>

</body>
</html>