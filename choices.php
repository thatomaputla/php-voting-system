<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Choices</title>
</head>
<body>
    
    <h1>Choose your fighter</h1>
</br>   

    <form action="includes/choices-inc.php" method="POST">
        <button type="submit" name="choice" value="bmw">BMW</button>
        <button type="submit" name="choice" value="Mercedes-Benz">Mercedes-Benz</button>
        <button type="submit" name="choice" value="Audi">Audi</button>
        <button type="submit" name="choice" value="Volkswagen">Volkswagen</button>
        <button type="submit" name="choice" value="Toyota">Toyota</button>
        <button type="submit" name="choice" value="Ford">Ford</button>
        <button type="submit" name="choice" value="Land Rover">Land Rover</button>
    </form>


</body>
</html>