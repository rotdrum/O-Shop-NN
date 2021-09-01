<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>

    <?php include('import.php'); ?>

</head>
<body>

    

    <section class="body-container-shop">
        <?php include('navbar.php'); ?>

        <div class="bc-admin">
            <h3>เพิ่มบัญชีผู้ใช้</h3>
            
            
            <div class="form-control">
                <p>บัญชีผู้ใช้</p>
                <input type="text" name="" id="" class="txt txt-login" placeholder="กรอกบัญชีผู้ใช้">
            </div>

            <div class="form-control">
                <p>รหัสผ่าน</p>
                <input type="text" name="" id="" class="txt txt-login" placeholder="กรอกรหัสผ่าน">
            </div>

            <div class="btn-control-buy">
                <a href="userControl.php" class="btn btn-delete">ยกเลิก</a>
                <a href="#" class="btn btn-success">บันทึก</a>
            </div>
        </div>
    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>