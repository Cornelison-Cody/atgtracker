<?php include 'modules/head.php'; ?>
<?php include_once'../db/dbconnect.php'; ?>
<title>Recent Plays</title>
<?php include 'modules/header.php'; ?>
<script>
</script>
<div class="flex-container">
    <?php
    foreach($db->query('SELECT * FROM plays INNER JOIN game ON plays.game_id = game.game_id') as $row) {
        echo "<div class='post-container'>
                <h3>" . $row[game_name] . "</h3>
                <img src='media/" . $row[game_name] . ".JPG'>
                <p>PLAYERS: " . $row[players_text] .  "</p>
                <p>WINNER: " . $row[winner_text] .  "</p>
                <p>Score: " . $row[score_text] .  "</p>
                <p>Notes: " . $row[notes_text] .  "</p>    
                <p>Date: " .$row[date_played] . "</p>                 
               </div>";
    };
    ?>
</div>




