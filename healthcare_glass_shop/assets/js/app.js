(() => {
  const $ = (s, root=document) => root.querySelector(s);
  const $$ = (s, root=document) => [...root.querySelectorAll(s)];
  const grid = $('#productGrid'), search = $('#searchInput'), overlay = $('#cartOverlay'), cartItems = $('#cartItems');
  let cart = [];
  const money = n => '₹' + Number(n).toFixed(2);
  const toast = msg => { const el=$('#toast'); el.textContent=msg; el.classList.add('show'); clearTimeout(toast.timer); toast.timer=setTimeout(()=>el.classList.remove('show'),2400); };
  function filterProducts() {
    const q=(search?.value||'').trim().toLowerCase();
    $$('.product-card',grid).forEach(card => card.hidden = !(card.dataset.name.includes(q) && (!window.activeCategory || card.dataset.category===window.activeCategory)));
  }
  search?.addEventListener('input',filterProducts);
  $$('.category-card').forEach(btn => btn.addEventListener('click',()=>{
    const was=btn.classList.contains('selected');
    $$('.category-card').forEach(b=>b.classList.remove('selected'));
    window.activeCategory=was?'':btn.dataset.category;
    if(!was) btn.classList.add('selected');
    filterProducts();
    $('#products').scrollIntoView({behavior:'smooth',block:'start'});
  }));
  $('#clearFilter')?.addEventListener('click',()=>{window.activeCategory='';if(search)search.value='';$$('.category-card').forEach(b=>b.classList.remove('selected'));filterProducts();});
  $('#menuToggle')?.addEventListener('click',()=>$('#mainNav').classList.toggle('open'));
  function drawCart(){
    $('#cartCount').textContent=cart.reduce((n,p)=>n+p.qty,0);
    if(!cart.length){cartItems.innerHTML='<p>Your cart is empty.</p>';$('#cartTotal').textContent=money(0);return;}
    cartItems.innerHTML=cart.map(p=>`<div class="cart-row"><div><b>${escapeHtml(p.name)}</b><small>${money(p.price)} each</small><div class="qty-controls"><button data-action="minus" data-id="${p.id}">−</button><span>${p.qty}</span><button data-action="plus" data-id="${p.id}">+</button></div></div><b>${money(p.price*p.qty)}</b></div>`).join('');
    $('#cartTotal').textContent=money(cart.reduce((n,p)=>n+p.price*p.qty,0));
  }
  function escapeHtml(s){return String(s).replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));}
  $$('.add-btn').forEach(btn=>btn.addEventListener('click',()=>{
    const id=String(btn.dataset.id), price=Number(btn.dataset.price), name=btn.dataset.name;
    const found=cart.find(p=>p.id===id); if(found)found.qty++;else cart.push({id,name,price,qty:1}); drawCart();toast(name+' added to cart');
  }));
  cartItems.addEventListener('click',e=>{const b=e.target.closest('button[data-action]');if(!b)return;const p=cart.find(p=>p.id===b.dataset.id);if(!p)return;if(b.dataset.action==='plus')p.qty++;else p.qty--;cart=cart.filter(p=>p.qty>0);drawCart();});
  $('#cartOpen').addEventListener('click',()=>overlay.classList.add('open'));
  $('#cartClose').addEventListener('click',()=>overlay.classList.remove('open'));
  overlay.addEventListener('click',e=>{if(e.target===overlay)overlay.classList.remove('open')});
  $('#checkoutBtn').addEventListener('click',()=>toast(cart.length?'Checkout demo only — connect a secure payment gateway.':'Your cart is empty.'));
  drawCart();
})();