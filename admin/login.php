<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <?php include('import.php'); ?>
    
</head>
<body>

    <section class="body-container">

        <form class="card" action="p-login.php" method="post">
            <h1>เข้าสู่ระบบ</h1>
            <input required type="text" name="txt" id="" class="txt txt-login" placeholder="Passcode">
         <!--    <a href="../index.php">ยังไม่มีรหัสผ่าน ?</a>  -->
            <input type="submit" value="เข้าสู่ระบบ" class="btn btn-login">
        </form>

    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
</body>
</html>