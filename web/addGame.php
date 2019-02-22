<?php include 'modules/head.php'; ?>
<?php include_once'../db/dbconnect.php'; ?>
<title>Add a new Game</title>
<?php include 'modules/header.php'; ?>

<script>
    window.addEventListener('load', function() {
        updateTitle("Add Game");

        <?php
        if (isset($_POST['submit'])) {
            echo "showNotice();";

            $db->query('INSERT INTO game (game_name) SELECT \'' . $_POST[game] . '\' WHERE NOT EXISTS (SELECT * FROM game WHERE game_name =\'' . $_POST[game] . '\')');

            $game_id;
            foreach ($db->query('SELECT * FROM game WHERE game_name = \'' . $_POST[game] . '\'') as $row) {
                $game_id = $row[game_id];
            };

            $db->query('INSERT INTO games_owned (game_id, firebase_uid) VALUES (\'' . $game_id .'\', \'' . $_SESSION['uid'] . '\')');

        }
        ?>
//
        setTimeout(function () {
            clearNotice();
        }, 2000);
    });
</script>


<form action="" method="post">
    <p>*Required</p>
    <input list="gameNames" type="text" name="game" placeholder="Game Name *" required>
    <br>
    <input class="button" type="submit" name="submit" value="Add Game">

    <datalist id="gameNames">
        <?php
        foreach($db->query('SELECT * FROM game ORDER BY game_name') as $row) {
            echo "<option value='" . $row[game_name] . "'>";
        };
        ?>
    </datalist>

</form>

<div class="post-container" id="confirmationNotice" style="display: none;">
    <div id="closeConfirmationButton">
        <i class="fa fa-window-close" aria-hidden="true" onclick="clearNotice();"></i>
    </div>
    <h1>Submitted, thank you!</h1>
    <h3 onclick="clearNotice();">Close</h3>
</div>