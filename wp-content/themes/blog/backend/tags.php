<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag Management</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<header>
    <h1>Tag Management</h1>
    <nav>
        <a href="blogs.php">Manage Blogs</a>
        <a href="categories.php">Manage Categories</a>
    </nav>
</header>

<main>
    <section>
        <h2>Add New Tag</h2>
        <form action="#" method="post">
            <label for="tag-title">Title:</label><br>
            <input type="text" id="tag-title" name="tag-title" required><br><br>

            <label for="tag-description">Description:</label><br>
            <textarea id="tag-description" name="tag-description" rows="4" required></textarea><br><br>

            <button type="submit">Save Tag</button>
        </form>
    </section>

    <section>
        <h2>Existing Tags</h2>
        <ul>
            <li>
                <strong>Title:</strong> #technology<br>
                <strong>Description:</strong> All posts about technology.<br>
            </li>
            <!-- Add more tags here -->
        </ul>
    </section>
</main>
</body>
</html>
