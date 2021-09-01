<?php
include('root.php');

$product_id = 0 ;

$stmt = $pdo->query("select * from product ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $product_id = $row['product_id'];
}

$product_id = $product_id + 1 ;

mkdir("../upload/$product_id/", 0700);

$targetfolder = "../upload/$product_id/";

$targetfolder = $targetfolder . basename( $_FILES['name_file']['name']) ;

if(move_uploaded_file($_FILES['name_file']['tmp_name'], $targetfolder)){
    echo "The file ". basename( $_FILES['name_file']['name']). " is uploaded";
}
else {
    echo "Problem uploading file";
}

$sql = 'INSERT INTO product (product_id, names, price, types, namefile, status) 
VALUES (:product_id, :names, :price, :types, :namefile, :status) ';
$stmt = $pdo->prepare($sql);
$stmt->execute([
            "product_id" => $product_id, 
            "names" =>  $_POST['names'], 
            "price" =>  $_POST['price'], 
            "types" =>  $_POST['types'], 
            "namefile" => basename( $_FILES['name_file']['name']), 
            "status" =>  1,
]);

header("Location: stockControl.php");

?>