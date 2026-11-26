<?php
$table = isset($_GET['table']) ? (int) $_GET['table'] : 12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu · YOOK</title>
    <style>
        :root{--green:#1f7450;--ink:#19221d;--cream:#f7f5ef;--orange:#f2a35b}
        *{box-sizing:border-box}body{margin:0;font-family:"Segoe UI",Arial,sans-serif;background:var(--cream);color:var(--ink)}
        header{height:78px;background:#fff;display:flex;align-items:center;padding:0 max(24px,calc((100% - 1180px)/2));border-bottom:1px solid #e9ebe7;position:sticky;top:0;z-index:10}
        .brand{display:flex;align-items:center;gap:10px;font-weight:800;font-size:18px}.brand i{width:38px;height:38px;border-radius:50%;background:var(--green);color:#fff;display:grid;place-items:center;font-style:normal}
        .header-right{margin-left:auto;display:flex;align-items:center;gap:12px}.table-pill{background:#edf5f0;color:var(--green);padding:9px 12px;border-radius:999px;font-size:13px;font-weight:700}
        .cart-btn{border:0;background:var(--ink);color:#fff;width:44px;height:44px;border-radius:12px;cursor:pointer;position:relative}.cart-btn span{position:absolute;right:-5px;top:-5px;background:var(--orange);color:#fff;border:2px solid #fff;border-radius:50%;width:20px;height:20px;font-size:10px;display:grid;place-items:center}
        main{max-width:1180px;margin:auto;padding:34px 24px 90px}
        .hero{border-radius:20px;min-height:230px;background:linear-gradient(90deg,rgba(25,34,29,.88),rgba(25,34,29,.2)),linear-gradient(135deg,#6e915a,#c2a778);padding:42px;color:#fff;margin-bottom:28px;display:flex;align-items:flex-end}
        .hero small{color:#dfe9e1;font-weight:700}.hero h1{font-family:Georgia,"Times New Roman",serif;font-size:44px;margin:7px 0 4px}.hero p{margin:0;color:#edf2ee}
        .tabs{display:flex;gap:8px;overflow-x:auto;margin-bottom:22px}.tab{border:1px solid #dde3de;background:#fff;border-radius:999px;padding:10px 16px;font-size:13px;white-space:nowrap;cursor:pointer}.tab.active{background:var(--green);border-color:var(--green);color:#fff}
        .menu-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.card{background:#fff;border:1px solid #e7eae6;border-radius:16px;overflow:hidden;transition:.2s}.card:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(32,54,42,.08)}
        .food-art{height:155px;display:grid;place-items:center;font-size:68px;background:linear-gradient(135deg,#f1bd74,#e9dfbd)}.card:nth-child(2n) .food-art{background:linear-gradient(135deg,#adc48a,#e5e8c9)}.card:nth-child(3n) .food-art{background:linear-gradient(135deg,#e8a06e,#edcfad)}
        .card-body{padding:16px}.card-title{display:flex;justify-content:space-between;gap:10px}.card-title h2{font-size:16px;margin:0}.price{color:var(--green);font-weight:800}.card p{height:38px;color:#7b837d;font-size:12px;line-height:1.55;margin:8px 0 14px}
        .card-foot{display:flex;align-items:center}.tag{font-size:10px;color:#9a6a37;background:#fff4df;border-radius:999px;padding:6px 8px}.add{margin-left:auto;width:34px;height:34px;border:0;border-radius:50%;background:var(--green);color:#fff;font-size:20px;cursor:pointer}
        .cart-drawer{position:fixed;right:20px;bottom:20px;width:min(380px,calc(100% - 40px));background:#fff;border:1px solid #e3e7e2;border-radius:18px;padding:18px;box-shadow:0 18px 50px rgba(25,34,29,.18);transform:translateY(140%);transition:.25s;z-index:20}.cart-drawer.open{transform:translateY(0)}
        .cart-head{display:flex;justify-content:space-between;align-items:center}.cart-head h2{font-size:17px;margin:0}.close{border:0;background:#f1f3f1;width:32px;height:32px;border-radius:50%;cursor:pointer}
        .cart-row{display:flex;justify-content:space-between;border-bottom:1px solid #edf0ed;padding:14px 0;font-size:13px}.checkout{width:100%;border:0;border-radius:11px;background:var(--green);color:#fff;padding:14px;font-weight:800;margin-top:14px;cursor:pointer}
        @media(max-width:800px){main{padding:20px 16px}.hero{min-height:200px;padding:28px}.hero h1{font-size:36px}.menu-grid{grid-template-columns:repeat(2,1fr)}}
        @media(max-width:520px){header{height:68px;padding:0 16px}.brand{font-size:16px}.brand i{width:34px;height:34px}.hero{border-radius:16px}.menu-grid{grid-template-columns:1fr}.food-art{height:180px}.table-pill{display:none}}
    </style>
</head>
<body>
<header>
    <div class="brand"><i>Y</i> YOOK</div>
    <div class="header-right"><span class="table-pill">Table <?= $table ?></span><button class="cart-btn" id="cartButton" aria-label="Open cart">🛒<span id="cartCount">0</span></button></div>
</header>
<main>
    <section class="hero"><div><small>WELCOME TO THE TABLE</small><h1>Dine, at your pace.</h1><p>Fresh plates, thoughtful flavors.</p></div></section>
    <div class="tabs"><button class="tab active">All dishes</button><button class="tab">Starters</button><button class="tab">Mains</button><button class="tab">Drinks</button><button class="tab">Desserts</button></div>
    <section class="menu-grid">
        <article class="card"><div class="food-art">🥩</div><div class="card-body"><div class="card-title"><h2>Prime rib steak</h2><span class="price">$28</span></div><p>Grilled rib eye, herb butter, roasted vegetables.</p><div class="card-foot"><span class="tag">Chef's choice</span><button class="add" data-name="Prime rib steak" data-price="28">+</button></div></div></article>
        <article class="card"><div class="food-art">🥗</div><div class="card-body"><div class="card-title"><h2>Garden harvest</h2><span class="price">$16</span></div><p>Seasonal greens, avocado, citrus dressing.</p><div class="card-foot"><span class="tag">Vegetarian</span><button class="add" data-name="Garden harvest" data-price="16">+</button></div></div></article>
        <article class="card"><div class="food-art">🍝</div><div class="card-body"><div class="card-title"><h2>Truffle pasta</h2><span class="price">$22</span></div><p>Silky tagliatelle, mushroom, parmesan cream.</p><div class="card-foot"><span class="tag">Popular</span><button class="add" data-name="Truffle pasta" data-price="22">+</button></div></div></article>
        <article class="card"><div class="food-art">🍤</div><div class="card-body"><div class="card-title"><h2>Crispy prawns</h2><span class="price">$18</span></div><p>Golden prawns, chili mayo, fresh lime.</p><div class="card-foot"><span class="tag">Starter</span><button class="add" data-name="Crispy prawns" data-price="18">+</button></div></div></article>
        <article class="card"><div class="food-art">🍕</div><div class="card-body"><div class="card-title"><h2>Wood-fired pizza</h2><span class="price">$20</span></div><p>Burrata, tomato, basil, olive oil.</p><div class="card-foot"><span class="tag">Sharing</span><button class="add" data-name="Wood-fired pizza" data-price="20">+</button></div></div></article>
        <article class="card"><div class="food-art">🍰</div><div class="card-body"><div class="card-title"><h2>Cloudberry cake</h2><span class="price">$12</span></div><p>Vanilla sponge, berry compote, cream.</p><div class="card-foot"><span class="tag">Dessert</span><button class="add" data-name="Cloudberry cake" data-price="12">+</button></div></div></article>
    </section>
</main>
<aside class="cart-drawer" id="cartDrawer">
    <div class="cart-head"><h2>Your order</h2><button class="close" id="closeCart">×</button></div>
    <div id="cartItems"><div class="cart-row"><span>No items yet</span><span>$0</span></div></div>
    <button class="checkout" id="checkout">Continue · $0</button>
</aside>
<script>
const cart=[];const drawer=document.getElementById('cartDrawer');
function renderCart(){
  document.getElementById('cartCount').textContent=cart.length;
  const total=cart.reduce((sum,item)=>sum+item.price,0);
  document.getElementById('cartItems').innerHTML=cart.length?cart.map(item=>`<div class="cart-row"><span>${item.name}</span><span>$${item.price}</span></div>`).join(''):'<div class="cart-row"><span>No items yet</span><span>$0</span></div>';
  document.getElementById('checkout').textContent=`Continue · $${total}`;
}
document.querySelectorAll('.add').forEach(button=>button.addEventListener('click',()=>{cart.push({name:button.dataset.name,price:Number(button.dataset.price)});renderCart();drawer.classList.add('open')}));
document.querySelectorAll('.tab').forEach(tab=>tab.addEventListener('click',()=>{document.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));tab.classList.add('active')}));
document.getElementById('cartButton').addEventListener('click',()=>drawer.classList.toggle('open'));
document.getElementById('closeCart').addEventListener('click',()=>drawer.classList.remove('open'));
document.getElementById('checkout').addEventListener('click',()=>{if(cart.length)alert('Order submitted successfully!')});
</script>
</body>
</html>
