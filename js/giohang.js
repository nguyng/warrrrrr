(function(){
    const currency = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' });
    const cartItemsEl = document.getElementById('cartItems');
    if (!cartItemsEl) return;
  
    const selectAllEl = document.getElementById('selectAll');
    const deleteSelectedBtn = document.getElementById('deleteSelected');
    const allCountEl = document.getElementById('allCount');
    const selectedCountEl = document.getElementById('selectedCount');
    const subtotalText = document.getElementById('subtotalText');
    const shippingText = document.getElementById('shippingText');
    const totalText = document.getElementById('totalText');
    const voucherInput = document.getElementById('voucherInput');
    const applyVoucherBtn = document.getElementById('applyVoucherBtn');
    const checkoutBtn = document.getElementById('checkoutBtn');
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
  
    function checkedItems(){
      return getItems().filter(i => i.querySelector('.item-check')?.checked);
    }
  
    function syncCounts(){
      const total = getItems().length;
      if (allCountEl) allCountEl.textContent = String(total);
      const checks = getItems().map(i => i.querySelector('.item-check'));
      const allChecked = total > 0 && checks.every(c => c && c.checked);
      if (selectAllEl) selectAllEl.checked = allChecked;
    }
  
    function compute(){
      const items = checkedItems();
      let subtotal = 0;
      items.forEach(item => {
        subtotal += parsePriceFromItem(item) * getQty(item);
      });
      const discount = Math.floor(subtotal * discountPercent);
      const shipping = 0; // có thể thay đổi quy tắc phí ship tại đây
      const total = Math.max(0, subtotal - discount + shipping);
      if (selectedCountEl) selectedCountEl.textContent = String(items.length);
      if (subtotalText) subtotalText.textContent = currency.format(subtotal);
      if (shippingText) shippingText.textContent = currency.format(shipping);
      if (totalText) totalText.textContent = currency.format(total);
    if (checkoutBtn) checkoutBtn.textContent = `THANH TOÁN (${items.length})`;
    // Cập nhật badge đếm tổng số item trong giỏ (không phụ thuộc chọn hay không)
    const totalItems = getItems().length;
    cartCountBadges.forEach(el => el.textContent = String(totalItems));
    }
  
    // Events
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
        syncCounts();
        compute();
      }
    });
  
    if (selectAllEl){
      selectAllEl.addEventListener('change', () => {
        getItems().forEach(i => {
          const c = i.querySelector('.item-check');
          if (c) c.checked = selectAllEl.checked;
        });
        compute();
      });
    }
  
    if (deleteSelectedBtn){
      deleteSelectedBtn.addEventListener('click', () => {
        checkedItems().forEach(i => i.remove());
        syncCounts();
        compute();
      });
    }
  
    if (applyVoucherBtn){
      applyVoucherBtn.addEventListener('click', () => {
        const code = voucherInput.value.trim().toUpperCase();
        if (code === 'GIAM10') discountPercent = 0.10;
        else if (code === 'GIAM5') discountPercent = 0.05;
        else if (!code) discountPercent = 0;
        else { discountPercent = 0; alert('Mã giảm giá không hợp lệ'); }
        compute();
      });
    }
  
    // Init
    syncCounts();
    compute();
  })();
  
