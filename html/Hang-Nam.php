<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàng Nam - Nguyensports</title>
    <link rel="stylesheet" href="../css/Hang_Moi.css">
    <link rel="stylesheet" href="../css/header-fotter.css">
    <link rel="stylesheet" href="../css/giohang.css">
    <script src="../js/Hang_Moi.js" defer></script>
    <script src="add_cart_functions.js" defer></script>
</head>
<body>
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

                <!-- Main Content -->
                <main class="main-content">
                  <!-- Hero Section -->
                  <section class="hero-section">
                    <div class="hero-content">
                      <h1>HÀNG NAM 2025</h1>
                      <p>Phong cách thể thao nam tính, năng động và hiện đại</p>
                      <a href="#products" class="cta-button">Khám Phá Ngay</a>
                    </div>
                  </section>

                  <!-- Category Navigation -->
                  <section class="brand-nav">
                      <div class="container">
                          <h2>Danh Mục Sản Phẩm Nam</h2>
                          <div class="brand-tabs">
                              <button class="brand-tab active" data-category="all">Hot</button>
                              <button class="brand-tab" data-category="ao">Áo</button>
                              <button class="brand-tab" data-category="quan">Quần</button>
                              <button class="brand-tab" data-category="giay">Giày</button>
                              <button class="brand-tab" data-category="phukien">Phụ Kiện</button>
                          </div>
                          <div id="product-list" style="margin-top:20px;"></div>
                      </div>
                  </section>


                  <!-- Products Section -->
                  <section id="products" class="products-section">
                    <div class="container">
                      <!-- Áo Section -->
                      <div class="brand-products" data-category="ao">
                        <h2 class="brand-title">Áo Nam</h2>
                        <div class="products-grid">
                                                     <?php
                           require_once '../php/conn.php';

                          $sql = "SELECT * FROM (SELECT * FROM sanpham sp JOIN colorsp cs ON sp.idSP = cs.idSP JOIN color c ON cs.idColor = c.idcolor;) WHERE idSP LIKE 'AF%'"; 
                          $stmt = $conn->prepare($sql);
                          $result = $stmt->get_result();

                          if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                                  ?>
                                  <div class="product-card">
                                    <div class="product-image">
                                      <img src="<?php echo $row['img']; ?>" alt="<?php echo $row['tenSP']; ?>">
                                      <div class="product-overlay">
                                        <button class="quick-view">Xem Nhanh</button>
                                      </div>
                                    </div>
                                    <div class="product-info">
                                      <?php
                                      echo "<h4>" . htmlspecialchars($row['tenSP']) . "</h4>";
                                      echo "<p class='product-price'>Giá: " . number_format($row['giaSP']) . " VND</p>";
                                      ?>
                                      <button class="add-to-cart">Thêm Vào Giỏ</button>
                                    </div>
                                  </div>
                                  <?php
                              }
                          } else {
                              echo "<h1>Không có sản phẩm.</h1>";
                          }

                          $stmt->close();
                           ?>
                        </div>
                      </div>

          <!-- Quần Section -->
          <div class="brand-products" data-category="quan">
            <h2 class="brand-title">Quần Nam</h2>
            
            <div class="products-grid">
              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/0066CC/FFFFFF?text=Quần+Short+Nam" alt="Quần Short Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Quần Short Adidas Nam</h4>
                  <p class="product-category">Quần Short</p>
                  <p class="product-price">399.000đ</p>
                  <button class="add-to-cart" onclick="addToCart('QF001', 'Quần Short Adidas Nam', 399000)">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/000000/FFFFFF?text=Quần+Jogger+Nam" alt="Quần Jogger Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Quần Jogger Nike Nam</h4>
                  <p class="product-category">Quần Jogger</p>
                  <p class="product-price">699.000đ</p>
                  <button class="add-to-cart" onclick="addToCart('QF002', 'Quần Jogger Nike Nam', 699000)">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/FF6B35/FFFFFF?text=Quần+Khaki+Nam" alt="Quần Khaki Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Quần Khaki Skechers Nam</h4>
                  <p class="product-category">Quần Khaki</p>
                  <p class="product-price">599.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/00BFFF/FFFFFF?text=Quần+Bơi+Nam" alt="Quần Bơi Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Quần Bơi Speedo Nam</h4>
                  <p class="product-category">Quần Bơi</p>
                  <p class="product-price">299.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/8B4513/FFFFFF?text=Quần+Dài+Nam" alt="Quần Dài Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Quần Dài Thể Thao Nam</h4>
                  <p class="product-category">Quần Dài</p>
                  <p class="product-price">799.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/2F4F4F/FFFFFF?text=Quần+Bó+Nam" alt="Quần Bó Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Quần Bó Thể Thao Nam</h4>
                  <p class="product-category">Quần Bó</p>
                  <p class="product-price">499.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Giày Section -->
          <div class="brand-products" data-category="giay">
            <h2 class="brand-title">Giày Nam</h2>
            
            <div class="products-grid">
              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/0066CC/FFFFFF?text=Giày+Sneakers+Nam" alt="Giày Sneakers Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Giày Sneakers Adidas Nam</h4>
                  <p class="product-category">Giày Sneakers</p>
                  <p class="product-price">1.299.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/000000/FFFFFF?text=Giày+Air+Max+Nam" alt="Giày Air Max Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Giày Air Max Nike Nam</h4>
                  <p class="product-category">Giày Air Max</p>
                  <p class="product-price">2.199.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/FF6B35/FFFFFF?text=Giày+Memory+Foam+Nam" alt="Giày Memory Foam Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Giày Memory Foam Skechers Nam</h4>
                  <p class="product-category">Giày Memory Foam</p>
                  <p class="product-price">999.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/8B4513/FFFFFF?text=Giày+Chạy+Bộ+Nam" alt="Giày Chạy Bộ Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Giày Chạy Bộ Adidas Nam</h4>
                  <p class="product-category">Giày Chạy Bộ</p>
                  <p class="product-price">1.599.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/2F4F4F/FFFFFF?text=Giày+Bóng+Rổ+Nam" alt="Giày Bóng Rổ Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Giày Bóng Rổ Nike Nam</h4>
                  <p class="product-category">Giày Bóng Rổ</p>
                  <p class="product-price">2.899.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/0066CC/FFFFFF?text=Giày+Đá+Bóng+Nam" alt="Giày Đá Bóng Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Giày Đá Bóng Adidas Nam</h4>
                  <p class="product-category">Giày Đá Bóng</p>
                  <p class="product-price">1.899.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Phụ Kiện Section -->
          <div class="brand-products" data-category="phukien">
            <h2 class="brand-title">Phụ Kiện Nam</h2>
            
            <div class="products-grid">
              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/32CD32/FFFFFF?text=Balo+Nam" alt="Balo Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Balo Thể Thao Nam</h4>
                  <p class="product-category">Túi & Balo</p>
                  <p class="product-price">299.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/8B4513/FFFFFF?text=Mũ+Lưỡi+Trai+Nam" alt="Mũ Lưỡi Trai Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Mũ Lưỡi Trai Nam</h4>
                  <p class="product-category">Mũ & Nón</p>
                  <p class="product-price">199.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/00BFFF/FFFFFF?text=Kính+Bơi+Nam" alt="Kính Bơi Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Kính Bơi Speedo Nam</h4>
                  <p class="product-category">Kính Bơi</p>
                  <p class="product-price">199.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/FF6B35/FFFFFF?text=Băng+Đô+Nam" alt="Băng Đô Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Băng Đô Thể Thao Nam</h4>
                  <p class="product-category">Băng Đô</p>
                  <p class="product-price">99.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/8B4513/FFFFFF?text=Túi+Đeo+Chéo+Nam" alt="Túi Đeo Chéo Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Túi Đeo Chéo Nam</h4>
                  <p class="product-category">Túi & Balo</p>
                  <p class="product-price">249.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>

              <div class="product-card">
                <div class="product-image">
                  <img src="https://via.placeholder.com/300x300/2F4F4F/FFFFFF?text=Găng+Tay+Nam" alt="Găng Tay Nam">
                  <div class="product-overlay">
                    <button class="quick-view">Xem Nhanh</button>
                  </div>
                </div>
                <div class="product-info">
                  <h4>Găng Tay Thể Thao Nam</h4>
                  <p class="product-category">Găng Tay</p>
                  <p class="product-price">149.000đ</p>
                  <button class="add-to-cart">Thêm Vào Giỏ</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

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
       
       <?php require_once '../php/close_conn.php'; ?>
 </body>
 </html>
