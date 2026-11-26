<?php
/**
 * ============================================================
 * YOOK Restaurant Ordering System
 * File: index.php (Root entry point)
 * Purpose: Redirect visitors to the customer menu.
 *          If a table number is passed, forward it along.
 *          Admins go directly to /admin/
 * ============================================================
 */

// If a table parameter is provided, redirect to customer menu
$table = isset($_GET['table']) ? (int)$_GET['table'] : 0;

if ($table > 0) {
    header("Location: customer/menu.php?table=" . $table);
    exit;
}

// Default: show a simple landing page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartQR Restaurant</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background: #fff;
            border-radius: 20px;
            padding: 50px 40px;
            text-align: center;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .emoji { font-size: 4rem; margin-bottom: 16px; }

        h1 {
            font-size: 2.2rem;
            color: #1a202c;
            letter-spacing: -1px;
            margin-bottom: 8px;
        }

        h1 span { color: #f97316; }

        p {
            color: #718096;
            margin-bottom: 32px;
            font-size: 1rem;
            line-height: 1.6;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 12px;
            transition: transform 0.1s, box-shadow 0.1s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        .btn-primary {
            background: #f97316;
            color: #fff;
        }

        .btn-secondary {
            background: #f7fafc;
            color: #2d3748;
            border: 2px solid #e2e8f0;
        }

        .version {
            margin-top: 20px;
            font-size: 0.75rem;
            color: #cbd5e0;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="emoji">🍽️</div>
    <h1>Y<span>OOK</span></h1>
    <p>Welcome! Scan your table's QR code to view the menu and place an order.</p>

    <a href="admin/" class="btn btn-primary">🔐 Admin Dashboard</a>
    <a href="test_connection.php" class="btn btn-secondary">🔧 Test DB Connection</a>

    <p class="version">YOOK v1.0 — Phase 1</p>
</div>
</body>
</html>
