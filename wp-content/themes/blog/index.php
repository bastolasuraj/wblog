<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boilerplate Webpage</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<!-- Header Section -->
<header>
    <div class="logo">MyWebsite</div>
    <nav>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li>
                <a href="#">Services</a>
                <ul class="submenu">
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">App Development</a></li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
                <ul class="submenu">
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="auth-buttons">
        <button>Login</button>
        <button>Register</button>
    </div>
    <button class="hamburger-menu">&#9776;</button>
</header>

<!-- Main Content -->
<div class="container">
    <aside class="sidebar left-sidebar">
        <h3>Categories</h3>
        <ul>
            <li><a href="#">Tech</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Lifestyle</a></li>
        </ul>
        <h3>Categories</h3>
        <ul>
            <li><a href="#">Tech</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Lifestyle</a></li>
        </ul>
        <h3>Categories</h3>
        <ul>
            <li><a href="#">Tech</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Lifestyle</a></li>
        </ul>
    </aside>

    <main>
        <!-- Blog Posts -->
        <div class="blog-post-box">
            <h2>Blog Post 1</h2>
            <p><strong>Author:</strong> John Doe | <strong>Date:</strong> Nov 28, 2024 | <strong>Category:</strong> Tech</p>
            <p>Tags: <span>#technology</span>, <span>#innovation</span></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <a href="#" class="read-more">Read More</a>
        </div>
        <!-- Repeat similar blocks for 5 blog posts -->
        <div class="blog-post-box">
            <h2>Blog Post 1</h2>
            <p><strong>Author:</strong> John Doe | <strong>Date:</strong> Nov 28, 2024 | <strong>Category:</strong> Tech</p>
            <p>Tags: <span>#technology</span>, <span>#innovation</span></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <a href="#" class="read-more">Read More</a>
        </div>
        <div class="blog-post-box"> <!-- Blog Post 3 --> </div>
        <div class="blog-post-box"> <!-- Blog Post 4 --> </div>
        <div class="blog-post-box"> <!-- Blog Post 5 --> </div>
    </main>

    <aside class="sidebar right-sidebar">
        <h3>Popular Posts</h3>
        <ul>
            <li><a href="#">How to build a website</a></li>
            <li><a href="#">Top tech trends 2024</a></li>
            <li><a href="#">Improve your coding skills</a></li>
        </ul>
        <h3>Popular Posts</h3>
        <ul>
            <li><a href="#">How to build a website</a></li>
            <li><a href="#">Top tech trends 2024</a></li>
            <li><a href="#">Improve your coding skills</a></li>
        </ul>
        <h3>Popular Posts</h3>
        <ul>
            <li><a href="#">How to build a website</a></li>
            <li><a href="#">Top tech trends 2024</a></li>
            <li><a href="#">Improve your coding skills</a></li>
        </ul>
    </aside>
</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 MyWebsite. All Rights Reserved.</p>
    <p>Website designed and developed by: [Your Name]</p>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
