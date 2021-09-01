<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <?php include('root.php'); ?>
    <?php include('import.php'); ?>
    
</head>
<body>

    <!-- if not login -->
    <?php include('navbarNotLogin.php'); ?>

    <section class="body-container">

        <form class="card" method="post" action="p-login.php">
            <h1>เข้าสู่ระบบ</h1>
            <input type="text" name="username" id="" class="txt txt-login" placeholder="กรอกบัญชีผู้ใช้">
            <input type="password" name="password" id="" class="txt txt-login" placeholder="กรอกรหัสผ่าน">
          <!--  <a href="index.php">ลืมรหัสผ่าน ?</a>  -->
            <input type="submit" value="เข้าสู่ระบบ" class="btn btn-login">
        </form>

    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>