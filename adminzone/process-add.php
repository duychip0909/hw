<?php
    $date = $_POST['date'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    $staff = $_POST['staff'];
    $status = $_POST['status'];
// kết nối tới server sql

include '../config/config.php';

//2. truy vấn dữ liệu
$sql_2 = "INSERT INTO dbo_chiphi (date, content, price, staff, status) 
VALUES ('$date','$content','$price','$staff','$status')";

$result_2 = (mysqli_query($conn, $sql_2));
if ($result_2 > 0) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Lỗi";
}

mysqli_close($conn);
header("location: index.php");
?>

