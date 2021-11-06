<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <a href="form-add.php"><button class="btn btn-secondary mb-3" style="margin-left: 20px;">Thêm chi phí</button></a>
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
            include('../hw_1/config/config.php');

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
                                <a href="process-del.php?id=<?php echo $id; ?>"><button class="btn btn-danger">Xóa</button></a>
                            </td>
                            <td>
                                <a href="process-update.php?id=<?php echo $id; ?>"><button class="btn btn-success">Sửa</button></a>
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