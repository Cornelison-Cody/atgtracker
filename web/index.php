<?php include 'modules/head.php'; ?>
    <title>ATG Play Tracker</title>
<?php
    include 'modules/header.php';
    include 'authUI.php';
?>
<div id="signedInMsg" class="topMessage">
    <h2>Sign in, Success!</h2>
    <h3>Click the dropdown menu in the top right to select your action.</h3>
</div>

<?php
    $db->query('INSERT INTO user_table (firebase_uid, display_name) SELECT \'' . $POST[game] . '\' WHERE NOT EXISTS (SELECT * FROM game WHERE game_name =\'' . $POST[game] . '\')');
?>

</body>
</html>


