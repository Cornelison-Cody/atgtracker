<?php include 'modules/head.php'; ?>
<?php include_once'../db/dbconnect.php'; ?>
    <title>My Games</title>
<?php include 'modules/header.php'; ?>
<script>
</script>
<div id="dataDump">
    <?php echo $_GET['uid'] ?>
    <?php echo $db ?>
    <?php
        foreach ($db->query('SELECT * FROM games_owned')
                 as $row) {
            echo "<div>". $row. "</div>";
        }
    ?>
</div>

<!--INNER JOIN user_table ON games_owned.firebase_uid = user_table.firebase_uid INNER JOIN game ON games_owned.game_id = game.game_id WHERE user_table.firebase_uid =' . $_GET[uid]-->

