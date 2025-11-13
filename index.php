<?php
include "header.php";
?>

<!-- Main container for posts -->
<div class="posts-container">
<?php
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
        "title" => "Ending Truly Matters-Hemingway's View",
        "author" => "Jawad",
        "date" => "2025-11-13",
        "content" => "Here is another post. PHP is fun!"
    ],
    [
        "id" => 3,
        "title"=> "Neil Gaiman Advice for New Writers",
        "author" => "Mohammad Jawad",
        "date" => "November 2025",
        "content"=> "This article speaks about some advice from author Neil Gaiman for fantasy new writers."
    ]
];

// Loop through posts
foreach ($posts as $post) : ?>
    <article class="post-card">
        <h2 class='post-title'><a href='post.php?id=<?= $post['id'] ?>'><?= $post['title'] ?></a></h2>
        <p class='post-meta'>By <?= $post['author'] ?> | <?= $post['date'] ?></p>
        <p class='post-excerpt'><?= substr($post['content'], 0, 100) ?>… <a href='post.php?id=<?= $post['id'] ?>' class="read-more">Read more</a></p>
    </article>
<?php endforeach; ?>
</div>

<?php
include "footer.php";
?>
