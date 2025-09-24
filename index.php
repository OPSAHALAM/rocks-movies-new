<!DOCTYPE html>
<html>
<head>
    <title>Simple Movie Download Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>Rocks Movies</h1>
    </div>

    <div class="container">
        <ul class="movie-list">
            <?php
            // Updated list of movies
            $movies = [
                ['title' => 'My Fault', 'filename' => 'My Fault.mp4', 'poster' => 'My Fault.jpg'],
                ['title' => 'BAAGHI 3', 'filename' => 'BAAGHI3.mp4', 'poster' => 'BAAGHI3.jpg'],
                ['title' => 'Your Fault', 'filename' => 'Your Fault.mp4', 'poster' => 'Your Fault.jpg'],
                ['title' => 'Heropanti 2', 'filename' => 'Heropanti2.mp4', 'poster' => 'Heropanti2.jpg'],
                ['title' => 'College Exams', 'filename' => 'COLLEGE EXAMS.mp4', 'poster' => 'cOLLEGE EXAMS.png'],
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
    </div>

</body>
</html>