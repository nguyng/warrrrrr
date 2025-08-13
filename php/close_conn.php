<?php
// Đóng kết nối database nếu đã được tạo
if (isset($conn) && $conn instanceof mysqli) {
    $conn->close();
}
?>
