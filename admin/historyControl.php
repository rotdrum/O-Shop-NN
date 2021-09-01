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
            <h3>รายการจัดส่งสินค้าแล้ว</h3>
            <table class="tb-admin">
                <thead>
                    <tr>
                        <th width="30">ลำดับ</th>
                        <th>รหัสการสั่งซื้อ</th>
                        <th>ชื่อ-สกุล</th>
                        <th class="th-btn-control-list">สถานะ</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
            
            $count  = 1 ;
    $stmt = $pdo->query("select * from trading where status = 3 ");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

   
    ?>
                    <tr>
                        <td class="center-control"><?php echo $count  ; ?></td>
                        <td>
                            <p><?php echo $row['trading_id']  ; ?></p>
                        </td>
                        <td>
                            <p><?php echo $row['address']   ; ?></p>
                        </td>
                        <td class="center-control">
                            <p>สำเร็จ</p>
                        </td>
                    </tr>
                    <?php 
                    $count ++ ;
}
    ?>

                </tbody>
            </table>
        </div>
    </section>
    

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Script -->
    <script src="js/jquery.js"></script>
    <script>
        function detail() {
            Swal.fire({
                title: '<h3>รายการสินค้า</h3>',
                width: '1200px',
                html:
                    '<form>'+
                        '<div class="card-list">'+
                            '<div class="card-list-address">'+
                                '<p>ณัฐเกียรติ ขุนแก้ว</p>'+
                                '<p>6/8 ซ.พิศาลสุข ถ.พัฒนาการคูขวาง ต.ในเมือง อ.เมือง จ.นครศรีธรรมราช 80000</p>'+
                                '<p>โทร 012-345-6789</p>'+
                            '</div>'+

                            '<div class="card-list-items">'+
                                '<div class="card-list-items-img">'+
                                    '<img src="../img/notebook.jpg">'+
                                '</div>'+
                                '<p>Notebook Asus Prime 64Gb</p>'+
                                '<p>จำนวน 3 ชิ้น</p>'+
                            '</div>'+

                            '<div class="card-list-items">'+
                                '<div class="card-list-items-img">'+
                                    '<img src="../img/notebook.jpg">'+
                                '</div>'+
                                '<p>Notebook Asus Prime 64Gb</p>'+
                                '<p>จำนวน 3 ชิ้น</p>'+
                            '</div>'+

                        '</div>'+
                    '</form>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                    '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: 'Thumbs down'
            })
        }
    </script>
</body>
</html>