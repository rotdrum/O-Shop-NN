
<nav>
<?php 
    $stmt = $pdo->query("select * from users where user_id = '".$_REQUEST['user_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>

        <div class="nav-container">

            <div class="nav-top">
                <ul class="nav-top-contact">
                    <li><a href="index.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>">หน้าหลัก</a></li>
                    <li><a href="contact.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>">ติดต่อ</a></li>
                </ul>
    
                <div class="nav-top-user">
                    <div class="nav-top-user-profile">
                        <img src="img/user.png">
                    </div>
                    <p id="navUserProfile"><?php echo $row['tname'].$row['fname']." ".$row['lname']   ; ?></p>
                    <div id="navUserToggle" class="nav-top-user-toggle">
                        <a href="history.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>">การซื้อของฉัน</a>
                        <a href="index.php">ออกจากระบบ</a>
                    </div>
                </div>
            </div>
    
            <div class="nav-bottom">
                <a href="index.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>" class="nav-bottom-a">หนุงหนิง Shop</a>
        

        
          
                    
                    <?php 
                     $flag = 0 ;
   
                     $stmt = $pdo->query("select * from sim where user_id = ".$_REQUEST['user_id']." ");
                     while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $flag = 1;
                     }
                     if($flag == 0){
                        ?>
                <div class="nav-bottom-cart">
                    <div id="cartShop" class="cart-shop">
                        <div class="cart-count" id="count">
                         0
                        </div>
                        <i class="fas fa-shopping-cart"></i>
                        <div id="cartShopToggle" class="cart-shop-toggle">                

                            <div class="cart-shop-toggle-items-buy">
                                <a href="buyItems.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>" class="btn btn-buyItems">ดูตระกร้าสินค้า</a>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php 
                     }
                     else{
                        $stmt = $pdo->query("select * from sim where user_id = ".$_REQUEST['user_id']." ");
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    ?>
                <div class="nav-bottom-cart">
                    <div id="cartShop" class="cart-shop">
                        <div class="cart-count" id="count">
                        <?php
                        $count = 0 ;
                        if($row['product_id1'] != NULL){
                            $count++ ;
                        }
                        if($row['product_id2'] != NULL){
                            $count++ ;
                        }
                        if($row['product_id3'] != NULL){
                            $count++ ;
                        }
                        if($row['product_id4'] != NULL){
                            $count++ ;
                        }
                        if($row['product_id5'] != NULL){
                            $count++ ;
                        }
                        echo $count ;
                        ?>
                        </div>
                        <i class="fas fa-shopping-cart"></i>
                        <div id="cartShopToggle" class="cart-shop-toggle">

                        <?php
                        if($row['product_id1'] != NULL){
                            $stmt2 = $pdo->query("select * from product where product_id = ".$row['product_id1']." ");
                            while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){

                        ?>
                            <div class="cart-shop-toggle-items">
                                <div class="cart-shop-toggle-items-img">
                                    <img src="upload/<?php echo $row2['product_id'] ; ?>/<?php echo $row2['namefile'] ; ?>" >
                                </div>
                                <p><?php echo $row['size1'] ; ?> ชิ้น</p>
                                <p>฿<?php echo $row['size1'] * $row2['price'] ; ?></p>
                                <a href="p-DeleteProduct.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&sim_id=<?php echo $row['sim_id'] ; ?>&product_address=1" class="btn btn-delete-toggle">ลบ</a>
                            </div>
                        <?php
                        }

                        }
                        ?>


                        <?php
                        if($row['product_id2'] != NULL){
                            $stmt2 = $pdo->query("select * from product where product_id = ".$row['product_id2']." ");
                            while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){

                        ?>
                            <div class="cart-shop-toggle-items">
                                <div class="cart-shop-toggle-items-img">
                                    <img src="upload/<?php echo $row2['product_id'] ; ?>/<?php echo $row2['namefile'] ; ?>" >
                                </div>
                                <p><?php echo $row['size2'] ; ?> ชิ้น</p>
                                <p>฿<?php echo $row['size2'] * $row2['price'] ; ?></p>
                                <a href="p-DeleteProduct.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&sim_id=<?php echo $row['sim_id'] ; ?>&product_address=2" class="btn btn-delete-toggle">ลบ</a>
                            </div>
                        <?php
                        }

                        }
                        ?>


<?php
                        if($row['product_id3'] != NULL){
                            $stmt2 = $pdo->query("select * from product where product_id = ".$row['product_id3']." ");
                            while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){

                        ?>
                            <div class="cart-shop-toggle-items">
                                <div class="cart-shop-toggle-items-img">
                                    <img src="upload/<?php echo $row2['product_id'] ; ?>/<?php echo $row2['namefile'] ; ?>" >
                                </div>
                                <p><?php echo $row['size3'] ; ?> ชิ้น</p>
                                <p>฿<?php echo $row['size3'] * $row2['price'] ; ?></p>
                                <a href="p-DeleteProduct.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&sim_id=<?php echo $row['sim_id'] ; ?>&product_address=3" class="btn btn-delete-toggle">ลบ</a>
                            </div>
                        <?php
                        }

                        }
                        ?>


<?php
                        if($row['product_id4'] != NULL){
                            $stmt2 = $pdo->query("select * from product where product_id = ".$row['product_id4']." ");
                            while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){

                        ?>
                            <div class="cart-shop-toggle-items">
                                <div class="cart-shop-toggle-items-img">
                                    <img src="upload/<?php echo $row2['product_id'] ; ?>/<?php echo $row2['namefile'] ; ?>" >
                                </div>
                                <p><?php echo $row['size4'] ; ?> ชิ้น</p>
                                <p>฿<?php echo $row['size4'] * $row2['price'] ; ?></p>
                                <a href="p-DeleteProduct.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&sim_id=<?php echo $row['sim_id'] ; ?>&product_address=4" class="btn btn-delete-toggle">ลบ</a>
                            </div>
                        <?php
                        }

                        }
                        ?>


<?php
                        if($row['product_id5'] != NULL){
                            $stmt2 = $pdo->query("select * from product where product_id = ".$row['product_id5']." ");
                            while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){

                        ?>
                            <div class="cart-shop-toggle-items">
                                <div class="cart-shop-toggle-items-img">
                                    <img src="upload/<?php echo $row2['product_id'] ; ?>/<?php echo $row2['namefile'] ; ?>" >
                                </div>
                                <p><?php echo $row['size5'] ; ?> ชิ้น</p>
                                <p>฿<?php echo $row['size5'] * $row2['price'] ; ?></p>
                                <a href="p-DeleteProduct.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>&sim_id=<?php echo $row['sim_id'] ; ?>&product_address=5" class="btn btn-delete-toggle">ลบ</a>
                            </div>
                        <?php
                        }

                        }
                        ?>


                            <div class="cart-shop-toggle-items-buy">
                                <a href="buyItems.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>" class="btn btn-buyItems">ดูตระกร้าสินค้า</a>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php 
    }
    }
?>





            </div>
        </div>

        <?php 
    }
    ?>

    </nav>