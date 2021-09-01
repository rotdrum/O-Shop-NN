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

        <form class="bc-admin" method="post" action="p-stockAdd.php" enctype="multipart/form-data">
            <h3>เพิ่มรายการสินค้า</h3>
            
            
            
            <div class="form-control">
                <p>ชื่อสินค้า</p>
                <input required type="text" name="names" id="" class="txt txt-login" placeholder="กรอกชื่อสินค้า">
            </div>

            <div class="form-control">
                <p>ราคาสินค้า</p>
                <input required type="number" name="price" id="" class="txt txt-login" placeholder="กรอกราคาสินค้า">
            </div>

            <div class="form-control">
                <p>หมวดหมู่</p>
                <select required name="types" class="sel">
                    <option value="">--- เลือก ---</option>
                    <option value="mode1">เสื้อผ้า</option>
                    <option value="mode2">กางเกง</option>
                    <option value="mode3">กระโปรง</option>
                    <option value="mode4">ชุดเดรส</option>
                    <option value="mode5">รองเท้า</option>
                    <option value="mode6">กระเป๋า</option>
                    <option value="mode7">เครื่องประดับ</option>
                </select>
            </div>

            <div class="form-upload">
                <label for="file-upload-1">Upload File
                    <input name="name_file" required type="file" id="file-upload-1" accept="image/*" class="file-upload">
                </label>
                <p id="filename-1"  class="filename">อัพโหลดรูปภาพสินค้า</p>
            </div>

            <div class="btn-control-buy">
                <a href="stockControl.php" class="btn btn-delete">ยกเลิก</a>
                <button class="btn btn-success">บันทึก</button>
            </div>
        </form>
    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
    <script src="../js/uploadfile.js"></script>

</body>
</html>