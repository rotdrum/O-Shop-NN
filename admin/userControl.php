<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>

    <?php include('root.php'); ?>
    <?php include('import.php'); ?>

</head>
<body>

    

    <section class="body-container-shop">
        <?php include('navbar.php'); ?>

        <div class="bc-admin">

            <div class="bc-admin-header">
                <h3>จัดการบัญชีผู้ใช้</h3>
                <!--
                <a href="userAdd.php" class="btn btn-success">เพิ่มบัญชีผู้ใช้</a>
                -->
            </div>
            <table class="tb-admin">
                <thead>
                    <tr>
                        <th width="30">ลำดับ</th>
                        <th>บัญชีผู้ใช้</th>
                        <th class="th-btn-control">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
<?php
$stmt = $pdo->query("select * from users ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
?>

                    <tr>
                        <td class="center-control"><?php echo $row['user_id'] ; ?></td>
                        <td ><?php echo $row['tname'] ; ?><?php echo $row['fname'] ; ?> <?php echo $row['lname'] ; ?></td>
                        <td class="td-btn-control">
                            <a href="userEdit.php?user_id=<?php echo $row['user_id'] ; ?>" class="btn btn-edit">แก้ไข</a>
                            <a href="p-userDelete.php?user_id=<?php echo $row['user_id'] ; ?>" class="btn btn-delete">ลบ</a>
                        </td>
                    </tr>
                    <?php
}
?>
             <!--
                    <tr>
                        <td class="center-control">1</td>
                        <td >Natthakiat Khunkaew</td>
                        <td class="td-btn-control"> 
                            <a href="userEdit.php" class="btn btn-edit">แก้ไข</a>
                            <a href="#" class="btn btn-delete">ลบ</a>
                        </td>
                    </tr>
-->
                </tbody>
            </table>
        </div>
    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>