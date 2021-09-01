<?php

include('root.php');


$sql = "UPDATE users  SET tname = :tname  WHERE user_id = :user_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'user_id' => $_REQUEST['user_id'], 'tname' => $_POST['tname'] ]);

$sql = "UPDATE users  SET fname = :fname  WHERE user_id = :user_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'user_id' => $_REQUEST['user_id'], 'fname' => $_POST['fname'] ]);

$sql = "UPDATE users  SET lname = :lname  WHERE user_id = :user_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'user_id' => $_REQUEST['user_id'], 'lname' => $_POST['lname'] ]);

$sql = "UPDATE users  SET date = :date  WHERE user_id = :user_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'user_id' => $_REQUEST['user_id'], 'date' => $_POST['date'] ]);

$sql = "UPDATE users  SET email = :email  WHERE user_id = :user_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'user_id' => $_REQUEST['user_id'], 'email' => $_POST['email'] ]);

$sql = "UPDATE users  SET tel = :tel  WHERE user_id = :user_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'user_id' => $_REQUEST['user_id'], 'tel' => $_POST['tel'] ]);

$sql = "UPDATE users  SET username = :username  WHERE user_id = :user_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'user_id' => $_REQUEST['user_id'], 'username' => $_POST['username'] ]);

$sql = "UPDATE users  SET password = :password  WHERE user_id = :user_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'user_id' => $_REQUEST['user_id'], 'password' => $_POST['password'] ]);

header("Location: userControl.php");
?>