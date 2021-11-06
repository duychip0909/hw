<?php
include('../hw_1/config/config.php');
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM dbo_chiphi WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $rows = mysqli_fetch_assoc($res);
        $id = $rows['id'];
        $date = $rows['date'];
        $content = $rows['content'];
        $price = $rows['price'];
        $staff = $rows['staff'];
        $status = $rows['status'];
    } else {
        header('location: index.php');
    }
} else {
    header('location: index.php');
}
?>
<?php

if (isset($_POST['btnUp'])) {
    
    $date = $_POST['date'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    $staff = $_POST['staff'];
    $status = $_POST['status'];



    // Update Database
    $sql2 = "UPDATE `dbo_chiphi` SET date = '$date', content = '$content', price = '$price', staff = '$staff', status = '$status' WHERE id = $id";
    $res2 = mysqli_query($conn, $sql2);

     if ($res2 == TRUE) {
        // Category Updated
        header('location: index.php');
    } else {
        // update failed
        header('location: process-update.php');
    } 
    mysqli_close($conn);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/hw_1/int.css">
    <title>Update</title>
</head>

<body>
    <div class="container-fluid">
        <br>
        <center>
            <h1 style="color: orange;">THỐNG KÊ CHI PHÍ HIGHWAY MENSWEAR</h1>
        </center>
        <br>

        <form action="" method="post">
            <div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Ngày</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="date" value="<?php echo $date ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nội dung</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="content" value="<?php echo $content ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Chi Phí</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="price" value="<?php echo $price ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nhân Viên</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="staff" value="<?php echo $staff ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Trạng Thái</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="status" value="<?php echo $status ?>">
                    </div>
                </div>
                <button type="submit" name="btnUp" class="btn btn-secondary">Sửa</button>
            </div>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>