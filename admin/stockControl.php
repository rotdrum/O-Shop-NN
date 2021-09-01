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
            <div class="bc-admin-header">
                <h3>จัดการรายการสินค้า</h3>
                <a href="stockAdd.php" class="btn btn-success">เพิ่มรายการสินค้า</a>
            </div>

            <table class="tb-admin">
                <thead>
                    <tr>
                        <th width="30">ลำดับ</th>
                        <th width="100">รูปภาพ</th>
                        <th>รายการสินค้า</th>
                        <th>ราคา</th>
                        <th class="th-btn-control">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                    $count = 1 ;
                    $stmt = $pdo->query("select * from product");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                        <td class="center-control"><?php echo $count ; ?></td>
                        <td>
                            <img src="../upload/<?php echo $row['product_id'] ; ?>/<?php echo $row['namefile'] ; ?>" width="100">
                        </td>
                        <td>
                            <p><?php echo $row['names'] ; ?></p>
                        </td>
                        <td>
                        <?php echo $row['price'] ; ?>฿
                        </td>
                        <td class="td-btn-control">
                            <a href="stockEdit.php?product_id=<?php echo $row['product_id'] ; ?>" class="btn btn-edit">แก้ไข</a>
                            <a href="p-stockDelete.php?product_id=<?php echo $row['product_id'] ; ?>" class="btn btn-delete">ลบ</a>
                        </td>
                    </tr>
                <?php
                    $count++ ;
                    }
                ?>

          
                </tbody>
            </table>
        </div>
    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>