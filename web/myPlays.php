<?php
    include 'modules/head.php';
    include_once'../db/dbconnect.php';
    include 'modules/header.php';
?>
    <title><?php foreach($db->query('SELECT display_name FROM user_table WHERE firebase_uid =\'' . $_SESSION['uid'] . '\'') as $row) {echo $row[display_name];}?>'s Plays</title>

<script>
    window.addEventListener('load', function() {
        updateTitle("My Plays");
    });
</script>
<div class="flex-container">
    <?php
    foreach($db->query('SELECT * FROM plays INNER JOIN user_table ON plays.firebase_uid = user_table.firebase_uid INNER JOIN game ON plays.game_id = game.game_id WHERE user_table.firebase_uid =\'' . $_SESSION['uid'] . '\'') as $row) {
        echo "<div class='post-container'>
                <h3>" . $row[game_name] . "</h3>
                <object data='media/" . $row[game_name] .".JPG'>
                    <img src='media/notFound.JPG'>
                </object>
                <p>PLAYERS: " . $row[players_text] .  "</p>
                <p>WINNER: " . $row[winner_text] .  "</p>
                <p>Score: " . $row[score_text] .  "</p>
                <p>Notes: " . $row[notes_text] .  "</p>
                <p>Date: " .$row[date_played] . "</p>             
               </div>";
    };
    ?>
</div>




