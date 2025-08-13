<?php
require_once '../php/conn.php';

$loai = $_GET['loai'] ?? 'all';
$map = [
    'ao'      => 'AF', 
    'quan'    => 'QF', 
    'giay'    => 'GF', 
    'phukien' => 'PF'  
];

if ($loai == 'all') {
    $sql = "SELECT * FROM sanpham WHERE idSP LIKE '%F%' ORDER BY idSP DESC LIMIT 6"; 
    $stmt = $conn->prepare($sql);
} else {
    $prefix = $map[$loai] ?? '';
    $sql = "SELECT * FROM sanpham WHERE idSP LIKE CONCAT(?, '%') ORDER BY idSP DESC LIMIT 6";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $prefix);
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo '<div class="products-grid">';
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="product-card" data-product-id="<?php echo $row['idSP']; ?>">
          <div class="product-image">
            <img src="https://via.placeholder.com/300x300/2F4F4F/FFFFFF?text=<?php echo urlencode($row['tenSP']); ?>" 
                 alt="<?php echo htmlspecialchars($row['tenSP']); ?>">
            <div class="product-overlay">
              <button class="quick-view" onclick="quickView('<?php echo $row['idSP']; ?>')">Xem Nhanh</button>
            </div>
          </div>
          <div class="product-info">
            <h4><?php echo htmlspecialchars($row['tenSP']); ?></h4>
            <p class="product-price"><?php echo number_format($row['giaSP']); ?> VND</p>
            <button class="add-to-cart" onclick="addToCart('<?php echo $row['idSP']; ?>', '<?php echo htmlspecialchars($row['tenSP']); ?>', <?php echo $row['giaSP']; ?>)">
              Thêm Vào Giỏ
            </button>
          </div>
        </div>
        <?php
    }
    echo '</div>';
} else {
    echo '<div class="no-products"><h3>Không có sản phẩm nào trong danh mục này.</h3></div>';
}

$stmt->close();
$conn->close();
?>

<script>
function addToCart(productId, productName, price) {
    // Lấy giỏ hàng hiện tại từ localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    let existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            id: productId,
            name: productName,
            price: price,
            quantity: 1
        });
    }
    
    // Lưu lại vào localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Cập nhật số lượng hiển thị trên giỏ hàng
    updateCartCount();
    
    // Hiển thị thông báo
    alert('Đã thêm ' + productName + ' vào giỏ hàng!');
}

function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    document.getElementById('cartCount').textContent = totalItems;
}

function quickView(productId) {
    // Có thể mở modal hoặc chuyển đến trang chi tiết sản phẩm
    alert('Xem chi tiết sản phẩm: ' + productId);
}

// Cập nhật số lượng giỏ hàng khi trang load
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
});
</script>
