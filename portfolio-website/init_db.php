<?php
require 'includes/config.php';

$sql = "
CREATE TABLE IF NOT EXISTS pages (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    page_name TEXT NOT NULL UNIQUE,
    content TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS designs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    theme_name TEXT NOT NULL UNIQUE,
    value TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS uploads (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    image_name TEXT NOT NULL,
    path TEXT NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert default pages (using SQLite's INSERT OR IGNORE)
INSERT OR IGNORE INTO pages (page_name, content) VALUES
('home', '{\"heading\":\"Welcome to My Portfolio\",\"description\":\"This is my professional portfolio website.\"}'),
('about', '{\"heading\":\"About Me\",\"description\":\"Here you can learn more about me.\"}'),
('portfolio', '{\"heading\":\"My Work\",\"description\":\"Check out my portfolio projects.\"}'),
('contact', '{\"heading\":\"Get In Touch\",\"description\":\"Feel free to contact me.\"}');

-- Insert default design values (using SQLite's INSERT OR IGNORE)
INSERT OR IGNORE INTO designs (theme_name, value) VALUES
('primary_color', '#3b82f6'),
('secondary_color', '#1e40af'),
('font_family', '\"Inter\", sans-serif'),
('max_width', '1200px');
";

try {
    $pdo->exec($sql);
    echo "Database tables created and seeded successfully!";
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>