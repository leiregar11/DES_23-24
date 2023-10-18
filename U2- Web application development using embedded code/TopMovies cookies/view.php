<!DOCTYPE html>
<html>
<head>
    <title>Movie Tracker</title>
</head>
<body>
    <h1>Movie Tracker</h1>
    
    <!-- Movie Entry Form -->
    <form action="movies.php" method="post">
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
