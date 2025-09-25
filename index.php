<!DOCTYPE html>
<html>
<head>
    <title>Rocks Movies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>🎬 Rocks Movies</h1>
    </div>

    <nav class="main-nav">
        <a href="index.php">Home</a>
        <a href="#categories">Categories</a>
        <a href="#about-us">About Us</a>
    </nav>

    <div class="container">
        
        <section id="categories" class="categories-section">
            <h2>Movie Categories</h2>
            <ul class="category-list">
                <li><a href="action.php">Action</a></li>
                <li><a href="romantic.php">Romantic</a></li>
                <li><a href="horror.php">Horror</a></li>
                <li><a href="comedy.php">Comedy</a></li>
                <li><a href="#">Adventure</a></li>
            </ul>
        </section>

        <ul class="movie-list">
            <?php
            // The complete list of movies
            $movies = [
                ['title' => 'Heropanti 2', 'filename' => 'Heropanti2.mp4', 'poster' => 'Heropanti2.jpg'],
                ['title' => 'My Fault', 'filename' => 'My Fault.mp4', 'poster' => 'My Fault.jpg'],
                ['title' => 'Your Fault', 'filename' => 'Your Fault.mp4', 'poster' => 'Your Fault.jpg'],
                ['title' => 'Baaghi 3', 'filename' => 'BAAGHI3.mp4', 'poster' => 'BAAGHI3.jpg'],
                ['title' => 'College Exams', 'filename' => 'COLLEGE EXAMS.mp4', 'poster' => 'COLLEGE EXAMS.png'],
                ['title' => 'The Conjuring', 'filename' => 'The Conjuring.mp4', 'poster' => 'The Conjuring.jpg'],
                ['title' => 'The Conjuring 2', 'filename' => 'The Conjuring 2.mp4', 'poster' => 'The Conjuring 2.jpg'],
            ];

            // Loop through the movies and display them
            foreach ($movies as $movie) {
                $movieTitle = htmlspecialchars($movie['title']);
                $movieFile = urlencode($movie['filename']);
                $moviePoster = htmlspecialchars($movie['poster']);

                echo "<li>
                        <div class='movie-card'>
                            <img src='posters/$moviePoster' alt='$movieTitle Poster' class='movie-poster'>
                            <div class='movie-info'>
                                <h3 class='movie-title'>$movieTitle</h3>
                                <a class='download-btn' href='download.php?file=$movieFile'>Download</a>
                            </div>
                        </div>
                      </li>";
            }
            ?>
        </ul>
        
        <section id="about-us" class="about-us-section">
            <h2>About Us</h2>
            <p><b>Welcome to Rocks Movies, your ultimate destination for high-quality movie downloads. We believe that finding your favorite films should be a simple and enjoyable experience, which is why we offer a vast library of movies completely free of charge. Say goodbye to annoying pop-up ads and malicious viruses; our platform is designed to provide you with a safe and seamless way to build your movie collection. Dive into the world of cinema and start downloading today, all without any hidden costs or interruptions.</b></p>
            <p>For any inquiries or assistance, please contact us at:</p>
            <p><b>Name:</b> <span class="name-separator">SAH ALAM SK</span> Malek Mohammad Zaid<br><b>Email:</b> opsahalam88@gmail.com<br><b>Contact Number:</b> +918388033482</p>
        </section>
        
    </div>

</body>
</html>