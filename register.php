<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>

    <?php include('root.php'); ?>
    <?php include('import.php'); ?>
</head>
<body>

    <!-- if not login -->
    <?php include('navbarNotLogin.php'); ?>

    <section class="body-container">

        <form class="card" method="post" action="p-register.php">
            <h1>สมัครสมาชิก</h1>

            <div class="form-control">
                <p>คำนำหน้า</p>
                <select required name="tname" class="txt txt-login">
                        <option value="">------เลือก-----</option>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                        <option value="นาง">นาง</option>
                </select>
            </div>

            <div  class="form-control">
                <p>ชื่อจริง</p>
                <input  required type="text" name="fname" id="" class="txt txt-login" placeholder="กรอกชื่อจริง">
            </div>

            <div class="form-control">
                <p>นามสกุล</p>
                <input required type="text" name="lname" id="" class="txt txt-login" placeholder="กรอกนามสกุล">
            </div>

            <div class="form-control">
                <p>วัน/เดือน/ปีเกิด</p>
                <input required type="date" name="date" id="" class="txt txt-login" >
            </div>

            <div class="form-control">
                <p>เบอร์โทรศัพท์</p>
                <input required type="tel" name="tel" id="" class="txt txt-login" placeholder="กรอกอีเมล">
            </div>

            <div class="form-control">
                <p>อีเมล</p>
                <input required type="email" name="email" id="" class="txt txt-login" placeholder="กรอกอีเมล">
            </div>

            <div class="form-control">
                <p>บัญชีผู้ใช้</p>
                <input required type="text" name="username" id="" class="txt txt-login" placeholder="กรอกบัญชีผู้ใช้">
            </div>

            <div class="form-control">
                <p>รหัสผ่าน</p>
                <input required type="password" name="password" id="" class="txt txt-login" placeholder="กรอกรหัสผ่าน">
            </div>
            
            <input type="submit" value="สมัครสมาชิก" class="btn btn-login">
        </form>

    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>