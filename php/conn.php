<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sport";
    
    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
    
    // Thiết lập charset
    mysqli_set_charset($conn, 'utf8');
?>