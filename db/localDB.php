<?php
try
{
//    $dbUrl = getenv('DATABASE_URL');
//
//    $dbOpts = parse_url($dbUrl);
//
//    $dbHost = $dbOpts["host"];
//    $dbPort = $dbOpts["port"];
//    $dbUser = $dbOpts["user"];
//    $dbPassword = $dbOpts["pass"];
//    $dbName = ltrim($dbOpts["path"],'/');

$db = new PDO("pgsql:host=ec2-54-235-68-3.compute-1.amazonaws.com;port=5432;dbname=danqkkla8674jm", "wnwciycwvprknc", "68f1ee97fb2a3556aaadca695c4fba73e0d18eccc75d4be6612e5cd018c207d4");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
echo 'Error!: ' . $ex->getMessage();
die();
}
?>

