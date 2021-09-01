<?php

include('root.php');

    $sql = "DELETE FROM product WHERE product_id = :product_id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['product_id' => $_REQUEST['product_id'] ]); 

    header("Location: stockControl.php");
?>