// Script để thêm chức năng giỏ hàng cho tất cả các nút trong Hang-Nam.php
document.addEventListener('DOMContentLoaded', function() {
    // Thêm chức năng cho các nút "Thêm Vào Giỏ" còn lại
    const buttons = document.querySelectorAll('.add-to-cart');
    
    buttons.forEach((button, index) => {
        if (!button.hasAttribute('onclick')) {
            // Tạo ID và thông tin sản phẩm dựa trên vị trí
            const productInfo = getProductInfo(index);
            button.setAttribute('onclick', `addToCart('${productInfo.id}', '${productInfo.name}', ${productInfo.price})`);
        }
    });
});

function getProductInfo(index) {
    const products = [
        // Quần
        { id: 'QF003', name: 'Quần Khaki Skechers Nam', price: 599000 },
        { id: 'QF004', name: 'Quần Bơi Speedo Nam', price: 299000 },
        { id: 'QF005', name: 'Quần Dài Thể Thao Nam', price: 799000 },
        { id: 'QF006', name: 'Quần Bó Thể Thao Nam', price: 499000 },
        
        // Giày
        { id: 'GF001', name: 'Giày Sneakers Adidas Nam', price: 1299000 },
        { id: 'GF002', name: 'Giày Air Max Nike Nam', price: 2199000 },
        { id: 'GF003', name: 'Giày Memory Foam Skechers Nam', price: 999000 },
        { id: 'GF004', name: 'Giày Chạy Bộ Adidas Nam', price: 1599000 },
        { id: 'GF005', name: 'Giày Bóng Rổ Nike Nam', price: 2899000 },
        { id: 'GF006', name: 'Giày Đá Bóng Adidas Nam', price: 1899000 },
        
        // Phụ Kiện
        { id: 'PF001', name: 'Balo Thể Thao Nam', price: 299000 },
        { id: 'PF002', name: 'Mũ Lưỡi Trai Nam', price: 199000 },
        { id: 'PF003', name: 'Kính Bơi Speedo Nam', price: 199000 },
        { id: 'PF004', name: 'Băng Đô Thể Thao Nam', price: 99000 },
        { id: 'PF005', name: 'Túi Đeo Chéo Nam', price: 249000 },
        { id: 'PF006', name: 'Găng Tay Thể Thao Nam', price: 149000 }
    ];
    
    return products[index] || { id: 'UNKNOWN', name: 'Sản phẩm', price: 0 };
}
