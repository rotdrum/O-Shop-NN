<?php
    include('root.php');

    
    $sql = "UPDATE sim  SET product_id".$_REQUEST['product_address']." = :product_id".$_REQUEST['product_address']."  WHERE sim_id = :sim_id  ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ "sim_id" => $_REQUEST['sim_id'] , "product_id".$_REQUEST['product_address'] => NULL ]);

    $sql = "UPDATE sim  SET size".$_REQUEST['product_address']." = :size".$_REQUEST['product_address']."  WHERE sim_id = :sim_id  ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ "sim_id" => $_REQUEST['sim_id'] , "size".$_REQUEST['product_address'] => NULL ]);

    header("Location: index.php?user_id=".$_REQUEST['user_id']."");


?>