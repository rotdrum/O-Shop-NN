<?php

    if($_POST['txt'] == "nnshop-admin"){
        header('Location: userControl.php');
    }
    else if($_POST['txt'] == "drumzioo"){
        header('Location: userControl.php');
    }
    else{
        header('Location: login.php');
    }
?>