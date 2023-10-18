<!DOCTYPE html>
<html>
<head>
    <title>Movie Tracker</title>
</head>
<body>
    <?php
    if (isset($_POST['name']) && isset($_POST['isan']) && isset($_POST['year']) && isset($_POST['rating'])) {
        $name = $_POST['name'];
        $isan = $_POST['isan'];
        $year = $_POST['year'];
        $rating = $_POST['rating'];

        // Retrieve existing movie data
        $movieCount = isset($_POST['movie_count']) ? (int)$_POST['movie_count'] : 0;
        $movies = [];

        // Loop through all possible movie indexes
        for ($i = 0; $i < $movieCount; $i++) {
            if (isset($_POST["movie_data_$i"])) {
                $movieData = explode('|', $_POST["movie_data_$i"]);
                $movie = [
                    'name' => $movieData[0],
                    'isan' => $movieData[1],
                    'year' => $movieData[2],
                    'rating' => $movieData[3],
                ];

                $movies[] = $movie;
            }
        }

        // Check if the ISAN already exists
        $movieExists = false;
        for ($i = 0; $i < $movieCount; $i++) {
            if ($movies[$i]['isan'] == $isan) {
                $movieExists = true;
                if (!empty($name) && !empty($rating)) {
                    $movies[$i]['name'] = $name;
                    $movies[$i]['year'] = $year;
                    $movies[$i]['rating'] = $rating;
                } elseif (empty($name)) {
                    // Delete the movie entry
                    array_splice($movies, $i, 1);
                }
                break;
            }
        }

        // If the ISAN doesn't exist and ISAN is 8 digits, add a new movie
        if (!$movieExists && strlen($isan) == 8) {
            $movies[] = [
                'name' => $name,
                'isan' => $isan,
                'year' => $year,
                'rating' => $rating,
            ];
            $movieCount++;
        }
    }
    ?>
    <h1>Movie Tracker</h1>
    
    <!-- Display Movie List -->
    <ul>
        <?php
        for ($i = 0; $i < count($movies); $i++) {
            echo "<li>{$movies[$i]['name']} ({$movies[$i]['year']}) - ISAN: {$movies[$i]['isan']}, Rating: {$movies[$i]['rating']}</li>";
        }
        ?>
    </ul>
    
    <!-- Movie Entry Form -->
    <h2>Add/Edit Movies</h2>
    <form action="movies.php" method="post">
        <input type="hidden" name="movie_count" value="<?= $movieCount ?>">
        <?php
        // Re-populate hidden input fields for each movie
        for ($i = 0; $i < count($movies); $i++) {
            $movieData = implode('|', $movies[$i]);
            echo "<input type='hidden' name='movie_data_$i' value='$movieData'>";
        }
        ?>
        
        <label for="name">Movie Name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="isan">ISAN:</label>
        <input type="text" name="isan" id="isan" required><br>
        <label for="year">Year:</label>
        <input type="text" name="year" id="year"><br>
        <label for="rating">Rating (0-5):</label>
        <select name="rating" id="rating">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
