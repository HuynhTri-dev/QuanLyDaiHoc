<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "QLSV";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xóa giảng viên

    $magv = $_POST['magv'];

    $sql = "DELETE FROM GIANGVIEN WHERE MaGV='$magv'";
    if ($conn->query($sql) === TRUE) {
        echo "Xóa giảng viên thành công!";
    } else {
        echo "Lỗi: " . $conn->error;
    }

    header("Location: ../../giaoVienPage.html");


$conn->close();
?>

