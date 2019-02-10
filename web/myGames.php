<?php include 'modules/head.php'; ?>
<?php include_once'../db/dbconnect.php'; ?>
    <title><?php echo $db->query('SELECT display_name FROM user_table WHERE firebase_uid =' . $_GET[uid])?>'s Games</title>
<?php include 'modules/header.php'; ?>
<script>
</script>
<div id="dataDump">
    <?php
    foreach($db->query('SELECT * FROM games_owned INNER JOIN user_table ON games_owned.firebase_uid = user_table.firebase_uid INNER JOIN game ON games_owned.game_id = game.game_id WHERE user_table.firebase_uid =' . $_GET[uid]) as $row) {
    echo $row[game_name];
    };
    ?>
</div>




