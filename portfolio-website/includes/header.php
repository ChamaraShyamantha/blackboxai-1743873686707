<?php
session_start();
require 'config.php';
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
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-primary">MyPortfolio</a>
            <div class="space-x-6">
                <a href="/about.php" class="hover:text-primary transition">About</a>
                <a href="/portfolio.php" class="hover:text-primary transition">Portfolio</a>
                <a href="/contact.php" class="hover:text-primary transition">Contact</a>
                <?php if(isset($_SESSION['loggedin'])): ?>
                    <a href="/dashboard" class="hover:text-primary transition">Dashboard</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>
    <main>