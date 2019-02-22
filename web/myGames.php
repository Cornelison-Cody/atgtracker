<?php
    include 'modules/head.php';
    include_once'../db/dbconnect.php';
    include 'modules/header.php';
?>
    <title><?php foreach($db->query('SELECT display_name FROM user_table WHERE firebase_uid =\'' . $_SESSION['uid'] . '\'') as $row) {echo $row[display_name];}?>'s Games</title>

<script>
    window.addEventListener('load', function() {
        updateTitle("My Games");
    });
</script>
<div class="flex-container">
    <?php
    foreach($db->query('SELECT games_owned.game_id, firebase_uid, game.game_name, count(*) FROM games_owned INNER JOIN game ON games_owned.game_id = game.game_id WHERE firebase_uid =\'' . $_SESSION['uid'] . '\' GROUP BY firebase_uid, games_owned.game_id, game.game_name') as $row) {
        echo "<div class='post-container'>
                <h3>" . $row[game_name] . "</h3>
                <object data='media/" . $row[game_name] .".JPG'>
                    <img src='media/notFound.JPG'>
                </object>
           </div>";
    };
    ?>
</div>




