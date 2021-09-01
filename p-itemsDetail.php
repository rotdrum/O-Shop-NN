<?php
    include('root.php');

    $flag = 0 ;
   
    $stmt = $pdo->query("select * from sim where user_id = ".$_REQUEST['user_id']." ");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $flag = 1 ;
      $sim_id = $row['sim_id'];
    }
    

   if($flag == 0){
      $sim_id = 1 ;

      $stmt = $pdo->query("select * from sim ");
         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
         $sim_id = $row['sim_id'];
      }

      $sim_id = $sim_id + 1 ;

      $sql = 'INSERT INTO sim (sim_id, product_id1, size1, product_id2, size2, product_id3, size3, product_id4, size4, product_id5, size5,user_id) 
      VALUES (:sim_id, :product_id1, :size1, :product_id2, :size2, :product_id3, :size3, :product_id4, :size4, :product_id5, :size5,  :user_id) ';
      $stmt = $pdo->prepare($sql);
      $stmt->execute([
                  "sim_id" => $sim_id, 
                  "product_id1" =>  $_POST['product_id'], 
                  "size1" =>  $_POST['size'], 
                  "product_id2" =>  NULL, 
                  "size2" =>  NULL, 
                  "product_id3" =>  NULL, 
                  "size3" =>  NULL, 
                  "product_id4" =>  NULL, 
                  "size4" =>  NULL, 
                  "product_id5" =>  NULL, 
                  "size5" => NULL, 
                  "user_id" =>  $_REQUEST['user_id'], 
      ]);

   }
   else{
      $stmt = $pdo->query("select * from sim where sim_id = ".$sim_id." ");
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

         if($row['product_id2'] == NULL){
            $sql = "UPDATE sim  SET product_id2 = :product_id2  WHERE sim_id = :sim_id  ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ 'sim_id' => $sim_id, 'product_id2' => $_POST['product_id'] ]);

            $sql = "UPDATE sim  SET size2 = :size2  WHERE sim_id = :sim_id  ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ 'sim_id' => $sim_id, 'size2' => $_POST['size'] ]);
         }
         elseif($row['product_id3'] == NULL){
            $sql = "UPDATE sim  SET product_id3 = :product_id3  WHERE sim_id = :sim_id  ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ 'sim_id' => $sim_id, 'product_id3' => $_POST['product_id'] ]);

            $sql = "UPDATE sim  SET size3 = :size3  WHERE sim_id = :sim_id  ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ 'sim_id' => $sim_id, 'size3' => $_POST['size'] ]);
         }
         elseif($row['product_id4'] == NULL){
            $sql = "UPDATE sim  SET product_id4 = :product_id4  WHERE sim_id = :sim_id  ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ 'sim_id' => $sim_id, 'product_id4' => $_POST['product_id'] ]);

            $sql = "UPDATE sim  SET size4 = :size4  WHERE sim_id = :sim_id  ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ 'sim_id' => $sim_id, 'size4' => $_POST['size'] ]);
         }
         elseif($row['product_id5'] == NULL){
            $sql = "UPDATE sim  SET product_id5 = :product_id5  WHERE sim_id = :sim_id  ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ 'sim_id' => $sim_id, 'product_id5' => $_POST['product_id'] ]);

            $sql = "UPDATE sim  SET size5 = :size5  WHERE sim_id = :sim_id  ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([ 'sim_id' => $sim_id, 'size5' => $_POST['size'] ]);
         }
         else{

         }

      }

   }

   if(isset($_POST['buy'])) {

      header("Location: buyItems.php?user_id=".$_REQUEST['user_id']."");

   }
   elseif(isset($_POST['save'])){
      header("Location: index.php?user_id=".$_REQUEST['user_id']."");
   }

?>