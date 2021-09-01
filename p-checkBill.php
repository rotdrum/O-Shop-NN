<?php
include('root.php');

$trading_id = $_REQUEST['trading_id'] ;

mkdir("upload2/$trading_id/", 0700);

$targetfolder = "upload2/$trading_id/";

$targetfolder = $targetfolder . basename( $_FILES['name_file']['name']) ;

if(move_uploaded_file($_FILES['name_file']['tmp_name'], $targetfolder)){
    echo "The file ". basename( $_FILES['name_file']['name']). " is uploaded";
}
else {
    echo "Problem uploading file";
}


$sql = "UPDATE trading  SET name_file = :name_file  WHERE trading_id = :trading_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ "trading_id" => $_REQUEST['trading_id'] , "name_file" => basename( $_FILES['name_file']['name'])  ]);


$sql = "UPDATE trading  SET time = :time  WHERE trading_id = :trading_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ "trading_id" => $_REQUEST['trading_id'] , "time" => $_POST['time']  ]);

$sql = "UPDATE trading  SET price_tf = :price_tf  WHERE trading_id = :trading_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ "trading_id" => $_REQUEST['trading_id'] , "price_tf" => $_POST['price_tf']  ]);

$sql = "UPDATE trading  SET status = :status  WHERE trading_id = :trading_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ "trading_id" => $_REQUEST['trading_id'] , "status" => 1  ]);


 header("Location: checkStatus.php?user_id=".$_REQUEST['user_id']."&trading_id=".$_REQUEST['trading_id']."");

?>