<?php

include('root.php');

    $sql = "DELETE FROM users WHERE user_id = :user_id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['user_id' => $_REQUEST['user_id'] ]); 

    header("Location: userControl.php");
?>