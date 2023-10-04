<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Movies - Leire</title>
</head>
<body>
   
    <div class="showInfo">
        <table>
            <tr>
                <th>Name</th>
                <th>ISAN</th>
                <th>Year</th>
                <th>Punctuation</th>
            </tr>
            <?php
            include "movies.php";
    
            foreach ($cinema->getMovies() as $movie) {
                
                if ($cont % 2 == 0) {
                    echo "<tr style='background-color: lightblue;'>";
                    echo $movie->__toString();
                
                
                echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
    <div class="enterInfo">
        <form method="get"  acction="movies.php">
        <label>Name: <input type="textbox" name="name"></label><br>
        <label>ISAN: <input type="textbox" name="isan"></label><br>
        <label>Year: <input type="textbox" name="year"></label><br>
        <label>Punctuation: 
            <select name="punctuation">
                <option value = "0" >0</option>
                <option value = "1" >1</option>
                <option value = "2" >2</option>
                <option value = "3" >3</option>
                <option value = "4" >4</option>
                <option value = "5" >5</option>
            </select>
        </label><br>
        <input type="submit" name="send" value="send">
        <input type="hidden" name="hidden" 
            value="<?php echo htmlspecialchars($cinema->__toString()); ?>">
        
    </form>
    </div>
    
</body>
</html>