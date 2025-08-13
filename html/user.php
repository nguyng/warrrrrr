<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Sport Shop</title>
    <link rel="stylesheet" href="../css/header-fotter.css">
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <div class="header">
      <div class="promo-banner">
        <a href="#">BACK TO SCHOOL – MUA 3 GIẢM 30%</a>
        <a href="#">SPEEDO – QUÀ TẶNG ĐẾN 599K</a>
      </div>
      <nav class="main-menu">
        <ul>
            <h1 class="company-name"><a href="shop.html" style="color: white; text-decoration: none;">Nguyensports</a></h1>
          <li><a href="shop.html" style="color: white; text-decoration: none;">Hàng Mới</a></li>
          <li><a href="Hang-Nam.html" style="color: white; text-decoration: none;">Nam</a></li>
          <li><a href="Hang-Nu.html" style="color: white; text-decoration: none;">Nữ</a></li>

          <li><a href="Phu-Kien.html" style="color: white; text-decoration: none;">Phụ Kiện</a></li>

          <li><a href="Thuong-Hieu.html" style="color: white; text-decoration: none;">Thương Hiệu</a></li>

          <li><a href="giohang.html" style="color: white; text-decoration: none;">Ưu Đãi</a></li>
          <div class="actions">
    <div class="search">
        <input type="text" placeholder="Bạn đang tìm gì?">
        <button><img src="https://cdn-icons-png.flaticon.com/512/54/54481.png" alt="search"></button>
    </div>

    <a class="profile-user" href="user.html"><img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="user"></a>
    <a class="cart-bag" href="giohang.html">
      <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="bag">
      <span id="cartCount" class="cart-count">0</span>
    </a>
    <a href="user-address.html"><img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="location"></a>
    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="truck"></a>
</div>

        </ul>
      </nav>
    </div>
    <div class="header-spacer"></div>

    <div class="user-container">
        <img src="https://tse4.mm.bing.net/th/id/OIP.K98dh7RMhuVfhjN7N_SVQQHaEK?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Avatar" class="user-avatar">
        <h2 id="username">Nguyễn Văn Naruto</h2>
        <p>Email: <span id="email">nguyenvana@example.com</span></p>
        <p>Hạng thành viên: <span id="rank">Gold</span></p>

        <div class="stats">
            <div class="stat">
                <span id="orders">12</span>
                Đơn hàng
            </div>
            <div class="stat">
                <span id="points">350</span>
                Điểm
            </div>
        </div>

        <a href="donhangcuauser.html" class="btn">📦 Xem đơn hàng</a>
        <a href="giohang.html" class="btn">🛒 Giỏ hàng</a>
        <a href="shop.html" class="">
        <button class="btn logout" onclick="logout()">🚪 Đăng xuất</button>
        </a>
    </div>
<div class="footer">
      <footer>
        <div class="footer-container">
          <div class="footer-section">
            <h3>Hỗ Trợ Khách Hàng</h3>
            <ul>
              <li><a href="#">Hướng Dẫn Mua Hàng</a></li>
              <li><a href="#">Phương Thức Thanh Toán</a></li>
              <li><a href="#">Chính Sách Đổi Trả</a></li>
              <li><a href="#">Chính Sách Giao Hàng</a></li>
              <li><a href="#">Chính Sách Bảo Mật</a></li>
              <li><a href="#">Câu Hỏi Thường Gặp</a></li>
              <li><a href="#">Liên Hệ</a></li>
            </ul>
          </div>

          <div class="footer-section">
            <h3>Về Chúng Tôi</h3>
            <ul>
              <li><a href="#">Giới Thiệu</a></li>
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
    <script src="user.js"></script>
</body>
</html>
