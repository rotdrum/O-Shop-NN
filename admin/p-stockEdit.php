<?php

include('root.php');

$sql = "UPDATE product  SET names = :names  WHERE product_id = :product_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'product_id' => $_REQUEST['product_id'], 'names' => $_POST['names'] ]);

$sql = "UPDATE product  SET price = :price  WHERE product_id = :product_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'product_id' => $_REQUEST['product_id'], 'price' => $_POST['price'] ]);

$sql = "UPDATE product  SET types = :types  WHERE product_id = :product_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'product_id' => $_REQUEST['product_id'], 'types' => $_POST['types'] ]);

header("Location: stockControl.php");
?>