<?php
include_once '../db/dbconnect.php';

if (isset($_POST['uid'])) {
    $db->query("INSERT INTO user_table (firebase_uid, display_name) SELECT '$_POST[uid]', '$_POST[dn]' WHERE NOT EXISTS (SELECT firebase_uid FROM user_table WHERE firebase_uid = '$_POST[uid]' )");
    session_start();
    $_SESSION['uid'] = $_POST['uid'];
    $_SESSION['dn'] = $_POST['dn'];
}