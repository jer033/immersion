<?php
$page_title = "Leaderboard"; 
include 'header.php';
include 'db_connect.php';

$retrieve_command = "SELECT Username, HighScore
FROM Users ORDER BY HighScore DESC, Username ASC LIMIT 25";
$fetched_data = mysqli_query($conn, $retrieve_command);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h4> These are the top 25 players with the highest scores in the <a href="memory.php">memory game</a>. </h4>
<h4> To be eligible for the leaderboard, you must be logged in and you must have saved your score. </h4>

    <h2>Top 25 Players</h2>
    <table style="border-collapse: collapse;table-layout: fixed" >
        <thead>
            <tr style="text-align: left; border-bottom: 2px solid #ffb592;">
                <th>Rank</th>
                <th>Username</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $rank = 0;
            while ($row = mysqli_fetch_assoc($fetched_data)) { 
            ?>
                <tr>
                    <td style = "color: #563412;font-size:36px;"><?php echo ++$rank; ?></td>
                    <td style = "color: #8f0606;font-size:36px;"><?php echo htmlspecialchars($row['Username']); ?></td>
                    <td style = "color: #122456;font-size:36px;"><?php echo number_format($row['HighScore']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>


