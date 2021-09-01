<?php
    include('root.php');

    /*
    $sql = "UPDATE sim  SET product_id".$_REQUEST['product_address']." = :product_id".$_REQUEST['product_address']."  WHERE sim_id = :sim_id  ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ "sim_id" => $_REQUEST['sim_id'] , "product_id".$_REQUEST['product_address'] => NULL ]);
*/

    $sql = "UPDATE trading  SET address = :address  WHERE trading_id = :trading_id  ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ "trading_id" => $_REQUEST['trading_id'] , "address" => $_POST['names']." ".$_POST['address']  ]);


    $sql = "UPDATE trading  SET tel = :tel  WHERE trading_id = :trading_id  ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ "trading_id" => $_REQUEST['trading_id'] , "tel" => $_POST['tel']  ]);



    header("Location: checkBill.php?user_id=".$_REQUEST['user_id']."&trading_id=".$_REQUEST['trading_id']."");


?>