<?php
include('root.php');

$trading_id = 0 ;

$stmt = $pdo->query("select * from trading ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $trading_id = $row['trading_id'];
}
$trading_id = $trading_id + 1 ;

$sql = 'INSERT INTO trading (trading_id, price_sum, names, tel, address, price_tf, time, name_file, status, user_id) 
VALUES (:trading_id, :price_sum, :names, :tel, :address, :price_tf, :time, :name_file, :status,  :user_id) ';
$stmt = $pdo->prepare($sql);
$stmt->execute([
            "trading_id" => $trading_id, 
            "price_sum" =>  $_POST['sum'], 
            "names" => $_POST['comment'], 
            "tel" =>  NULL, 
            "address" =>  NULL, 
            "price_tf" =>  NULL, 
            "time" =>  NULL, 
            "name_file" =>  NULL, 
            "status" =>  0, 
            "user_id" =>  $_REQUEST['user_id'], 
]);

$sql = "DELETE FROM sim WHERE sim_id = :sim_id ";
$stmt = $pdo->prepare($sql);
$stmt->execute(['sim_id' => $_POST['sim_id'] ]); 

header("Location: address.php?user_id=".$_REQUEST['user_id']."&trading_id=".$trading_id."");

?>