<?php
session_start();
if (!isset($_SESSION['loginOK'])) {
    header("Location: login.php");
}
?>
<?php
include '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../int.css">
    <title>HW</title>
</head>

<body>
    <?php
    include("../header.php");
    ?>
    <a href="form-add.php"><button class="btn btn-secondary mb-3" style="margin-left: 20px; border-radius: 25px;">Thêm chi phí</button></a>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Chi Phí</th>
                    <th scope="col">Nhân Viên</th>
                    <th scope="col">Trạng Thái</th>
                </tr>
            </thead>
            <?php
        

            $sql = "SELECT * FROM dbo_chiphi";
            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {



                if (mysqli_num_rows($res) > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['id'];
                        $date = $rows['date'];
                        $content = $rows['content'];
                        $price = $rows['price'];
                        $staff = $rows['staff'];
                        $status = $rows['status'];

            ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $date; ?></td>
                            <td><?php echo $content; ?></td>
                            <td><?php echo $price; ?></td>
                            <td><?php echo $staff; ?></td>
                            <td><?php echo $status; ?></td>
                            <td>
                                <a href="process-del.php?id=<?php echo $id; ?>"><button class="btn btn-danger" style="border-radius: 25px;">Xóa</button></a>
                            </td>
                            <td>
                                <a href="process-update.php?id=<?php echo $id; ?>"><button class="btn btn-success" style="border-radius: 25px;">Sửa</button></a>
                            </td>
                        </tr>
            <?php
                    }
                }
            }
            ?>





        </table>
    </div>
</body>