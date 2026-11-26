<?php
/**
 * ============================================================
 * SmartQR Restaurant Ordering System
 * File: test_connection.php
 * Purpose: Test that PHP can connect to MySQL successfully.
 *          DELETE or restrict access to this file before going live!
 * ============================================================
 */

// Include the database connection file
require_once 'config/database.php';

// If we reach this point, the connection worked!
// Let's run a simple test query.
$results = [];
$error   = null;
$phpInfo = [
    'php_version'  => phpversion(),
    'pdo_drivers'  => PDO::getAvailableDrivers(),
    'server_name'  => $_SERVER['SERVER_NAME'] ?? 'localhost',
    'document_root'=> $_SERVER['DOCUMENT_ROOT'] ?? 'N/A',
];

try {
    // Query the test table we created in database.sql
    $stmt = $pdo->query("SELECT * FROM connection_test ORDER BY created_at DESC LIMIT 5");
    $results = $stmt->fetchAll();
} catch (PDOException $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartQR – Connection Test</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            max-width: 700px;
            width: 100%;
            padding: 40px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            font-size: 2rem;
            color: #1a202c;
            letter-spacing: -0.5px;
        }

        .logo span {
            color: #f97316;
        }

        .logo p {
            color: #718096;
            margin-top: 4px;
            font-size: 0.95rem;
        }

        .status-card {
            border-radius: 12px;
            padding: 20px 24px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .status-card.success {
            background: #f0fff4;
            border: 1.5px solid #68d391;
        }

        .status-card.error {
            background: #fff5f5;
            border: 1.5px solid #fc8181;
        }

        .status-icon {
            font-size: 2.5rem;
            line-height: 1;
        }

        .status-text h2 {
            font-size: 1.1rem;
            margin-bottom: 4px;
        }

        .status-card.success .status-text h2 { color: #276749; }
        .status-card.error   .status-text h2 { color: #9b2c2c; }

        .status-text p {
            font-size: 0.875rem;
            color: #4a5568;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 20px;
        }

        .info-item {
            background: #f7fafc;
            border-radius: 10px;
            padding: 14px 16px;
        }

        .info-item label {
            display: block;
            font-size: 0.75rem;
            font-weight: 600;
            color: #718096;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 4px;
        }

        .info-item span {
            font-size: 0.95rem;
            color: #2d3748;
            font-weight: 500;
        }

        .badge {
            display: inline-block;
            background: #ebf8ff;
            color: #2b6cb0;
            border-radius: 999px;
            padding: 2px 10px;
            font-size: 0.8rem;
            font-weight: 600;
            margin: 2px 2px 0 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
        }

        thead th {
            background: #f97316;
            color: #fff;
            padding: 10px 14px;
            text-align: left;
            font-weight: 600;
        }

        thead th:first-child { border-radius: 8px 0 0 0; }
        thead th:last-child  { border-radius: 0 8px 0 0; }

        tbody tr:nth-child(even) { background: #fff7ed; }

        tbody td {
            padding: 10px 14px;
            color: #4a5568;
            border-bottom: 1px solid #e2e8f0;
        }

        .section-title {
            font-size: 0.85rem;
            font-weight: 700;
            color: #718096;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 10px;
        }

        .next-steps {
            background: #fffbeb;
            border: 1.5px solid #f6e05e;
            border-radius: 12px;
            padding: 20px 24px;
            margin-top: 20px;
        }

        .next-steps h3 {
            color: #744210;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .next-steps ol {
            padding-left: 20px;
            color: #744210;
            font-size: 0.9rem;
            line-height: 1.8;
        }

        @media (max-width: 500px) {
            .info-grid { grid-template-columns: 1fr; }
            .container { padding: 24px 18px; }
        }
    </style>
</head>
<body>
<div class="container">

    <div class="logo">
        <h1>Smart<span>QR</span> 🍽️</h1>
        <p>Restaurant Ordering System – Phase 1 Connection Test</p>
    </div>

    <?php if ($error): ?>
    <div class="status-card error">
        <div class="status-icon">❌</div>
        <div class="status-text">
            <h2>Database Connection Failed</h2>
            <p><?= htmlspecialchars($error) ?></p>
        </div>
    </div>
    <?php else: ?>
    <div class="status-card success">
        <div class="status-icon">✅</div>
        <div class="status-text">
            <h2>Database Connection Successful!</h2>
            <p>PHP connected to MySQL database <strong><?= DB_NAME ?></strong> successfully.</p>
        </div>
    </div>
    <?php endif; ?>

    <!-- PHP & Server Info -->
    <p class="section-title">System Information</p>
    <div class="info-grid">
        <div class="info-item">
            <label>PHP Version</label>
            <span><?= htmlspecialchars($phpInfo['php_version']) ?></span>
        </div>
        <div class="info-item">
            <label>Database</label>
            <span><?= DB_NAME ?> @ <?= DB_HOST ?></span>
        </div>
        <div class="info-item">
            <label>DB User</label>
            <span><?= DB_USER ?></span>
        </div>
        <div class="info-item">
            <label>PDO Drivers</label>
            <span>
                <?php foreach ($phpInfo['pdo_drivers'] as $d): ?>
                    <span class="badge"><?= htmlspecialchars($d) ?></span>
                <?php endforeach; ?>
            </span>
        </div>
    </div>

    <!-- Query Results -->
    <?php if (!$error): ?>
    <p class="section-title" style="margin-top:20px;">Test Table Records</p>
    <?php if ($results): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Message</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['message']) ?></td>
                <td><?= htmlspecialchars($row['created_at']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p style="color:#718096; font-size:0.9rem;">No records found. Make sure you ran the SQL commands in database.sql.</p>
    <?php endif; ?>
    <?php endif; ?>

    <div class="next-steps">
        <h3>✅ Phase 1 Checklist</h3>
        <ol>
            <li>XAMPP Apache &amp; MySQL are running</li>
            <li>Database <strong>smartqr_restaurant</strong> created in phpMyAdmin</li>
            <li><strong>database.sql</strong> imported (connection_test table exists)</li>
            <li><strong>config/database.php</strong> created with correct credentials</li>
            <li>This test page shows <em>Connection Successful</em></li>
            <li>Ready to proceed to <strong>Phase 2</strong>! 🚀</li>
        </ol>
    </div>

</div>
</body>
</html>
