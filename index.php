<?php
/**
 * Landing Page - Online Vehicle Breakdown Assistant
 */
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/auth.php';

$base = getBasePath() ?: '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Breakdown Assistant | Home</title>
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/css/style.css">
</head>
<body class="landing">
    <header class="main-header">
        <div class="container">
            <a href="<?php echo $base; ?>/index.php" class="logo">Breakdown<span>Assist</span></a>
            <nav>
                <a href="<?php echo $base; ?>/user/login.php">User Login</a>
                <a href="<?php echo $base; ?>/user/register.php">User Register</a>
                <a href="<?php echo $base; ?>/mechanic/login.php">Mechanic Login</a>
                <a href="<?php echo $base; ?>/mechanic/register.php">Mechanic Register</a>
                <a href="<?php echo $base; ?>/admin/login.php">Admin</a>
            </nav>
        </div>
    </header>

    <main class="hero">
        <div class="container">
            <h1>Vehicle Breakdown Assistant</h1>
            <p class="tagline">Get quick roadside assistance when you need it. Register as a user to request help, or as a mechanic to serve requests.</p>
            <div class="cta-grid">
                <a href="<?php echo $base; ?>/user/register.php" class="btn btn-primary">I need help</a>
                <a href="<?php echo $base; ?>/mechanic/register.php" class="btn btn-secondary">I'm a mechanic</a>
            </div>
        </div>
    </main>

    <footer class="main-footer">
        <div class="container">&copy; <?php echo date('Y'); ?> Vehicle Breakdown Assistant</div>
    </footer>
    <script src="<?php echo $base; ?>/assets/js/main.js"></script>
</body>
</html>
