
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="../css/header-fotter.css">
    <link rel="stylesheet" href="../css/giohang.css">
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

    <!-- Thanh công cụ trên cùng -->
    <div class="cart-toolbar">
        <div class="left">
            <label>
                <input id="selectAll" type="checkbox"> CHỌN TẤT CẢ (<span id="allCount">0</span> SẢN PHẨM)
            </label>
        </div>
        <div class="right">
            <button id="deleteSelected" class="btn-text">Xóa đã chọn</button>
        </div>
    </div>

    <div class="cart-container">
        <!-- Danh sách sản phẩm -->
        <div id="cartItems" class="cart-items">
            <!-- Sản phẩm 1 -->
            <div class="cart-item" data-id="1" data-price="900000">
                <input class="item-check" type="checkbox">
                <div class="shop-name">Anello</div>
                <div class="free-ship">Miễn phí vận chuyển cho hình thức giao hàng Tiêu chuẩn</div>
                <div class="item-info">
                    <img src="https://salt.tikicdn.com/cache/280x280/ts/product/02/85/b0/5889897240a0171f503d6b7ae643a186.jpg" alt="Túi đeo chéo">
                    <div class="details">
                        <h4>Túi đeo chéo ANELLO unisex cỡ nhỏ (5 màu) AU-A0131</h4>
                        <p class="color">Đỏ Rượu</p>
                        <p class="price">900.000₫</p>
                    </div>
                    <div class="quantity">
                        <button class="dec">-</button>
                        <span class="qty">1</span>
                        <button class="inc">+</button>
                    </div>
                    <button class="remove-btn remove-item" title="Xóa">🗑</button>
                </div>
            </div>

            <!-- Sản phẩm 2 -->
            <div class="cart-item"  data-id="2" data-price="163725">
                <input class="item-check" type="checkbox">
                <div class="shop-name">BusinessElite</div>
                <div class="item-info">
                    <img src="https://m.media-amazon.com/images/I/51hI9P1BveL._AC_.jpg" alt="Túi điện thoại">
                    <div class="details">
                        <h4>BusinessElite Túi Đựng Điện Thoại Đeo Hông Chạy Bộ Đa Năng Cho Nam Và Nữ Cho iPhone 14 13 12</h4>
                        <p class="color">Màu xanh</p>
                        <p class="price">163.725₫</p>
                    </div>
                    <div class="quantity">
                        <button class="dec">-</button>
                        <span class="qty">1</span>
                        <button class="inc">+</button>
                    </div>
                    <button class="remove-btn remove-item" title="Xóa">🗑</button>
                </div>
            </div>
        </div>

        <!-- Thông tin đơn hàng -->
        <div class="cart-summary">
            <div class="delivery">
                <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="pin">
                <div>
                    <div class="delivery-title">Địa điểm</div>
                    <div class="delivery-text">Xã Tam Quang, Huyện Núi Thành, Quảng Nam</div>
                </div>
            </div>
            <h3>Thông tin đơn hàng</h3>
            <div class="summary-row">
                <span>Tạm tính (<span id="selectedCount">0</span> sản phẩm)</span>
                <span id="subtotalText">0₫</span>
            </div>
            <div class="summary-row">
                <span>Phí vận chuyển</span>
                <span id="shippingText">0₫</span>
            </div>
            <div class="voucher">
                <input id="voucherInput" type="text" placeholder="Nhập mã voucher (ví dụ: GIAM10)">
                <button id="applyVoucherBtn">ÁP DỤNG</button>
            </div>
            <div class="summary-total">
                <span>Tổng cộng</span>
                <span id="totalText">0₫</span>
            </div>
            <p class="vat-note">Đã bao gồm VAT (nếu có)</p>
            <button id="checkoutBtn" class="checkout">THANH TOÁN (0)</button>
        </div>
    </div>

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
  
  <script src="../js/giohang.js"></script>
  </body>
  </html>
