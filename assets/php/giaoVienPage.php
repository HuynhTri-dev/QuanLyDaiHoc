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

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sql = "SELECT * FROM GIANGVIEN";
        $result = $conn->query($sql);
        
        $giaovien = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $giaovien[] = $row;
            }   
        }
        // Trả về dữ liệu dưới dạng JSON
        echo json_encode($giaovien);
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //Them du lieu
        $magv = $_POST['teacher_id'];
        $hoten = $_POST['name'];
        $ngaysinh = $_POST['date_of_birth'];
        $sdt = $_POST['phone'];
        $email = $_POST['email'];
        $khoa = $_POST['depart'];
    
        $sql = "INSERT INTO GIANGVIEN (MaGV, HoTen, NgaySinh, SDT, Email, Khoa) VALUES ('$magv', '$hoten', '$ngaysinh', '$sdt', '$email', '$khoa')";
        
        $conn->query($sql);
        // Xoa du lieu
        
    }

    


    $conn->close();
?>