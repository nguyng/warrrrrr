(function(){
    const currency = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' });
    const cartItemsEl = document.getElementById('cartItems');
    const cartCountBadges = document.querySelectorAll('#cartCount');
    let discountPercent = 0;

    function getItems(){
      return Array.from(cartItemsEl.querySelectorAll('.cart-item'));
    }

    function parsePriceFromItem(item){
      const attr = Number(item.getAttribute('data-price')) || 0;
      if (attr) return attr;
      const priceText = item.querySelector('.price')?.textContent || '0';
      return Number(priceText.replace(/[^0-9]/g, '')) || 0;
    }

    function getQty(item){
      const span = item.querySelector('.qty');
      return Math.max(1, Number(span?.textContent) || 1);
    }

    function setQty(item, value){
      const span = item.querySelector('.qty');
      const q = Math.max(1, Number(value) || 1);
      if (span) span.textContent = String(q);
    }

    // 🔹 Lưu giỏ hàng vào localStorage
    function saveCartToStorage(){
        const cartData = getItems().map(item => ({
            id: item.dataset.id || null,
            qty: getQty(item),
            price: parsePriceFromItem(item)
        }));
        localStorage.setItem('cart', JSON.stringify(cartData));
    }

    function syncCounts(){
        const total = getItems().length;
        const allCountEl = document.getElementById('allCount');
        if (allCountEl) allCountEl.textContent = String(total);
    }

    function compute(){
        const selectedCountEl = document.getElementById('selectedCount');
        const subtotalText = document.getElementById('subtotalText');
        const shippingText = document.getElementById('shippingText');
        const totalText = document.getElementById('totalText');
        const checkoutBtn = document.getElementById('checkoutBtn');

        let subtotal = 0;
        getItems().forEach(item => {
            subtotal += parsePriceFromItem(item) * getQty(item);
        });

        const discount = Math.floor(subtotal * discountPercent);
        const shipping = 0;
        const total = Math.max(0, subtotal - discount + shipping);

        if (selectedCountEl) selectedCountEl.textContent = String(getItems().length);
        if (subtotalText) subtotalText.textContent = currency.format(subtotal);
        if (shippingText) shippingText.textContent = currency.format(shipping);
        if (totalText) totalText.textContent = currency.format(total);
        if (checkoutBtn) checkoutBtn.textContent = `THANH TOÁN (${getItems().length})`;

        // 🔹 Cập nhật số lượng ở icon giỏ hàng
        const totalItems = getItems().reduce((sum, item) => sum + getQty(item), 0);
        cartCountBadges.forEach(el => el.textContent = String(totalItems));

        // 🔹 Lưu vào localStorage
        saveCartToStorage();
    }

    if (!cartItemsEl) return;

    // Sự kiện tăng giảm số lượng
    cartItemsEl.addEventListener('click', (e) => {
        const btn = e.target;
        if (btn.classList.contains('inc') || btn.classList.contains('dec')){
            const item = btn.closest('.cart-item');
            const current = getQty(item);
            setQty(item, current + (btn.classList.contains('inc') ? 1 : -1));
            compute();
        }
        if (btn.classList.contains('remove-item')){
            btn.closest('.cart-item').remove();
            syncCounts();
            compute();
        }
    });

    cartItemsEl.addEventListener('change', (e) => {
        if (e.target.classList.contains('item-check')){
            compute();
        }
    });

    compute(); // chạy lần đầu
})();
