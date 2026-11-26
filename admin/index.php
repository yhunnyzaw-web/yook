<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOOK Admin</title>
    <style>
        :root{--navy:#17201a;--green:#23764e;--line:#e8ece9;--muted:#7b847f;--orange:#ef9a45}
        *{box-sizing:border-box} body{margin:0;font-family:"Segoe UI",Arial,sans-serif;background:#f4f6f4;color:var(--navy)}
        .app{display:grid;grid-template-columns:244px minmax(0,1fr);min-height:100vh}
        aside{background:#17251d;color:#fff;padding:28px 18px;display:flex;flex-direction:column}
        .brand{display:flex;align-items:center;gap:10px;font-weight:800;font-size:18px;padding:0 10px 28px}
        .brand i{width:38px;height:38px;border-radius:11px;background:#fff;color:#23764e;display:grid;place-items:center;font-style:normal}
        nav{display:grid;gap:6px} nav a{color:#b9c5be;text-decoration:none;padding:12px 14px;border-radius:9px;font-size:14px}
        nav a.active,nav a:hover{background:#294235;color:#fff} nav a span{display:inline-block;width:27px}
        .profile{margin-top:auto;border-top:1px solid rgba(255,255,255,.1);padding:18px 10px 0;display:flex;gap:10px;align-items:center;font-size:13px}
        .avatar{width:38px;height:38px;border-radius:50%;background:#efb067;display:grid;place-items:center;color:#fff;font-weight:800}
        main{padding:28px 36px 40px;overflow:hidden}
        header{display:flex;justify-content:space-between;align-items:center;margin-bottom:26px}
        h1{font-size:27px;margin:0 0 4px}.sub{color:var(--muted);font-size:13px}
        .actions{display:flex;gap:10px}.icon-btn{border:1px solid var(--line);background:#fff;border-radius:10px;width:42px;height:42px;cursor:pointer}
        .metrics{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:16px}
        .metric{background:#fff;border:1px solid var(--line);border-radius:14px;padding:19px}
        .metric-label{color:var(--muted);font-size:12px}.metric-row{display:flex;justify-content:space-between;align-items:flex-end;margin-top:10px}
        .metric strong{font-size:26px}.trend{color:#278158;font-size:11px;background:#edf7f1;padding:5px 7px;border-radius:999px}
        .grid{display:grid;grid-template-columns:minmax(0,1.5fr) minmax(260px,.65fr);gap:16px}
        .panel{background:#fff;border:1px solid var(--line);border-radius:14px}
        .panel-head{height:62px;padding:0 20px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--line)}
        .panel-head h2{font-size:15px;margin:0}.panel-head a{font-size:12px;color:var(--green);text-decoration:none;font-weight:700}
        table{width:100%;border-collapse:collapse}th{text-align:left;color:var(--muted);font-size:11px;font-weight:600;padding:12px 20px;border-bottom:1px solid var(--line)}
        td{padding:14px 20px;border-bottom:1px solid #f0f2f0;font-size:13px}tbody tr:last-child td{border-bottom:0}
        .status{font-size:11px;font-weight:700;padding:6px 9px;border-radius:999px}.preparing{background:#fff3df;color:#aa6a20}.ready{background:#eaf6ef;color:#287750}.served{background:#edf0ee;color:#657069}
        .popular{padding:8px 18px 18px}.dish{display:flex;align-items:center;gap:11px;padding:10px 0;border-bottom:1px solid #f0f2f0}
        .dish:last-child{border:0}.dish-art{width:46px;height:46px;border-radius:10px;background:linear-gradient(135deg,#f1ad62,#b84f3b);display:grid;place-items:center;font-size:22px}
        .dish-info{flex:1}.dish-info strong{display:block;font-size:13px}.dish-info small{color:var(--muted)}
        .price{font-size:13px;font-weight:800}.mobile-menu{display:none}
        @media(max-width:1050px){.metrics{grid-template-columns:repeat(2,1fr)}.grid{grid-template-columns:1fr}}
        @media(max-width:720px){.app{grid-template-columns:1fr}aside{display:none}main{padding:20px}.mobile-menu{display:block}.metrics{grid-template-columns:1fr 1fr}.grid{display:block}.panel{margin-bottom:14px}.actions .icon-btn:first-child{display:none}th:nth-child(3),td:nth-child(3){display:none}}
    </style>
</head>
<body>
<div class="app">
    <aside>
        <div class="brand"><i>S</i> SmartQR</div>
        <nav>
            <a class="active" href="#"><span>▦</span> Overview</a>
            <a href="#"><span>⌁</span> Orders <b style="float:right;color:#efb067">12</b></a>
            <a href="#"><span>♨</span> Menu</a>
            <a href="#"><span>▦</span> Tables</a>
            <a href="#"><span>⌕</span> Reports</a>
        </nav>
        <div class="profile"><div class="avatar">AK</div><div><strong>Alex Kim</strong><br><span style="color:#93a097">Administrator</span></div></div>
    </aside>
    <main>
        <header><div><h1>Good morning, Alex</h1><div class="sub">Tuesday, November 25 · Restaurant overview</div></div><div class="actions"><button class="icon-menu icon-btn">☰</button><button class="icon-btn">⚙</button><button class="icon-btn">♟</button></div></header>
        <section class="metrics">
            <article class="metric"><div class="metric-label">Total revenue</div><div class="metric-row"><strong>$2,840</strong><span class="trend">↑ 12.5%</span></div></article>
            <article class="metric"><div class="metric-label">Orders today</div><div class="metric-row"><strong>86</strong><span class="trend">↑ 8.2%</span></div></article>
            <article class="metric"><div class="metric-label">Average order</div><div class="metric-row"><strong>$33.02</strong><span class="trend">↑ 4.1%</span></div></article>
            <article class="metric"><div class="metric-label">Active tables</div><div class="metric-row"><strong>14</strong><span class="trend">of 20</span></div></article>
        </section>
        <section class="grid">
            <article class="panel">
                <div class="panel-head"><h2>Live orders</h2><a href="#">View all orders →</a></div>
                <table>
                    <thead><tr><th>Order</th><th>Table</th><th>Items</th><th>Total</th><th>Status</th></tr></thead>
                    <tbody>
                        <tr><td>#1048</td><td>Table 12</td><td>3 items</td><td>$48.50</td><td><span class="status preparing">Preparing</span></td></tr>
                        <tr><td>#1047</td><td>Table 07</td><td>2 items</td><td>$32.00</td><td><span class="status ready">Ready</span></td></tr>
                        <tr><td>#1046</td><td>Table 03</td><td>5 items</td><td>$76.20</td><td><span class="status served">Served</span></td></tr>
                        <tr><td>#1045</td><td>Table 15</td><td>4 items</td><td>$61.80</td><td><span class="status preparing">Preparing</span></td></tr>
                    </tbody>
                </table>
            </article>
            <article class="panel">
                <div class="panel-head"><h2>Popular dishes</h2><a href="#">Today</a></div>
                <div class="popular">
                    <div class="dish"><div class="dish-art">🥩</div><div class="dish-info"><strong>Prime rib steak</strong><small>24 orders</small></div><div class="price">$28</div></div>
                    <div class="dish"><div class="dish-art" style="background:linear-gradient(135deg,#8eb56a,#e0b04e)">🥗</div><div class="dish-info"><strong>Garden salad</strong><small>19 orders</small></div><div class="price">$16</div></div>
                    <div class="dish"><div class="dish-art" style="background:linear-gradient(135deg,#f59c63,#b84f3b)">🍝</div><div class="dish-info"><strong>Truffle pasta</strong><small>17 orders</small></div><div class="price">$22</div></div>
                </div>
            </article>
        </section>
    </main>
</div>
</body>
</html>
