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
        $sql = "SELECT * FROM MONHOC";
        $result = $conn->query($sql);
        
        $monhoc = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $monhoc[] = $row;
            }   
        }
        // Trả về dữ liệu dưới dạng JSON
        echo json_encode($monhoc);
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //Them du lieu
        $mamh = $_POST['subject_id'];
        $tenmonhoc = $_POST['name'];
        $tiethoc = $_POST['soTietHoc'];
        $sotinchi = $_POST['tinChi'];

        $sql = "INSERT INTO MONHOC (MaMH, TenMH, TietHoc, SoTinChi) VALUES ('$mamh', '$tenmonhoc', $tiethoc, $sotinchi)";
        $conn->query($sql);
    }
        // Xoa du lieu

    


    $conn->close();
?>