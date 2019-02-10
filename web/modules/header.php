</head>
<body>
<!--    Took this code from W3 Schools
https://www.w3schools.com/howto/howto_js_mobile_navbar.asp-->
    <script>
        var currentUID = firebase.auth().currentUser.uid;
    </script>
    <!-- Top Navigation Menu -->
    <div class="topnav">
        <h1>Play Tracker</h1>
        <!-- Navigation links (hidden by default) -->
        <div id="myLinks">
            <a href="myPlays.php" onclick="location.href=this.href+'?uid='+currentUID">View my Plays</a>
            <a href="myGames.php" onclick="location.href=this.href+'?uid='+currentUID">View my Games</a>
            <a href="addPlay.php">Add a Play</a>
            <a href="addGame.php">Add a Game</a>
            <a href="latestPlays.php">Recent Plays</a>
        </div>
        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>