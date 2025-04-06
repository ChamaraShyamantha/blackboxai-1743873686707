<?php
session_start();
require __DIR__.'/config.php';

// Verify database connection
try {
    $pdo->query('SELECT 1');
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body class="bg-gray-50 font-sans">
    <header class="header">
        <nav class="nav-container">
            <a href="/" class="text-2xl font-bold">MyPortfolio</a>
            <div class="nav-links">
                <a href="/about.php" class="nav-link">About</a>
                <a href="/portfolio.php" class="nav-link">Work</a>
                <a href="/contact.php" class="nav-link">Contact</a>
                <?php if(isset($_SESSION['loggedin'])): ?>
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>
    <main class="main-content">
