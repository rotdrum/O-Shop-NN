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

        <?php
$stmt = $pdo->query("select * from users where user_id = ".$_REQUEST['user_id']." ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
?>

        <form class="bc-admin" method="post" action="p-userEdit.php?user_id=<?php echo $_REQUEST['user_id'] ; ?>"> 
            <h3>แก้ไขบัญชีผู้ใช้</h3>
    
            <div class="form-control">
                <p>คำนำหน้า</p>
                <select required name="tname" class="txt txt-login">
                        <option value="<?php echo $row['tname']; ?>"><?php echo $row['tname']; ?></option>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                        <option value="นาง">นาง</option>
                </select>
            </div>

            <div  class="form-control">
                <p>ชื่อจริง</p>
                <input  required value="<?php echo $row['fname']; ?>" type="text" name="fname" id="" class="txt txt-login" placeholder="กรอกชื่อจริง">
            </div>

            <div class="form-control">
                <p>นามสกุล</p>
                <input required value="<?php echo $row['lname']; ?>" type="text" name="lname" id="" class="txt txt-login" placeholder="กรอกนามสกุล">
            </div>

            <div class="form-control">
                <p>วัน/เดือน/ปีเกิด</p>
                <input required value="<?php echo $row['date']; ?>" type="date" name="date" id="" class="txt txt-login" >
            </div>

            <div class="form-control">
                <p>เบอร์โทรศัพท์</p>
                <input required value="<?php echo $row['tel']; ?>" type="tel" name="tel" id="" class="txt txt-login" placeholder="กรอกอีเมล">
            </div>

            <div class="form-control">
                <p>อีเมล</p>
                <input required value="<?php echo $row['email']; ?>" type="email" name="email" id="" class="txt txt-login" placeholder="กรอกอีเมล">
            </div>

            <div class="form-control">
                <p>บัญชีผู้ใช้</p>
                <input required value="<?php echo $row['username']; ?>" type="text" name="username" id="" class="txt txt-login" placeholder="กรอกบัญชีผู้ใช้">
            </div>

            <div class="form-control">
                <p>รหัสผ่าน</p>
                <input required value="<?php echo $row['password']; ?>" type="password" name="password" id="" class="txt txt-login" placeholder="กรอกรหัสผ่าน">
            </div>

            <div class="btn-control-buy">
                <a href="userControl.php" class="btn btn-delete">ยกเลิก</a>
                <button class="btn btn-success">บันทึก</button>
            </div>
        </form>

        <?php
}
?>
    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>