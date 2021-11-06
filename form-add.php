<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/hw_1/int.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    include 'header.php';
    include '../hw_1/config/config.php';
    ?>
   
    <main class="container">
        <center>
            <h2 style="color: indianred;">Thêm thông tin khoản chi</h2>
        </center>
        <form action="process-add.php" method="post" style="padding-top: 60px">
            <div class="form-group row ip">
                <label for="date" class="col-sm-2 col-form-label">Ngày</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="date" name="date">
                </div>
            </div>
            </div>
            <div class="form-group row ip">
                <label for="content" class="col-sm-2 col-form-label">Nội Dung</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="content" name="content">
                </div>
            </div>
            <div class="form-group row ip">
                <label for="price" class="col-sm-2 col-form-label">Chi Phí</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="price" name="price">
                </div>
            </div>
            <div class="form-group row ip">
                <label for="staff" class="col-sm-2 col-form-label">Nhân Viên</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="staff" name="staff">
                </div>
            </div>
            <div class="form-group row ip">
                <label for="status" class="col-sm-2 col-form-label">Trạng Thái</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="status" name="status">
                </div>
            </div>

            <div class="form-group row" style="padding-top: 35px;">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info">Thêm</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>