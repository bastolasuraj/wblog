<?php
require 'db.php'; // Import MongoDB connection

// Handle form submission for adding blogs
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];
    $content = $_POST['content'];
    $categories = $_POST['categories'] ?? [];
    $tags = $_POST['tags'] ?? [];

    // Insert blog into the database
    $db->blogs->insertOne([
        'title' => $title,
        'excerpt' => $excerpt,
        'content' => $content,
        'categories' => $categories,
        'tags' => $tags,
        'created_at' => new MongoDB\BSON\UTCDateTime()
    ]);
}

// Fetch all blogs
$blogs = $db->blogs->find()->toArray();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Management</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
</head>
<body>
<header>
    <h1>Blog Management</h1>
    <nav>
        <a href="categories.php">Manage Categories</a>
        <a href="tags.php">Manage Tags</a>
    </nav>
</header>
<main>
    <section>
        <h2>Add New Blog Post</h2>
        <form action="#" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="excerpt">Excerpt:</label>
            <textarea id="excerpt" name="excerpt" rows="3"></textarea>

            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="8"></textarea>

            <label for="categories">Categories:</label>
            <select id="categories" name="categories[]" multiple>
                <?php
                // Fetch categories dynamically
                $categories = $db->categories->find();
                foreach ($categories as $category) {
                    echo "<option value=\"{$category['_id']}\">{$category['title']}</option>";
                }
                ?>
            </select>

            <label for="tags">Tags:</label>
            <select id="tags" name="tags[]" multiple>
                <?php
                // Fetch tags dynamically
                $tags = $db->tags->find();
                foreach ($tags as $tag) {
                    echo "<option value=\"{$tag['_id']}\">{$tag['title']}</option>";
                }
                ?>
            </select>

            <button type="submit">Save Blog Post</button>
        </form>
    </section>

    <section>
        <h2>Existing Blog Posts</h2>
        <ul>
            <?php foreach ($blogs as $blog): ?>
                <li>
                    <strong>Title:</strong> <?= htmlspecialchars($blog['title']) ?><br>
                    <strong>Excerpt:</strong> <?= htmlspecialchars($blog['excerpt']) ?><br>
                    <strong>Categories:</strong> <?= implode(', ', $blog['categories']) ?><br>
                    <strong>Tags:</strong> <?= implode(', ', $blog['tags']) ?><br>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<script>
    ClassicEditor.create(document.querySelector('#excerpt')).catch(error => console.error(error));
    ClassicEditor.create(document.querySelector('#content')).catch(error => console.error(error));
</script>
</body>
</html>
