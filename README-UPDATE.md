# HƯỚNG DẪN CẬP NHẬT TẤT CẢ CÁC TRANG HTML

## Tổng quan
Tài liệu này hướng dẫn cách cập nhật tất cả các trang HTML để có cùng cấu trúc navigation đơn giản và tính năng như trang `shop.html`.

## Các tính năng đã được cập nhật

### 1. Navigation đơn giản
- Đã loại bỏ tất cả mega menu phức tạp
- Navigation giờ chỉ có các link đơn giản để chuyển trang
- Giao diện gọn gàng và dễ sử dụng hơn

### 2. Các mục navigation có thể click được
- **Hàng Mới** → chuyển đến `Hang-Moi.html`
- **Nam** → chuyển đến `Hang-Nam.html`
- **Nữ** → chuyển đến `Hang-Nu.html`
- **Phụ Kiện** → chuyển đến `Phu-Kien.html`
- **Thương Hiệu** → chuyển đến `Thuong-Hieu.html`
- **Ưu Đãi** → chuyển đến `giohang.html`

### 3. CSS chung
- File `css/common-header.css` chứa tất cả CSS cho header và mega menu
- Các hiệu ứng hover và transition đã được tối ưu

## Cách cập nhật từng trang

### Bước 1: Thêm CSS chung
Thêm dòng sau vào phần `<head>` của mỗi trang:
```html
<link rel="stylesheet" href="../css/common-header.css">
```

### Bước 2: Thay thế phần nav
Thay thế toàn bộ phần `<nav class="main-menu">` trong mỗi trang bằng code sau:

```html
<nav class="main-menu">
  <ul>
      <h1 class="company-name"><a href="shop.html" style="color: white; text-decoration: none;">Nguyensports</a></h1>
    <li><a href="Hang-Moi.html" style="color: white; text-decoration: none;">Hàng Mới</a></li>
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
  <img src="https://cdn-icons-png/flaticon.com/512/1170/1170678.png" alt="bag">
  <span id="cartCount" class="cart-count">0</span>
</a>
<a href="user-address.html"><img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="location"></a>
<a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="truck"></a>
</div>
  </ul>
</nav>
```

## Danh sách các trang cần cập nhật

1. ✅ `shop.html` - Đã cập nhật
2. ⏳ `Hang-Moi.html` - Cần cập nhật
3. ⏳ `Hang-Nam.html` - Cần cập nhật
4. ⏳ `Hang-Nu.html` - Cần cập nhật
5. ⏳ `Phu-Kien.html` - Cần cập nhật
6. ⏳ `Thuong-Hieu.html` - Cần cập nhật
7. ⏳ `giohang.html` - Cần cập nhật
8. ⏳ `user.html` - Cần cập nhật
9. ⏳ `order-detail.html` - Cần cập nhật
10. ⏳ `user-address.html` - Cần cập nhật
11. ⏳ `login.html` - Cần cập nhật
12. ⏳ `donhangcuauser.html` - Cần cập nhật
13. ⏳ `dangki.html` - Cần cập nhật

## Lưu ý quan trọng

- Đảm bảo tất cả các trang đều có link đến `css/common-header.css`
- Kiểm tra đường dẫn tương đối trong các link
- Giữ nguyên phần nội dung chính của mỗi trang
- Chỉ thay đổi phần header và mega menu

## Kết quả mong đợi

Sau khi cập nhật, tất cả các trang sẽ có:
- Header giống hệt nhau
- Navigation đơn giản và gọn gàng
- Các mục navigation có thể click được để chuyển trang
- Giao diện nhất quán và dễ sử dụng trên toàn bộ website
