<?php
require 'includes/header.php';

// Get home page content from database
$stmt = $pdo->prepare("SELECT content FROM pages WHERE page_name = 'home'");
$stmt->execute();
$content = json_decode($stmt->fetch()['content'], true);
?>

<main class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8 animate-fadeIn"><?= htmlspecialchars($content['heading'] ?? 'Welcome') ?></h1>
    <p class="text-xl text-gray-600 mb-12 max-w-2xl animate-fadeIn delay-100">
        <?= htmlspecialchars($content['description'] ?? 'This is my portfolio website') ?>
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <a href="/about.php" class="card-hover bg-white p-6 rounded-lg shadow">
            <h2 class="text-2xl font-semibold mb-4">About Me</h2>
            <p>Learn more about my background and skills</p>
        </a>
        
        <a href="/portfolio.php" class="card-hover bg-white p-6 rounded-lg shadow">
            <h2 class="text-2xl font-semibold mb-4">My Work</h2>
            <p>View my portfolio projects</p>
        </a>
    </div>
</main>

<?php require 'includes/footer.php'; ?>