<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Management</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<header>
    <h1>Category Management</h1>
    <nav>
        <a href="blogs.php">Manage Blogs</a>
        <a href="tags.php">Manage Tags</a>
    </nav>
</header>

<main>
    <section>
        <h2>Add New Category</h2>
        <form action="#" method="post">
            <label for="cat-title">Title:</label><br>
            <input type="text" id="cat-title" name="cat-title" required><br><br>

            <label for="cat-description">Description:</label><br>
            <textarea id="cat-description" name="cat-description" rows="4" required></textarea><br><br>

            <button type="submit">Save Category</button>
        </form>
    </section>

    <section>
        <h2>Existing Categories</h2>
        <ul>
            <li>
                <strong>Title:</strong> Tech<br>
                <strong>Description:</strong> Technology-related articles.<br>
            </li>
            <!-- Add more categories here -->
        </ul>
    </section>
</main>
</body>
</html>
