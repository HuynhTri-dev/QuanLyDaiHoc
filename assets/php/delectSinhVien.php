<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "QLSV";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xóa sinh viên
$mssv = $_POST['mssv'];

$sql = "DELETE FROM SINHVIEN WHERE MaSV='$mssv'";
$conn->query($sql);

header("Location: ../../sinhVienPage.html");

$conn->close();
?>
</body>
</html>