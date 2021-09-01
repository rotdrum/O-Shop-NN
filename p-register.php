<?php
include('root.php');

$user_id = 0 ;

$stmt = $pdo->query("select * from users ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $user_id = $row['user_id'];
}
$user_id = $user_id + 1 ;

$sql = 'INSERT INTO users (user_id, tname, fname, lname, date, tel, email, username, password, status) 
VALUES (:user_id, :tname, :fname, :lname, :date, :tel, :email, :username, :password,  :status) ';
$stmt = $pdo->prepare($sql);
$stmt->execute([
            "user_id" => $user_id, 
            "tname" =>  $_POST['tname'], 
            "fname" =>  $_POST['fname'], 
            "lname" =>  $_POST['lname'], 
            "date" =>  $_POST['date'], 
            "tel" =>  $_POST['tel'], 
            "email" =>  $_POST['email'], 
            "username" =>  $_POST['username'], 
            "password" =>  $_POST['password'], 
            "status" =>  1, 
]);

header("Location: index.php?user_id=".$user_id."");

?>