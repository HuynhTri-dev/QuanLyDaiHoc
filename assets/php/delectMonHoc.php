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

// Xóa môn học
    $mamh = $_POST['mamh'];

    // Xóa môn học dựa trên tên môn học và mã sinh viên
    $sql = "DELETE FROM MONHOC WHERE MaMH='$mamh'";
    if ($conn->query($sql) === TRUE) {
        echo "Xóa môn học thành công!";
    } else {
        echo "Lỗi: " . $conn->error;
    }

    header("Location: ../../monHocPage.html");

$conn->close();
?>


<!-- Form xóa môn học -->


</body>
</html>
