<?php
include('root.php');

$stmt = $pdo->query("select * from users WHERE username = '".$_POST["username"]."' and password = '".$_POST["password"]."' ");
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
        $password = $row['password']   ;
        $status = $row['status']  ;
        $user_id = $row['user_id'] ;
}; 

if( $_POST["password"] == $password ){
    if( $status == 1){
        header("Location: index.php?user_id=".$user_id."");
    }
    else{
        header("Location: login.php");
    }
}
else{
    header("Location: login.php");
}

?>