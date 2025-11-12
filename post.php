<?php
include "header.php";

// Simulate posts array (same as index.php)
$posts = [
    [
        "id" => 1,
        "title" => "First Post",
        "author" => "Jawad",
        "date" => "2025-11-12",
        "content" => "This is the first post on my PHP blog."
    ],
    [
        "id" => 2,
        "title" => "Second Post",
        "author" => "Jawad",
        "date" => "2025-11-13",
        "content" => "Here is another post. PHP is fun!"
    ]
];

// Get post ID from URL
$id = $_GET['id'] ?? 1;

// Find post
$found = false;
foreach ($posts as $post) {
    if ($post['id'] == $id) {
        echo "<article>";
        echo "<h2>{$post['title']}</h2>";
        echo "<p>By {$post['author']} | {$post['date']}</p>";
        echo "<p>{$post['content']}</p>";
        echo "</article>";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "<p>Post not found!</p>";
}

include "footer.php";
?>
