<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="../css/header-fotter.css" />
  <link rel="stylesheet" href="../css/dangki-login.css" />
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="promo-banner">
        <a href="#">BACK TO SCHOOL – MUA 3 GIẢM 30%</a>
        <a href="#">SPEEDO – QUÀ TẶNG ĐẾN 599K</a>
      </div>
      <nav class="main-menu">
        <ul>
            <h1 class="company-name"><a href="shop.php" style="color: white; text-decoration: none;">Nguyensports</a></h1>
          <li><a href="Hang-Moi.php" style="color: white; text-decoration: none;">Hàng Mới</a></li>
          <li><a href="Hang-Nam.php" style="color: white; text-decoration: none;">Nam</a></li>
          <li><a href="Hang-Nu.php" style="color: white; text-decoration: none;">Nữ</a></li>

          <li><a href="Phu-Kien.php" style="color: white; text-decoration: none;">Phụ Kiện</a></li>

          <li><a href="Thuong-Hieu.php" style="color: white; text-decoration: none;">Thương Hiệu</a></li>

          <li><a href="giohang.php" style="color: white; text-decoration: none;">Ưu Đãi</a></li>
          <div class="actions">
    <div class="search">
        <input type="text" placeholder="Bạn đang tìm gì?">
        <button><img src="https://cdn-icons-png.flaticon.com/512/54/54481.png" alt="search"></button>
    </div>

    <a class="profile-user" href="user.php"><img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="user"></a>
    <a class="cart-bag" href="giohang.php">
      <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="bag">
      <span id="cartCount" class="cart-count">0</span>
    </a>
    <a href="user-address.php"><img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="location"></a>
    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="truck"></a>
</div>

        </ul>
      </nav>
    </div>
    
    <div class="form-container">
      <h2>Đăng nhập</h2>
      <form action="#" method="post">
        <label for="username">Tên đăng nhập</label>
        <input type="text" id="username" name="username" required />

        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" required />

        <div class="form-links">
          <a href="#">Quên mật khẩu</a>
        </div>

        <button type="submit">ĐĂNG NHẬP</button>

        <div class="form-links">
          <a href="dangki.php">Đăng ký nhận ngay 150k</a>
        </div>
      </form>
    </div>

    <!-- Footer -->
    <div class="footer">
      <footer>
        <div class="footer-container">
          <div class="footer-section">
            <h3>Hỗ Trợ Khách Hàng</h3>
            <ul>
                             <li><a href="giohang.php">Hướng Dẫn Mua Hàng</a></li>
              <li><a href="#">Phương Thức Thanh Toán</a></li>
              <li><a href="#">Chính Sách Đổi Trả</a></li>
              <li><a href="#">Chính Sách Giao Hàng</a></li>
              <li><a href="#">Chính Sách Bảo Mật</a></li>
              <li><a href="#">Câu Hỏi Thường Gặp</a></li>
                             <li><a href="user-address.php">Liên Hệ</a></li>
            </ul>
          </div>

          <div class="footer-section">
            <h3>Về Chúng Tôi</h3>
            <ul>
                             <li><a href="shop.php">Giới Thiệu</a></li>
              <li><a href="#">Hệ Thống Cửa Hàng</a></li>
              <li><a href="#">Tuyển Dụng</a></li>
            </ul>
          </div>

          <div class="footer-section">
            <h3>Liên Hệ</h3>
            <p>Hotline: 1900 63 64 01</p>
            <p>Email: support@supersports.com.vn</p>
            <p>Giờ làm việc: 9:00 – 18:00 (T2 – CN)</p>
          </div>

          <div class="footer-section">
            <h3>Theo Dõi Chúng Tôi</h3>
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">YouTube</a></li>
            </ul>
          </div>
        </div>

        <div class="footer-bottom">
          <p>© 2025 Supersports Vietnam. All rights reserved.</p>
          <p>Giấy CNĐKDN: 0312652168 do Sở KHĐT TP.HCM cấp ngày 03/01/2014</p>
          <p>Địa chỉ: Tầng 9, Tòa nhà Etown Central, Quận 4, TP.HCM</p>
        </div>
      </footer>
    </div>
  </div>
</body>
</html>
