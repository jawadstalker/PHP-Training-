<?php
include "header.php";

// Simulate posts as an array
$posts = [
    [
        "id" => 1,
        "title" => "The Art Of How To See",
        "author" => "Jawad",
        "date" => "2025-11-12",
        "content" => "This is the first post on my PHP blog."
    ],
    [
        "id" => 2,
        "title" => "Ending Truly Matters-Hamingways View",
        "author" => "Jawad",
        "date" => "2025-11-13",
        "content" => "Here is another post. PHP is fun!"
    ],
    [
        "id" => 3,
        "title"=> "Neil Gaiman Advice for New Writers",
        "author" => "Mohammad Jawad",
        "date" => "Nomber 2025",
        "content"=> "this Article speaks about some adivese from author neil gaiman for fantays new writers"
    ]
];

// Loop through posts
foreach ($posts as $post) {
    echo "<article>";
    echo "<h2><a href='post.php?id={$post['id']}'>{$post['title']}</a></h2>";
    echo "<p>By {$post['author']} | {$post['date']}</p>";
    echo "<p>".substr($post['content'], 0, 100)."...</p>";
    echo "</article><hr>";
}

include "footer.php";
?>
