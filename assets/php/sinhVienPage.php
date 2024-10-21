<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
    // Ket noi co so du lieu
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "QLSV";
    
  
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // Lay du lieu database
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sql = "SELECT * FROM SINHVIEN";
        $result = $conn->query($sql);
        
        $sinhvien = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $sinhvien[] = $row;
            }   
        }
        // Trả về dữ liệu dưới dạng JSON
        echo json_encode($sinhvien);
    }
    
    // Gui du lieu cho database
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //Them du lieu
        $mssv = $_POST['student_id'];
        $hoten = $_POST['name'];
        $gioitinh = $_POST['sex'];
        $ngaysinh = $_POST['date_of_birth'];
        $quequan = $_POST['hometown'];
        $khoahoc = $_POST['depart'];
        $nganhhoc = $_POST['major'];
        $sdt = $_POST['phone'];
        
        $sql = "INSERT INTO SINHVIEN (MaSV, HoTen, Phai, NgaySinh, QueQuan, Khoa, Nganh, SDT) VALUES ('$mssv', '$hoten', $gioitinh, '$ngaysinh', '$quequan', '$khoahoc', '$nganhhoc', '$sdt');";
        $conn->query($sql);
    }



    $conn->close();
?>