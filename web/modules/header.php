</head>
<body>

<?php
session_start();
?>

    <!--    Took this code from W3 Schools
    https://www.w3schools.com/howto/howto_js_mobile_navbar.asp-->
    <!-- Top Navigation Menu -->
    <div class="topnav">
        <h1 id="pageTitle">Play Tracker</h1>
        <!-- Navigation links (hidden by default) -->
        <div id="myLinks">

            <a href="myPlays.php">View my Plays</a>
            <a href="myGames.php">View my Games</a>
            <a href="addPlay.php">Add a Play</a>
            <a href="addGame.php">Add a Game</a>
            <a href="latestPlays.php">Recent Plays</a>
<!--            <a href="myPlays.php" onclick="location.href=this.href+'?uid='+currentUID+'&dn='+currentName;return false;">View my Plays</a>-->
<!--            <a href="myGames.php" onclick="location.href=this.href+'?uid='+currentUID+'&dn='+currentName;return false;">View my Games</a>-->
<!--            <a href="addPlay.php" onclick="location.href=this.href+'?uid='+currentUID+'&dn='+currentName;return false;">Add a Play</a>-->
<!--            <a href="addGame.php" onclick="location.href=this.href+'?uid='+currentUID+'&dn='+currentName;return false;">Add a Game</a>-->
<!--            <a href="latestPlays.php">Recent Plays</a>-->
            <a href="index.php" onclick="firebase.auth().signOut();">Sign Out</a>
        </div>
        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
        <a id="menuItems" href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>