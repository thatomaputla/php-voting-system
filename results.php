<?php
    require_once 'includes/results-inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>

    <h1>Leaderboard</h1>

    <table boarder="1">
        <tr>
            <th>Car Choice</th>
            <th>Votes</th>
        </tr>
        <?php foreach ($results as $row): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['choice']); ?></td>
            <td><?php echo htmlspecialchars($row['count']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="home.php">Back to Login</a>
    
</body>
</html>