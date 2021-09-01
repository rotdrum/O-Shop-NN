<?php

include('root.php');

    $sql = "DELETE FROM trading WHERE trading_id  = :trading_id  ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['trading_id' => $_REQUEST['trading_id'] ]); 

    header("Location: billControl.php");
?>