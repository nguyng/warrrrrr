document.addEventListener('DOMContentLoaded', () => {
    const cartCountEl = document.getElementById('cartCount');
    if (cartCountEl) {
        const cartData = JSON.parse(localStorage.getItem('cart')) || [];
        let totalItems = cartData.reduce((sum, item) => sum + item.qty, 0);
        cartCountEl.textContent = totalItems;
    }
});
