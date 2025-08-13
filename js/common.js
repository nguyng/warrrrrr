// File JavaScript chung cho tất cả các trang
// Xử lý cart count và các tính năng chung

// Khởi tạo cart count từ localStorage
let cartCount = localStorage.getItem('cartCount') || 0;

// Cập nhật hiển thị cart count
function updateCartCount() {
    const cartCountElement = document.getElementById('cartCount');
    if (cartCountElement) {
        cartCountElement.textContent = cartCount;
    }
}

// Tăng cart count
function incrementCartCount() {
    cartCount++;
    localStorage.setItem('cartCount', cartCount);
    updateCartCount();
}

// Giảm cart count
function decrementCartCount() {
    if (cartCount > 0) {
        cartCount--;
        localStorage.setItem('cartCount', cartCount);
        updateCartCount();
    }
}

// Reset cart count
function resetCartCount() {
    cartCount = 0;
    localStorage.setItem('cartCount', cartCount);
    updateCartCount();
}

// Xử lý mega menu hover
document.addEventListener('DOMContentLoaded', function() {
    // Cập nhật cart count khi trang load
    updateCartCount();
    

    
    // Xử lý search functionality
    const searchInput = document.querySelector('.search input');
    const searchButton = document.querySelector('.search button');
    
    if (searchButton && searchInput) {
        searchButton.addEventListener('click', function() {
            const query = searchInput.value.trim();
            if (query) {
                // Thực hiện tìm kiếm
                console.log('Tìm kiếm:', query);
                // Có thể thêm logic tìm kiếm ở đây
            }
        });
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchButton.click();
            }
        });
    }
    
    // Xử lý responsive menu (cho mobile)
    const menuToggle = document.querySelector('.menu-toggle');
    const mainMenu = document.querySelector('.main-menu ul');
    
    if (menuToggle && mainMenu) {
        menuToggle.addEventListener('click', function() {
            mainMenu.classList.toggle('active');
        });
    }
});

// Export functions để sử dụng ở các file khác
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        cartCount,
        updateCartCount,
        incrementCartCount,
        decrementCartCount,
        resetCartCount
    };
}
