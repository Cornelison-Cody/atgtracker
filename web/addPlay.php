<?php include 'modules/head.php'; ?>
<?php include_once'../db/dbconnect.php'; ?>
    <title>Add a new Play</title>
<?php include 'modules/header.php'; ?>

<script>
    window.addEventListener('load', function() {
        updateTitle("Add Play");
        document.getElementById("firebaseUID").value = <?php echo "'" . $_GET[uid] . "'";?>;

        <?php
            if (isset($_POST['submit'])) {
                echo "showNotice();";

                $game_id;
                foreach ($db->query('SELECT * FROM game WHERE game_name = \'' . $_POST[game] . '\'') as $row) {
                    $game_id = $row[game_id];
                };

                $db->query('INSERT INTO plays (game_id, firebase_uid, players_text, winner_text, score_text, notes_text, date_played) VALUES (\'' . $game_id .'\', \'' . $_POST[firebase_uid] . '\', \'' . $_POST['players'] . '\', \'' . $_POST['winner'] . '\', \'' . $_POST['score'] . '\', \'' . $_POST['notes'] . '\', \'' . $_POST['date'] . '\')');
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
    <input type="text" name="players" placeholder="Players *" required>
    <input type="text" name="winner" placeholder="Winner *" required>
    <input type="text" name="score" placeholder="Score *" required>
    <input type="text" name="notes" placeholder="Notes">
    <input type="text" name="date" value="<?php echo date("Y-m-d"); ?>">
    <input type="hidden" name="firebase_uid" id="firebaseUID">
    <br>
    <input class="button" type="submit" name="submit" value="Add Play">

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