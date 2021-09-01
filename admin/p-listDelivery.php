<?php

include('root.php');

$sql = "UPDATE trading  SET status = :status  WHERE trading_id = :trading_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'trading_id' => $_REQUEST['trading_id'], 'status' => 3 ]);


header("Location: listDelivery.php");
?>