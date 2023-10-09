<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Movies - Leire</title>
</head>
<body>


<div class="showInfo">
    <table border="1">
        <tr>
            <th>Name</th>
            <th>ISAN</th>
            <th>Year</th>
            <th>Punctuation</th>
        </tr>
        <?php
        include "movies.php";
        if(isset($topMovies)) {
            $cont = 0;
            foreach ($topMovies as $movies) {
                foreach ($movies as $movie) {
                    $cont++;
                    if ($cont % 2 == 0) {
                        echo "<tr style='background-color: lightblue;'>";
                    } else {
                        echo "<tr>";
                    }
                    echo $movie->__toString();
                    echo "</tr>";
                }
            }
        }
        ?>
    </table>
</div>
    <div class="enterInfo">
    <form method="get" action="movies.php">
        <label>Name: <input type="text" name="name"></label><br>
        <label>ISAN: <input type="text" name="isan"></label><br>
        <label>Year: <input type="text" name="year"></label><br>
        <label>Punctuation: 
            <select name="punctuation">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </label><br>
        <input type="submit" name="send" value="send">
        <input type="hidden" name="hidden" value="<?php echo htmlspecialchars($topMovies->getFilms()); ?>">

    </form>
</div>

</body>
</html>